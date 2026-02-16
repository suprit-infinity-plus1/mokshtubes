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

        /** ✅ STORE LEAD IN DATABASE **/
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
            $mail->addAddress('siddiquimahfooz327@gmail.com');
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

    public function specificBlog($country, $slug)
    {
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
        // \Illuminate\Support\Facades\Log::info("Injecting country: $country");

        // Match common domains including localhost variants and production
        $rawDomains = [
            'https://mokshtubes.com',
            'http://mokshtubes.com',
            'http://127.0.0.1:8000',
            'http://localhost:8000',
            url('/') // Fallback to current app URL
        ];

        $domains = array_map(function ($domain) {
            return preg_quote(rtrim($domain, '/'), '/');
        }, array_unique($rawDomains));

        $domainPattern = implode('|', $domains);

        $html = preg_replace_callback(
            '/href="(' . $domainPattern . ')(\/[^"]*)"/i', // Added 'i' modifier for case-insensitivity
            function ($matches) use ($country) {
                // \Illuminate\Support\Facades\Log::info("Match found: " . $matches[0]);
    
                $baseUrl = $matches[1];
                $path = $matches[2];

                // Check if path already starts with /country/ or is just /country
                if (preg_match('/^\/' . $country . '(\/|$)/', $path)) {
                    // \Illuminate\Support\Facades\Log::info("Skipping already prefixed: $path");
                    return 'href="' . $baseUrl . $path . '"';
                }

                $newLink = 'href="' . $baseUrl . '/' . $country . $path . '"';
                // \Illuminate\Support\Facades\Log::info("Replaced with: $newLink");
                return $newLink;
            },
            $html,
            -1,
            $count
        );

        // Debug: Verify if any replacements occurred
        // dump("Replacements count: " . $count);

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

    public function uae’sUltimateGuide()
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

    public function hastelloyGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Hastelloy%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.hastelloy.' . $slug, compact('blogs', 'slug'));
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

    public function monelGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Monel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.monel.' . $slug, compact('blogs', 'slug'));
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

    public function incoloyGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Incoloy%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.incoloy.' . $slug, compact('blogs', 'slug'));
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

    public function nickelBasedSuperalloysGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Nickel Based Superalloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.nickel-based-superalloys.' . $slug, compact('blogs', 'slug'));
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

    public function inconelGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Inconel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.inconel.' . $slug, compact('blogs', 'slug'));
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

    public function titaniumGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Titanium%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.titanium.' . $slug, compact('blogs', 'slug'));
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

    public function aluminiumAlloysGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Aluminium Alloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.aluminium-alloys.' . $slug, compact('blogs', 'slug'));
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

    public function superAusteniticStainlessSteelGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Super Austenitic Stainless Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.super-austenitic-stainless-steel.' . $slug, compact('blogs', 'slug'));
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

    public function hardToFindAndSpecialAlloysGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Hard To Find and Special Alloy%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.hard-to-find-special-alloys.' . $slug, compact('blogs', 'slug'));
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

    public function austeniticStainlessSteelGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Austenitic Stainless Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.austenitic-stainless-steel.' . $slug, compact('blogs', 'slug'));
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

    public function engineeringSteelsGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Engineering Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.engineering-steels.' . $slug, compact('blogs', 'slug'));
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

    public function copperAlloysGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Copper Alloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.copper-alloys.' . $slug, compact('blogs', 'slug'));
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

    public function zirconiumGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Zirconium%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.zirconium.' . $slug, compact('blogs', 'slug'));
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

    public function haynesSuperalloysGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Haynes Alloys%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.haynes-superalloys.' . $slug, compact('blogs', 'slug'));
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

    public function duplexAndSuperDuplexGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%Duplex & Super Duplex%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.duplex-and-super-duplex.' . $slug, compact('blogs', 'slug'));
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

    public function highStrengthStainlessSteelGrade($country, $slug)
    {
        // Blogs
        $blogCategories = BlogCategory::where('status', 1)
            ->where('name', 'like', '%High Strength Stainless Steel%')
            ->get();

        $categoryId = $blogCategories->pluck('id')->first();

        $blogs = Blog::where('status', 1)
            ->where('category_id', $categoryId)
            ->paginate(3);

        // Pass current slug (optional)
        return view('frontend.materials.high-strength-stainless-steel.' . $slug, compact('blogs', 'slug'));
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

    public function weldedPipes()
    {
        return view('frontend.products.pipes-tubes.welded-pipes');
    }

    public function seamlessPipes()
    {
        return view('frontend.products.pipes-tubes.seamless-pipes');
    }

    public function capillaries()
    {
        return view('frontend.products.pipes-tubes.capillaries');
    }

    public function hollowSectionPipe()
    {
        return view('frontend.products.pipes-tubes.hollow-section-pipe');
    }

    public function uBentTubes()
    {
        return view('frontend.products.pipes-tubes.u-bent-tubes');
    }

    public function boilerHeatExchangerTubes()
    {
        return view('frontend.products.pipes-tubes.boiler-heat-exchanger-tubes');
    }
    public function SS304ERWPipes()
    {
        return view('frontend.products.pipes-tubes.SS-304-ERW-pipes');
    }
    public function SS316ERWPipes()
    {
        return view('frontend.products.pipes-tubes.SS-316-ERW-pipes');
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

    public function customSteelFurniture()
    {
        return view('frontend.products.special-fabricated.custom-steel-furniture');
    }

    public function fabricatedSsGrills()
    {
        return view('frontend.products.special-fabricated.fabricated-ss-grills');
    }

    public function ssrailings()
    {
        return view('frontend.products.special-fabricated.ss-railings');
    }

    public function glassrailings()
    {
        return view('frontend.products.special-fabricated.glass-railings');
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

    public function fittingsAndFlanges()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.fittings-and-flanges');
    }

    public function flangesAndGaskets()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.flanges-and-gaskets');
    }

    public function customFabricatedFittings()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.custom-fabricated-fittings');
    }

    public function fasteners()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.fasteners');
    }

    public function pipeFittings()
    {
        return view('frontend.products.pipe-fittings-flanges-fasteners.pipe-fittings');
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

    public function squareBars()
    {
        return view('frontend.products.bars-rods.square-bars');
    }

    public function threadedRods()
    {
        return view('frontend.products.bars-rods.threaded-rods');
    }

    public function roundBars()
    {
        return view('frontend.products.bars-rods.round-bars');
    }

    public function hollowBars()
    {
        return view('frontend.products.bars-rods.hollow-bars');
    }

    public function hexagonBars()
    {
        return view('frontend.products.bars-rods.hexagon-bars');
    }

    public function flatBars()
    {
        return view('frontend.products.bars-rods.flat-bars');
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

    public function chequeredSheets()
    {
        return view('frontend.products.sheets-plates-coils.chequered-sheets');
    }

    public function strips()
    {
        // dd('I AM HERE');
        return view('frontend.products.sheets-plates-coils.strips');
    }

    public function shimsheets()
    {
        return view('frontend.products.sheets-plates-coils.shim-sheets');
    }

    public function sheetsandplates()
    {
        return view('frontend.products.sheets-plates-coils.sheets-and-plates');
    }

    public function perforatedsheets()
    {
        return view('frontend.products.sheets-plates-coils.perforated-sheets');
    }

    public function coils()
    {
        return view('frontend.products.sheets-plates-coils.coils');
    }

    public function claddedplates()
    {
        return view('frontend.products.sheets-plates-coils.cladded-plates');
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
        // $blogsCount = Blog::count();

        // // Only count properties with p_status = 1
        // $propertiesCount = Property::where('p_status', 1)->count();

        // // Only count interiors with status = 1
        // $interiorsCount = Interior::where('status', 1)->count();

        // dd('dashboard5');

        $data = [
            'blogsCount' => Blog::count(),
            'categoriesCount' => BlogCategory::count(),
            'tagsCount' => Tag::count(),
        ];

        return view('backend.dashboard', $data);

    }
}

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class LeadController extends Controller
// {
//     public function store(Request $request)
//     {
//         // Validate email
//         $request->validate([
//             'email' => 'required|email',
//         ]);

//         // Path to datasheet in public folder
//         $filePath = public_path('datasheets/EN8_Datasheet_v2.docx');

//         if (! file_exists($filePath)) {
//             return back()->with('error', 'Datasheet file not found!');
//         }

//         // Download the file
//         return response()->download($filePath, 'EN8_Datasheet.docx');
//     }
// }
