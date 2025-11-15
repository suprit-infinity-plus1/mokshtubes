<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    // public function blogs()
    // {
    //     $blogsData = collect([

    //         [
    //             'title' => 'Stainless Steel Seamless vs ERW Pipes',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'Novermber 8, 2025',
    //             'image' => 'assets/images/blog/Stainless-Steel-Tubes-vs-Carbon-Steel-Pipes-A-Complete-Comparison_11zon.jpeg',
    //             'excerpt' => 'When engineers, buyers, or project managers compare stainless steel seamless vs ERW pipes',
    //             'link' => route('blogs.stainless-steel-seamless-vs-erw-pipes'),
    //         ],

    //         [
    //             'title' => 'Stainless Steel Tubes vs Carbon Steel Pipes',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 27, 2025',
    //             'image' => 'assets/images/blog/Stainless-Steel-Tubes-vs-Carbon-Steel-Pipes-A-Complete-Comparison_11zon.jpeg',
    //             'excerpt' => 'Choosing the right material for an industrial or construction piping system',
    //             'link' => route('blogs.stainless-steel-tubes-vs-carbon-steel-pipes'),
    //         ],
    //         [
    //             'title' => 'Maintenance Tips for Stainless Steel Tubes to Prevent Rust',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 27, 2025',
    //             'image' => 'assets/images/blog/Maintenance-Tips-for-Stainless-Steel_11zon.jpg',
    //             'excerpt' => 'Stainless steel is celebrated for its remarkable strength and resistance',
    //             'link' => route('blogs.maintenance-tips-for-stainless-steel'),
    //         ],
    //         [
    //             'title' => 'Top 10 Uses of Stainless Steel Pipes in Construction Projects',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 27, 2025',
    //             'image' => 'assets/images/blog/Top-10-Uses-of-Stainless-Steel-Pipes.jpeg',
    //             'excerpt' => 'Look at any modern city skyline, and you see a testament to strength,',
    //             'link' => route('blogs.top-ten-uses-of-stainless-steel'),
    //         ],
    //         [
    //             'title' => 'Stainless Steel Tubing for Food and Beverage Industry',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 27, 2025',
    //             'image' => 'assets/images/blog/stainless-steel-tubing-for-food-and-beverage-industry.webp',
    //             'excerpt' => 'In the food and beverage industry, there is zero room for error.',
    //             'link' => route('blogs.stainless-steel-tubing-for-food-and-beverage-industry'),
    //         ],
    //         [
    //             'title' => 'Stainless Steel Tubes: Applications, Benefits & Cost',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 27, 2025',
    //             'image' => 'assets/images/blog/Stainless-Steel-Tubes-Applications-Benefits-Cost-Guide.webp',
    //             'excerpt' => 'From the towering skyscrapers that define our cities to the intricate,',
    //             'link' => route('blogs.stainless-steel-tubes-applications-benefits-and-cost-guide'),
    //         ],
    //         [
    //             'title' => 'Stainless Steel Tube Grades Explained: Which One to Pick?',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 27, 2025',
    //             'image' => 'assets/images/blog/Stainless-Steel-Tube-Grades.png',
    //             'excerpt' => 'Choosing stainless steel for your tubing is a smart first step,',
    //             'link' => route('blogs.stainless-steel-tube-grades-explained'),
    //         ],
    //         [
    //             'title' => 'Stainless Steel Pipe Installation: Step by Step Guide',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 13, 2025',
    //             'image' => 'assets/images/blog/Stainless-Steel-Pipe-Installation.jpeg',
    //             'excerpt' => 'Choosing high quality stainless steel pipes for your project is an excellent first step toward ',
    //             'link' => route('blogs.stainless-steel-pipe-installation'),
    //         ],
    //         [
    //             'title' => 'Stainless Steel vs Other Metals: Longevity Comparison',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 13, 2025',
    //             'image' => 'assets/images/blog/Stainless-Steel-vs-Other-Metals.webp',
    //             'excerpt' => 'Choosing the right material for a project isn’t just about the initial investment',
    //             'link' => route('blogs.stainless-steel-vs-other-metals'),
    //         ],
    //         [
    //             'title' => 'How Stainless Steel Tubes Improve Process Efficiency',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 03, 2025',
    //             'image' => 'assets/images/blog/10-Mistakes-to-Avoid-When-Buying-Stainless-Steel-Pipes.webp',
    //             'excerpt' => 'In any industrial or manufacturing setting, efficiency is the engine of profitability.',
    //             'link' => route('blogs.how-stainless-steel-tubes-improve-process-efficiency'),
    //         ],
    //         [
    //             'title' => 'How to Choose the Best Stainless Steel Pipes',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 01, 2025',
    //             'image' => 'assets/images/blog/how_to_choose.webp',
    //             'excerpt' => 'Sourcing materials for a critical industrial, construction,',
    //             'link' => route('blogs.how-to-choose-the-best-stainless-steel-pipes'),
    //         ],
    //         [
    //             'title' => 'Where to Buy High Quality Stainless Steel Tubes Online',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'October 01, 2025',
    //             'image' => 'assets/images/blog/stainless_steel_pipes.jpg',
    //             'excerpt' => 'Sourcing materials for a critical industrial, construction,',
    //             'link' => route('blogs.where-to-buy-high-quality'),
    //         ],
    //         [
    //             'title' => 'Stainless Steel Uses in Kitchen & Food Industry',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'sep 04, 2025',
    //             'image' => 'assets/images/blog/din-standard-metal-alloys.webp',
    //             'excerpt' => 'Walk into any professional kitchen, and one thing shines above',
    //             'link' => route('blogs.stainless-steel-uses-in-kitchen'),
    //         ],
    //         [
    //             'title' => 'Seamless vs Welded Pipes: UAE’s Ultimate Guide',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'sep 01, 2025',
    //             'image' => 'assets/images/blog/uaes-ultimate-guide.webp',
    //             'excerpt' => 'Imagine this you’re overseeing a mega project on Dubai’s skyline.',
    //             'link' => route('blogs.uaes-ultimate-guide'),
    //         ],
    //         // [
    //         //     'title' => 'DIN Standard Metal Alloys & Industrial Tubes',
    //         //     'author' => 'Jash Jain',
    //         //     'comments' => 16,
    //         //     'date' => 'sep 01, 2025',
    //         //     'image' => 'assets/images/blog/din-standard-metal-alloys.webp',
    //         //     'excerpt' => 'Germany stands as Europes manufacturing powerhouse, driving innovation across',
    //         //     'link' => route('blogs.din-standard-metal-alloys')
    //         // ],
    //         [
    //             'title' => 'STAINLESS STEEL VS INCONEL TUBES',
    //             'author' => 'Jash Jain',
    //             'comments' => 14,
    //             'date' => 'august 14, 2025',
    //             'image' => 'assets/images/blogs/Inconel-vs-Stainless-Steel.jpg',
    //             'excerpt' => 'Choosing between stainless steel and Inconel tubes depends heavily on your industrial needs',
    //             'link' => route('blogs.stainless-steel-inconel-tubes'),
    //         ],
    //         [
    //             'title' => '10 Mistakes to Avoid When Buying Stainless Steel Pipes',
    //             'author' => 'Jash Jain',
    //             'comments' => 14,
    //             'date' => 'august 14, 2025',
    //             'image' => 'assets/images/blog/10-Mistakes-to-Avoid-When-Buying-Stainless-Steel-Pipes.webp',
    //             'excerpt' => 'Stainless steel pipes are truly the backbone of many industries worldwide. ',
    //             'link' => route('blogs.10-mistakes-to-avoid-when-buying-stainless-steel-pipes'),
    //         ],
    //         [
    //             'title' => 'Emerging Trends in Industrial Piping for 2025 and Beyond',
    //             'author' => 'Jash Jain',
    //             'comments' => 22,
    //             'date' => 'august 14, 2025',
    //             'image' => 'assets/images/blog/emerging-trends-in-industrial-piping-for-2025-and-beyond_11zon_11zon_11zon.webp',
    //             'excerpt' => 'The industrial piping industry is on the brink of a significant transformation.',
    //             'link' => route('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond'),
    //         ],
    //         [
    //             'title' => 'Everything You Need to Know About Welded & Seamless',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'august 14, 2025',
    //             'image' => 'assets/images/blog/seamless_welded_pipes.jpeg',
    //             'excerpt' => 'Pipes are the unsung heroes of modern infrastructure',
    //             'link' => route('blogs.everything-you-need-to-know-about-welded-and-seamless-pipes'),
    //         ],
    //         [
    //             'title' => 'India’s Stainless Steel Export Industry',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'august 14, 2025',
    //             'image' => '/assets/images/blog/indias-stainless-steel-export-industry.webp',
    //             'excerpt' => 'India has emerged as a global leader in stainless steel production and exports,',
    //             'link' => route('blogs.indias-stainless-steel-export-industry'),
    //         ],
    //         [
    //             'title' => 'The Role of High-Performance Alloys in Desalination Plants',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'august 14, 2025',
    //             'image' => 'assets/images/blog/Untitled.webp',
    //             'excerpt' => 'Desalination plants are at the forefront of solving one of the world',
    //             'link' => route('blogs.the-role-of-high-performance'),
    //         ],
    //         [
    //             'title' => 'Top 7 Advantages of Using Stainless Steel 316L',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'august 14, 2025',
    //             'image' => 'assets/images/blog/top-7-advantages-of-using.webp',
    //             'excerpt' => 'Stainless steel 316L has earned its reputation as a go-to material for industrial',
    //             'link' => route('blogs.top-7-advantages-of-using'),
    //         ],
    //         [
    //             'title' => 'Stainless Steel Pipes: Welded vs Seamless',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'august 22, 2025',
    //             'image' => 'assets/images/blog/seamless-vs-welded-pipes.jpg',
    //             'excerpt' => 'Choosing the right stainless steel pipes can make or break your industrial project.',
    //             'link' => route('blogs.welded-vs-seamless'),
    //         ],
    //         [
    //             'title' => 'Why Hastelloy Weighs More Than Stainless Steel',
    //             'author' => 'Jash Jain',
    //             'comments' => 16,
    //             'date' => 'august 22, 2025',
    //             'image' => 'assets/images/blog/why-hastelloy-weighs-more-than-stainless-steel.webp',
    //             'excerpt' => 'When selecting metals for demanding industrial applications, weight matters as much',
    //             'link' => route('blogs.why-hastelloy-weighs-more-than-stainless-steel'),
    //         ],

    //     ]);

    //     // Laravel pagination from array
    //     $perPage = 6;
    //     $page = request()->get('page', 1);
    //     $paginatedBlogs = new \Illuminate\Pagination\LengthAwarePaginator(
    //         $blogsData->forPage($page, $perPage),
    //         $blogsData->count(),
    //         $perPage,
    //         $page,
    //         ['path' => url('/blogs')]
    //     );

    //     return view('frontend.blogs', ['blogs' => $paginatedBlogs]);
    // }

    // public function blogs()
    // {
    //     $blogs = Blog::where('status', true)
    //         ->orderBy('published_at', 'desc')
    //         ->paginate(9);

    //     return view('frontend.blogs', compact('blogs'));
    // }

    // public function show($slug)
    // {
    //     $blog = Blog::where('slug', $slug)->firstOrFail();

    //     return view('frontend.blogs.single-blog', compact('blog'));
    // }

    //

    /* ============================
     * Blogs
     * ============================
     */

    // List blogs
    public function blogs()
    {
        $blogs = Blog::with(['category', 'tags'])->latest()->get();

        // dd($blogs);
        // return view('admin.blogs.index', compact('blogs'));
        return view('backend.blogs.index', compact('blogs'));
    }

    // Add blog form
    public function blogsAdd()
    {
        $categories = BlogCategory::active()->get();
        $tags = Tag::all();

        // return view('admin.blogs.add', compact('categories', 'tags'));
        return view('backend.blogs.create', compact('categories', 'tags'));
    }

    // Edit blog form
    public function blogsEdit($id)
    {
        $blog = Blog::with('tags')->findOrFail($id);
        $categories = BlogCategory::active()->get();
        $tags = Tag::all();

        // return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
        return view('backend.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    public function store(Request $request)
    {
        // Validate request
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'category_id' => 'required|exists:blog_categories,id',
            'status' => 'required|boolean',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048', // optional image
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'schema' => 'nullable|string', // JSON-LD as string
            'faq' => 'nullable|array',
            'faq.*.question' => 'required_with:faq|string|max:255',
            'faq.*.answer' => 'required_with:faq|string',
            'meta_keywords' => 'nullable|string',
            'meta_description' => 'nullable|string',
        ]);

        // Generate slug from title
        $slug = Str::slug($data['title']);

        // Check for duplicate slug
        if (Blog::where('slug', $slug)->exists()) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['title' => 'A blog with this title already exists. Please choose a different title.']);
        }

        // ✅ Add slug to data
        $data['slug'] = $slug;
        // Set author as current user
        $data['author'] = auth()->user()->name ?? 'Jash Jain';

        // Set published_at only if status is published (1)
        if ($data['status'] == 1) {
            $data['published_at'] = Carbon::now();
        } else {
            $data['published_at'] = null;
        }

        // Handle cover image if uploaded
        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $path = $file->store('uploads/blogs', 'public'); // stores in storage/app/public/uploads/blogs
            $data['cover_image'] = $path;
        }
        // dd($data);

        // Create blog
        $blog = Blog::create($data);

        // Attach tags if any
        if (! empty($data['tags'])) {
            $blog->tags()->attach($data['tags']);
        }

        // Handle FAQs
        // if ($request->has('faq')) {
        //     foreach ($request->faq as $faq) {
        //         if (! empty($faq['question']) && ! empty($faq['answer'])) {
        //             $blog->faqs()->create([
        //                 'question' => $faq['question'],
        //                 'answer' => $faq['answer'],
        //             ]);
        //         }
        //     }
        // }
        if (! empty($request->faq)) {
            // Filter out any empty FAQ entries (missing question or answer)
            $faqData = array_filter($request->faq, function ($faq) {
                return ! empty($faq['question']) && ! empty($faq['answer']);
            });

            // If there are valid FAQs, insert them all at once
            if (! empty($faqData)) {
                $blog->faqs()->createMany($faqData);
            }
        }

        return redirect()->route('admin.blogs')->with('success', 'Blog created successfully.');
    }

    public function blogsUpdate(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'nullable|string|max:100',
            'category_id' => 'nullable|exists:blog_categories,id',
            'status' => 'required|boolean',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id',
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png,gif,webp|max:2048',
            'schema' => 'nullable|string',
            'faq' => 'nullable|array',
            'faq.*.question' => 'required_with:faq|string|max:255',
            'faq.*.answer' => 'required_with:faq|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);

        // dd('123');
        // Unique slug check
        $slug = Str::slug($data['title']);
        if (Blog::where('slug', $slug)->where('id', '!=', $id)->exists()) {
            return back()->withInput()->withErrors(['title' => 'A blog with this title already exists.']);
        }
        $data['slug'] = $slug;

        // Update published_at only when switching from draft to published
        if ($data['status'] == 1 && ! $blog->published_at) {
            $data['published_at'] = Carbon::now();
        } elseif ($data['status'] == 0) {
            $data['published_at'] = null;
        }

        // Handle image replacement
        if ($request->hasFile('cover_image')) {
            if ($blog->cover_image && Storage::disk('public')->exists($blog->cover_image)) {
                Storage::disk('public')->delete($blog->cover_image);
            }
            $data['cover_image'] = $request->file('cover_image')->store('uploads/blogs', 'public');
        }

        // Ensure author consistency
        $data['author'] = $data['author'] ?? (auth()->user()->name ?? 'admin');

        // Update main blog record
        $blog->update($data);

        // Sync tags
        $blog->tags()->sync($data['tags'] ?? []);

        // Replace FAQs
        $blog->faqs()->delete();
        if (! empty($request->faq)) {
            foreach ($request->faq as $faq) {
                if (! empty($faq['question']) && ! empty($faq['answer'])) {
                    $blog->faqs()->create($faq);
                }
            }
        }

        return redirect()->route('admin.blogs')->with('success', 'Blog updated successfully.');
    }

    // Delete blog
    public function blogsDelete($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully.');
    }

    /* ============================
     * Categories
     * ============================
     */

    public function categories()
    {
        $categories = BlogCategory::latest()->get();

        return view('backend.blog_categories.index', compact('categories'));
    }

    public function categoriesAdd()
    {
        return view('backend.blog_categories.create');
    }

    public function categoriesEdit($id)
    {
        $category = BlogCategory::findOrFail($id);

        return view('backend.blog_categories.edit', compact('category'));
    }

    public function categoriesStore(Request $request)
    {
        // Validate only the fields coming from the form
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name',
            'status' => 'required|boolean',
        ]);

        // Generate slug automatically
        $data['slug'] = Str::slug($data['name']);

        // Save category
        BlogCategory::create($data);

        return redirect()->route('admin.blogs.categories')->with('success', 'Category created successfully.');
    }

    public function categoriesUpdate(Request $request, $id)
    {
        $category = BlogCategory::findOrFail($id);

        $data = $request->validate([
            'name' => 'required|string|max:255|unique:blog_categories,name,'.$category->id,
            'status' => 'required|boolean',
        ]);

        // Regenerate slug automatically
        $data['slug'] = Str::slug($data['name']);

        $category->update($data);

        return redirect()->route('admin.blogs.categories')->with('success', 'Category updated successfully.');
    }

    public function categoriesDelete($id)
    {
        $category = BlogCategory::findOrFail($id);
        $category->delete();

        return redirect()->route('admin.blogs.categories')->with('success', 'Category deleted successfully.');
    }

    /* ============================
     * Tags
     * ============================
     */

    public function tags()
    {
        $tags = Tag::latest()->get();

        return view('backend.blog_tags.index', compact('tags'));
    }

    public function tagsAdd()
    {
        return view('backend.blog_tags.create');
    }

    public function tagsEdit($id)
    {
        $tag = Tag::findOrFail($id);

        return view('backend.blog_tags.edit', compact('tag'));
    }

    public function tagsStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name',
        ]);

        // $data['slug'] = Str::slug($data['name']);

        // Tag::create($data);

        // Generate slug from tag name
        $slug = Str::slug($data['name']);

        // Check for duplicate slug
        if (Tag::where('slug', $slug)->exists()) {
            return redirect()->back()
                ->withInput()
                ->withErrors(['name' => 'A tag with this name already exists. Please choose a different name.']);
        }

        // Add the slug to the data
        $data['slug'] = $slug;

        // Create the tag
        Tag::create($data);

        return redirect()->route('admin.blogs.tags')->with('success', 'Tag created successfully.');
    }

    public function tagsUpdate(Request $request, $id)
    {
        // Find the tag by its ID
        $tag = Tag::findOrFail($id);

        // Validate the request
        $data = $request->validate([
            'name' => 'required|string|max:255|unique:tags,name,'.$tag->id, // Ensure name is unique, but allow for this tag's name
        ]);

        // Generate slug from the name
        $slug = Str::slug($data['name']);

        // Check if the generated slug already exists for other tags
        if (Tag::where('slug', $slug)->where('id', '!=', $tag->id)->exists()) {
            // If the slug is taken by another tag, return an error
            return redirect()->back()
                ->withInput()
                ->withErrors(['name' => 'A tag with this name already exists. Please choose a different name.']);
        }

        // Assign the generated slug to the data array
        $data['slug'] = $slug;

        // Update the tag with the validated data
        $tag->update($data);

        // Redirect back with success message
        return redirect()->route('admin.blogs.tags')->with('success', 'Tag updated successfully.');
    }

    public function tagsDelete($id)
    {
        $tag = Tag::findOrFail($id);
        $tag->delete();

        return redirect()->route('admin.blogs.tags')->with('success', 'Tag deleted successfully.');
    }
}
