<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use App\Models\WebsiteLead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class MainController extends Controller
{
    //
    public function home()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(3);

        return view('frontend.index', compact('blogs'));

    }

    public function sendMail(Request $request)
    {
        // dd('hello man');
        $validated = $request->validate([
            'form_name' => 'required|string|max:50',
            'form_email' => 'required|email|max:100',
            'form_phone' => 'nullable|max:20',
            'form_subject' => 'nullable|string|max:100',
            'form_message' => 'required|max:1000',
            'website' => 'nullable',
        ]);

        $recaptcha_response = $request->input('g-recaptcha-response');

        if (is_null($recaptcha_response)) {
            return redirect()->back()->with('status', 'error')->with('msg', 'Please Complete the Recaptcha to proceed');
        }

        $url = 'https://www.google.com/recaptcha/api/siteverify';

        $body = [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $recaptcha_response,
            'remoteip' => $request->ip(),
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);

        if ($response->successful() && $result->success == true) {

        } else {
            return redirect()->back()->with('status', 'error')->with('msg', 'Please Complete the Recaptcha Again to proceed');
        }

        // if ($request->website != '') {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'Bot detected',
        //     ], 422);
        // }

        if (!empty($request->website)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Bot detected',
            ], 422);
        }

        /** âœ… STORE LEAD IN DATABASE **/
        WebsiteLead::create([
            'name' => $validated['form_name'],
            'email' => $validated['form_email'],
            'phone' => $validated['form_phone'] ?? null,
            'subject' => $validated['form_subject'] ?? null,
            'message' => $validated['form_message'],
        ]);

        $name = $request->form_name ?? '-';
        $email = $request->form_email ?? '-';
        $phone = $request->form_phone ?? '-';
        $subject = $request->form_subject ?? 'Mokshtubes Enquiry';
        $message = $request->form_message ?? '-';

        $html = view('frontend.email', compact(
            'name',
            'email',
            'phone',
            'subject',
            'message',
        ))->render();
        // dd($html);
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->Port = env('MAIL_PORT');
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->SMTPAutoTLS = true;
            $mail->SMTPDebug = 0;
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress('info@mokshtubes.com');
            $mail->addBCC('supritdagade77@gmail.com');
            // $mail->Body = nl2br($validated['form_message']);
            $mail->isHTML(true);
            $mail->Subject = "You Received {$subject}";
            $mail->Body = $html;
            $mail->AltBody = strip_tags($html);
            $mail->send();

            // return response()->json([
            //     'status' => 'success',
            //     'message' => 'Mail sent',
            // ]);
            return redirect()->route('index')
                ->with('status', 'success')
                ->with('msg', 'Your message has been sent successfully!');

        } catch (\Exception $e) {
            return redirect()->route('index')
                ->with('status', 'error')
                ->with('msg', 'Email sending failed.');
        }
    }

    public function websiteLeads()
    {
        $websiteLeads = WebsiteLead::latest()->get();

        return view('backend.website_leads.index', compact('websiteLeads'));
    }

    public function exportWebsiteLeads(Request $request)
    {
        $from = $request->query('from');
        $to = $request->query('to');

        // Validate date inputs
        $request->validate([
            'from' => 'nullable|date',
            'to' => 'nullable|date|after_or_equal:from',
        ]);

        // Build query
        $query = WebsiteLead::query()->select(
            'id',
            'name',
            'email',
            'phone',
            'subject',
            'message',
            'created_at'
        );

        if ($from) {
            $query->whereDate('created_at', '>=', $from);
        }

        if ($to) {
            $query->whereDate('created_at', '<=', $to);
        }

        $websiteLeads = $query->orderBy('created_at', 'desc')->get();

        $fileName = 'website_leads_' . now()->format('Y_m_d_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename={$fileName}",
        ];

        $columns = [
            'ID',
            'Name',
            'Email',
            'Phone',
            'Subject',
            'Message',
            'Created At',
        ];

        $callback = function () use ($websiteLeads, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($websiteLeads as $lead) {
                fputcsv($file, [
                    $lead->id,
                    $lead->name,
                    $lead->email,
                    $lead->phone,
                    $lead->subject,
                    $lead->message,
                    $lead->created_at->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);
    }

    public function aboutUs()
    {
        return view('frontend.about');
    }

    public function calculator()
    {
        return view('frontend.calculator');
    }

    public function contactUs()
    {
        return view('frontend.contact');
    }

    public function contactUsGulalwadi()
    {
        return view('frontend.gulalwadi');
    }

    public function blogs()
    {
        $blogs = Blog::where('status', true)
            ->orderBy('published_at', 'desc')
            ->paginate(9);
        // dd($blogs);

        return view('frontend.blogs', compact('blogs'));
    }

    public function whatsappIntent()
    {
        return view('frontend.whatsapp-intent');
    }

    public function specificBlog($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        // $blogs = Blog::where('status', true)
        //     ->orderBy('published_at', 'desc');
        $allBlogs = Blog::where('status', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        // dd('i am here1');
        // Fetch the current blog with its FAQs
        $blog = Blog::where('slug', $slug)
            ->with('faqs') // eager load FAQs
            ->firstOrFail();

        // Rewrite internal links in blog content to include country prefix
        $blog->content = $this->injectCountryToInternalLinks($blog->content);

        return view('frontend.blogs.single-blog', compact('blog', 'allBlogs'));
    }

    private function injectCountryToInternalLinks($html)
    {
        $country = request()->segment(1);
        $validCodes = ['se', 'no', 'ng', 'ae', 'us', 'sg', 'mv', 'sa', 'de', 'gb', 'ca', 'jo', 'pe', 'au', 'th', 'ru', 'fr', 'be', 'za', 'bg', 'tw', 'it', 'nl', 'in'];

        // Default to 'in' if no country segment or if it's a known path (meaning root domain access)
        if (!$country || !in_array(strtolower($country), $validCodes)) {
            $country = 'in';
        }

        // Match common domains and production
        $rawDomains = [
            'https://mokshtubes.com',
            'http://mokshtubes.com',
            'http://127.0.0.1:8000',
            'http://localhost:8000',
            url('/'),
        ];

        $domains = array_map(function ($domain) {
            return preg_quote(rtrim($domain, '/'), '/');
        }, array_unique($rawDomains));

        $domainPattern = implode('|', $domains);

        $html = preg_replace_callback(
            '/href=([\'"])(' . $domainPattern . ')?(\/[^\'"]*)?(\1)/i',
            function ($matches) use ($country, $validCodes) {
                $quote = $matches[1];
                $baseUrl = $matches[2] ?? '';
                $path = $matches[3] ?? '/';

                // Normalize path to start with single slash
                $path = '/' . ltrim($path, '/');

                // Check if already prefixed with ANY valid country code
                $segments = explode('/', ltrim($path, '/'));
                if (!empty($segments[0]) && in_array(strtolower($segments[0]), $validCodes)) {
                    return 'href=' . $quote . $baseUrl . $path . $quote;
                }

                // Prepend target country
                $newPath = '/' . $country . $path;
                // Prevent double slashes and trailing slashes for clean SEO URLs
                $newPath = preg_replace('#/+#', '/', $newPath);
                $newPath = rtrim($newPath, '/');
                if ($newPath === '') {
                    $newPath = '/';
                }

                return 'href=' . $quote . $baseUrl . $newPath . $quote;
            },
            $html
        );

        return $html;
    }

    public function contactUsKhetwadi()
    {
        return view('frontend.khetwadi');
    }

    public function contactUsKamatipura()
    {
        return view('frontend.kamatipura');
    }

    public function contactUsDarukhana()
    {
        return view('frontend.darukhana');
    }

    public function StainlessSteelInconelTubes()
    {

        return view('frontend.blogs.stainless-steel-inconel-tubes');
    }

    public function tenMistakesToAvoidWhenBuyingStainlessSteelPipes()
    {

        return view('frontend.blogs.10-mistakes-to-avoid-when-buying-stainless-steel-pipes');
    }

    public function emergingTrendsInIndustrialPipingFor2025AndBeyond()
    {

        return view('frontend.blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond');
    }

    public function everythingYouNeedToKnowAboutWeldedAndSeamlessPipes()
    {

        return view('frontend.blogs.everything-you-need-to-know-about-welded-and-seamless-pipes');
    }

    public function indiasStainlessSteelExportIndustry()
    {

        return view('frontend.blogs.indias-stainless-steel-export-industry');
    }

    public function theRoleOfHighPerformance()
    {

        return view('frontend.blogs.the-role-of-high-performance');
    }

    public function topSevenAdvantagesOfUsing()
    {

        return view('frontend.blogs.top-7-advantages-of-using');
    }

    public function weldedVsSeamless()
    {

        return view('frontend.blogs.welded-vs-seamless');
    }

    public function whyHastelloyWeighsMoreThanStainlessSteel()
    {

        return view('frontend.blogs.why-hastelloy-weighs-more-than-stainless-steel');
    }

    public function dinStandardMetalAlloys()
    {

        return view('frontend.blogs.din-standard-metal-alloys');
    }

    public function uaeâ€™sUltimateGuide()
    {

        return view('frontend.blogs.uaes-ultimate-guide');
    }

    public function stainlessSteelUsesInKitchen()
    {

        return view('frontend.blogs.stainless-steel-uses-in-kitchen');
    }

    public function whereToBuyHighQuality()
    {

        return view('frontend.blogs.where-to-buy-high-quality');
    }

    public function howToChooseTheBestStainlessSteelPipes()
    {

        return view('frontend.blogs.how-to-choose-the-best-stainless-steel-pipes');
    }

    public function HowStainlessSteelTubesImproveProcessEfficiency()
    {

        return view('frontend.blogs.how-stainless-steel-tubes-improve-process-efficiency');
    }

    public function stainlessSteelVsOtherMetals()
    {

        return view('frontend.blogs.stainless-steel-vs-other-metals');
    }

    public function stainlessSteelPipeInstallation()
    {

        return view('frontend.blogs.stainless-steel-pipe-installation');
    }

    public function stainlessSteelTubeGradesExplained()
    {

        return view('frontend.blogs.stainless-steel-tube-grades-explained');
    }

    public function stainlessSteelTubesApplicationsBenefitsAndCostGuide()
    {

        return view('frontend.blogs.stainless-steel-tubes-applications-benefits-and-cost-guide');
    }

    public function stainlessSteelTubingForFoodAndBeverageIndustry()
    {

        return view('frontend.blogs.stainless-steel-tubing-for-food-and-beverage-industry');
    }

    public function topTenUsesOfStainlessSteel()
    {

        return view('frontend.blogs.top-ten-uses-of-stainless-steel');
    }

    public function maintenanceTipsForStainlessSteel()
    {

        return view('frontend.blogs.maintenance-tips-for-stainless-steel');
    }

    public function stainlessSteelTubesVsCarbonSteelPipes()
    {

        return view('frontend.blogs.stainless-steel-tubes-vs-carbon-steel-pipes');
    }

    public function stainlessSteelSeamlessVsErwPipes()
    {

        return view('frontend.blogs.stainless-steel-seamless-vs-erw-pipes');
    }

    public function materials()
    {
        $materials = [
            'Hastelloy',
            'Monel',
            'Inconel',
            'Incoloy',
            'Nickel Based Superalloys',
            'Titanium',
            // 'Duplex & Super Duplex',
            'Austenitic Stainless Steel',
            // 'High Strength Stainless Steel',
            'Super Austenitic Stainless Steel',
            'Zirconium',
            'Engineering Steels',
            'Aluminium Alloys',
            'Copper Alloys',
            'Hard To Find Special Alloys',
            'Haynes Superalloys',
        ];

        return view(
            'frontend.materials',
            compact('materials')
        );
    }

    public function hastelloy()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Hastelloy%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.hastelloy.index', compact('blogs'));
    }

    public function hastelloyGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Hastelloy%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.hastelloy.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function monel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Monel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.monel.index', compact('blogs'));
    }

    public function monelGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Monel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.monel.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function incoloy()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%incoloy%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.incoloy.index', compact('blogs'));
    }

    public function incoloyGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Incoloy%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.incoloy.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function nickelBasedSuperalloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%nickelBasedSuperalloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.nickel-based-superalloys.index', compact('blogs'));
    }

    public function nickelBasedSuperalloysGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Nickel Based Superalloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.nickel-based-superalloys.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function inconel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Inconel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.inconel.index', compact('blogs'));
    }

    public function inconelGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Inconel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.inconel.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function titanium()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Titanium%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.titanium.index', compact('blogs'));
    }

    public function titaniumGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Titanium%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.titanium.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function aluminiumAlloys()
    {
        // $blogCategories = BlogCategory::where('status', 1)->get();
        // dd($blogCategories);

        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Aluminium Alloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.aluminium-alloys.index', compact('blogs'));
    }

    public function aluminiumAlloysGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Aluminium Alloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.aluminium-alloys.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function superAusteniticStainlessSteel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%superAusteniticStainlessSteel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.super-austenitic-stainless-steel.index', compact('blogs'));
    }

    public function superAusteniticStainlessSteelGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Super Austenitic Stainless Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.super-austenitic-stainless-steel.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function hardToFindAndSpecialAlloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Hard To Find and Special Alloy%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.hard-to-find-special-alloys.index', compact('blogs'));

    }

    public function hardToFindAndSpecialAlloysGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Hard To Find and Special Alloy%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.hard-to-find-special-alloys.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function austeniticStainlessSteel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%austeniticStainlessSteel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);

        // dd($blogs);
        return view('frontend.materials.austenitic-stainless-steel.index', compact('blogs'));

    }

    public function austeniticStainlessSteelGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Austenitic Stainless Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.austenitic-stainless-steel.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function engineeringSteels()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Engineering Steel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.engineering-steels.index', compact('blogs'));
    }

    public function engineeringSteelsGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Engineering Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.engineering-steels.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function copperAlloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Copper Alloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.copper-alloys.index', compact('blogs'));
    }

    public function copperAlloysGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Copper Alloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.copper-alloys.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function zirconium()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Zirconium%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.zirconium.index', compact('blogs'));
    }

    public function zirconiumGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Zirconium%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.zirconium.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function haynesSuperalloys()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Haynes Alloys%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.haynes-superalloys.index', compact('blogs'));
    }

    public function haynesSuperalloysGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Haynes Alloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.haynes-superalloys.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function duplexAndSuperDuplex()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Duplex & Super Duplex%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.duplex-and-super-duplex.index', compact('blogs'));
    }

    public function duplexAndSuperDuplexGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Duplex & Super Duplex%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.duplex-and-super-duplex.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function highStrengthStainlessSteel()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%High Strength Stainless Steel%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.materials.high-strength-stainless-steel.index', compact('blogs'));
    }

    public function highStrengthStainlessSteelGrade($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%High Strength Stainless Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.high-strength-stainless-steel.' . $slug, compact('blogs', 'slug', 'country'));
    }

    public function showMaterialGrade($family, $grade)
    {
        $viewPath = "frontend.materials.$family.$grade";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }

        abort(404, 'Material grade page not found.');
    }

    // public function nickelAlloys()
    // {
    //     return view('frontend.materials.nickel-alloys.index');
    // }

    public function showMaterial($category, $slug)
    {
        $viewPath = "frontend.materials.$category.$slug";

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }
        abort(code: 404);
    }

    public function products()
    {
        return view('frontend.products.index');
    }

    // 1st Product pipes & tubes
    public function pipesTubes()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%pipes tubes%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.pipes-tubes.index', compact('blogs'));
    }


    public function pipesTubesProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipes-tubes.' . $slug, compact('slug', 'country'));

    }
    public function weldedPipesProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipes-tubes.welded-pipes.' . $slug, compact('slug', 'country'));

    }

    public function astmSa106GradeBSeamlessPipes()
    {
        return view('frontend.products.pipes-tubes.welded-pipes.grade-b-seamless-pipes');
    }


    // Special Fabricated Product
    public function specialFabricated()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Special Fabricated%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.special-fabricated.index', compact('blogs'));
    }

    public function specialFabricatedProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.special-fabricated.' . $slug, compact('slug', 'country'));

    }


    public function pipeFittingsFlangesFasteners()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Pipe Fittings, Flanges & Fasteners%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.pipe-fittings-flanges-fasteners.index', compact('blogs'));
    }

    public function pipeFittingsFlangesFastenersProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.' . $slug, compact('slug', 'country'));

    }


    public function fasteners()
    {
        $slug = 'fasteners';
        return view('frontend.products.pipe-fittings-flanges-fasteners.fasteners', compact('slug'));
    }

    public function fastenersProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.fasteners.' . $slug, compact('slug', 'country'));

    }


    public function astmA193GradeB8StudBolts()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.fasteners.grade-b8-stud-bolts');
    }


    // ============================== upcomings =========================
    public function astmA193GrB8mStuds()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.fasteners.astm-a193-gr-b8m-studs');
    }

    // ==================================================================

    public function pipeFittings()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.pipe-fittings');
    }

    public function pipeFittingsProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.' . $slug, compact('slug', 'country'));

    }

    public function pipeFittingsElbowsProducts($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.' . $slug, compact('slug', 'country'));

    }

    public function pipeFittingsBendsProducts($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.' . $slug, compact('slug', 'country'));

    }

    public function pipeFittingsReducersProducts($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.' . $slug, compact('slug', 'country'));

    }

    public function pipeFittingsOletsProducts($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.' . $slug, compact('slug', 'country'));

    }

    public function uBends()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.u-bends');
    }

    public function flanges()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.fittings-and-flanges');
    }

    public function flangesProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.pipe-fittings-flanges-fasteners.' . $slug, compact('slug', 'country'));

    }

    public function barsRods()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Bars and Rods%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);
        // dd($blogs);

        return view('frontend.products.bars-rods.index', compact('blogs'));
    }

    public function barsRodsProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.bars-rods.' . $slug, compact('slug', 'country'));

    }

    public function sheetsPlatesCoils()
    {
        $blogCategories = BlogCategory::where('status', 1)->where('name', 'like', '%Sheets & Plates%')->get();
        // dd($blogCategories);
        $categoryId = $blogCategories->pluck('id')->first();
        // dd($categoryId);
        $blogs = Blog::where('status', 1)->where('category_id', $categoryId)->paginate(3);

        // dd($blogs);
        return view('frontend.products.sheets-plates-coils.index', compact('blogs'));
    }


    public function sheetsPlatesCoilsProduct($country = null, $slug = null)
    {
        if ($slug === null) {
            $slug = $country;
        }
        $country = request()->route('country');

        return view('frontend.products.sheets-plates-coils.' . $slug, compact('slug', 'country'));

    }

    public function downloadDatasheet()
    {
        // Path to PDF in storage/app/public/datasheets/
        $filePath = storage_path('app/public/datasheets/en8.pdf');

        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        // Return PDF as download
        return response()->download($filePath, 'EN8_Steel_Datasheet.pdf');
    }

    public function dashboard()
    {
       

        $data = [
            'blogsCount' => Blog::count(),
            'categoriesCount' => BlogCategory::count(),
            'tagsCount' => Tag::count(),
        ];

        return view('backend.dashboard', $data);

    }
}
