<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blogs()
    {
        $blogsData = collect([

            [
                'title' => 'Stainless Steel Tubes vs Carbon Steel Pipes',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 27, 2025',
                'image' => 'assets/images/blog/Stainless-Steel-Tubes-vs-Carbon-Steel-Pipes-A-Complete-Comparison_11zon.jpeg',
                'excerpt' => 'Choosing the right material for an industrial or construction piping system',
                'link' => route('blogs.stainless-steel-tubes-vs-carbon-steel-pipes')
            ],
            [
                'title' => 'Maintenance Tips for Stainless Steel Tubes to Prevent Rust',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 27, 2025',
                'image' => 'assets/images/blog/Maintenance-Tips-for-Stainless-Steel_11zon.jpg',
                'excerpt' => 'Stainless steel is celebrated for its remarkable strength and resistance',
                'link' => route('blogs.maintenance-tips-for-stainless-steel')
            ],
            [
                'title' => 'Top 10 Uses of Stainless Steel Pipes in Construction Projects',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 27, 2025',
                'image' => 'assets/images/blog/Top-10-Uses-of-Stainless-Steel-Pipes.jpeg',
                'excerpt' => 'Look at any modern city skyline, and you see a testament to strength,',
                'link' => route('blogs.top-ten-uses-of-stainless-steel')
            ],
            [
                'title' => 'Stainless Steel Tubing for Food and Beverage Industry',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 27, 2025',
                'image' => 'assets/images/blog/stainless-steel-tubing-for-food-and-beverage-industry.webp',
                'excerpt' => 'In the food and beverage industry, there is zero room for error.',
                'link' => route('blogs.stainless-steel-tubing-for-food-and-beverage-industry')
            ],
            [
                'title' => 'Stainless Steel Tubes: Applications, Benefits & Cost',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 27, 2025',
                'image' => 'assets/images/blog/Stainless-Steel-Tubes-Applications-Benefits-Cost-Guide.webp',
                'excerpt' => 'From the towering skyscrapers that define our cities to the intricate,',
                'link' => route('blogs.stainless-steel-tubes-applications-benefits-and-cost-guide')
            ],
            [
                'title' => 'Stainless Steel Tube Grades Explained: Which One to Pick?',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 27, 2025',
                'image' => 'assets/images/blog/Stainless-Steel-Tube-Grades.png',
                'excerpt' => 'Choosing stainless steel for your tubing is a smart first step,',
                'link' => route('blogs.stainless-steel-tube-grades-explained')
            ],
            [
                'title' => 'Stainless Steel Pipe Installation: Step by Step Guide',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 13, 2025',
                'image' => 'assets/images/blog/Stainless-Steel-Pipe-Installation.jpeg',
                'excerpt' => 'Choosing high quality stainless steel pipes for your project is an excellent first step toward ',
                'link' => route('blogs.stainless-steel-pipe-installation')
            ],
            [
                'title' => 'Stainless Steel vs Other Metals: Longevity Comparison',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 13, 2025',
                'image' => 'assets/images/blog/Stainless-Steel-vs-Other-Metals.webp',
                'excerpt' => 'Choosing the right material for a project isn’t just about the initial investment',
                'link' => route('blogs.stainless-steel-vs-other-metals')
            ],
            [
                'title' => 'How Stainless Steel Tubes Improve Process Efficiency',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 03, 2025',
                'image' => 'assets/images/blog/10-Mistakes-to-Avoid-When-Buying-Stainless-Steel-Pipes.webp',
                'excerpt' => 'In any industrial or manufacturing setting, efficiency is the engine of profitability.',
                'link' => route('blogs.how-stainless-steel-tubes-improve-process-efficiency')
            ],
            [
                'title' => 'How to Choose the Best Stainless Steel Pipes',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 01, 2025',
                'image' => 'assets/images/blog/how_to_choose.webp',
                'excerpt' => 'Sourcing materials for a critical industrial, construction,',
                'link' => route('blogs.how-to-choose-the-best-stainless-steel-pipes')
            ],
            [
                'title' => 'Where to Buy High Quality Stainless Steel Tubes Online',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'October 01, 2025',
                'image' => 'assets/images/blog/stainless_steel_pipes.jpg',
                'excerpt' => 'Sourcing materials for a critical industrial, construction,',
                'link' => route('blogs.where-to-buy-high-quality')
            ],
            [
                'title' => 'Stainless Steel Uses in Kitchen & Food Industry',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'sep 04, 2025',
                'image' => 'assets/images/blog/din-standard-metal-alloys.webp',
                'excerpt' => 'Walk into any professional kitchen, and one thing shines above',
                'link' => route('blogs.stainless-steel-uses-in-kitchen')
            ],
            [
                'title' => 'Seamless vs Welded Pipes: UAE’s Ultimate Guide',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'sep 01, 2025',
                'image' => 'assets/images/blog/uaes-ultimate-guide.webp',
                'excerpt' => 'Imagine this you’re overseeing a mega project on Dubai’s skyline.',
                'link' => route('blogs.uae’s-ultimate-guide')
            ],
            // [
            //     'title' => 'DIN Standard Metal Alloys & Industrial Tubes',
            //     'author' => 'Jash Jain',
            //     'comments' => 16,
            //     'date' => 'sep 01, 2025',
            //     'image' => 'assets/images/blog/din-standard-metal-alloys.webp',
            //     'excerpt' => 'Germany stands as Europes manufacturing powerhouse, driving innovation across',
            //     'link' => route('blogs.din-standard-metal-alloys')
            // ],
            [
                'title' => 'STAINLESS STEEL VS INCONEL TUBES',
                'author' => 'Jash Jain',
                'comments' => 14,
                'date' => 'august 14, 2025',
                'image' => 'assets/images/blogs/Inconel-vs-Stainless-Steel.jpg',
                'excerpt' => 'Choosing between stainless steel and Inconel tubes depends heavily on your industrial needs',
                'link' => route('blogs.stainless-steel-inconel-tubes')
            ],
            [
                'title' => '10 Mistakes to Avoid When Buying Stainless Steel Pipes',
                'author' => 'Jash Jain',
                'comments' => 14,
                'date' => 'august 14, 2025',
                'image' => 'assets/images/blog/10-Mistakes-to-Avoid-When-Buying-Stainless-Steel-Pipes.webp',
                'excerpt' => 'Stainless steel pipes are truly the backbone of many industries worldwide. ',
                'link' => route('blogs.10-mistakes-to-avoid-when-buying-stainless-steel-pipes')
            ],
             [
                'title' => 'Emerging Trends in Industrial Piping for 2025 and Beyond',
                'author' => 'Jash Jain',
                'comments' => 22,
                'date' => 'august 14, 2025',
                'image' => 'assets/images/blog/emerging-trends-in-industrial-piping-for-2025-and-beyond_11zon_11zon_11zon.webp',
                'excerpt' => 'The industrial piping industry is on the brink of a significant transformation.',
                'link' => route('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond')
            ],
            [
                'title' => 'Everything You Need to Know About Welded & Seamless',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'august 14, 2025',
                'image' => 'assets/images/blog/seamless_welded_pipes.jpeg',
                'excerpt' => 'Pipes are the unsung heroes of modern infrastructure',
                'link' => route('blogs.everything-you-need-to-know-about-welded-and-seamless-pipes')
            ],
            [
                'title' => 'India’s Stainless Steel Export Industry',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'august 14, 2025',
                'image' => '/assets/images/blog/indias-stainless-steel-export-industry.webp',
                'excerpt' => 'India has emerged as a global leader in stainless steel production and exports,',
                'link' => route('blogs.india’s-stainless-steel-export-industry')
            ],
              [
                'title' => 'The Role of High-Performance Alloys in Desalination Plants',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'august 14, 2025',
                'image' => 'assets/images/blog/Untitled.webp',
                'excerpt' => 'Desalination plants are at the forefront of solving one of the world',
                'link' => route('blogs.the-role-of-high-performance')
            ],
            [
                'title' => 'Top 7 Advantages of Using Stainless Steel 316L',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'august 14, 2025',
                'image' => 'assets/images/blog/top-7-advantages-of-using.webp',
                'excerpt' => 'Stainless steel 316L has earned its reputation as a go-to material for industrial',
                'link' => route('blogs.top-7-advantages-of-using')
            ],
            [
                'title' => 'Stainless Steel Pipes: Welded vs Seamless',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'august 22, 2025',
                'image' => 'assets/images/blog/everything-you-need-to-know-about-welded-and-seamless-pipes.webp',
                'excerpt' => 'Choosing the right stainless steel pipes can make or break your industrial project.',
                'link' => route('blogs.welded-vs-seamless')
            ],
            [
                'title' => 'Why Hastelloy Weighs More Than Stainless Steel',
                'author' => 'Jash Jain',
                'comments' => 16,
                'date' => 'august 22, 2025',
                'image' => 'assets/images/blog/why-hastelloy-weighs-more-than-stainless-steel.webp',
                'excerpt' => 'When selecting metals for demanding industrial applications, weight matters as much',
                'link' => route('blogs.why-hastelloy-weighs-more-than-stainless-steel')
            ],


        ]);

        // Laravel pagination from array
        $perPage = 6;
        $page = request()->get('page', 1);
        $paginatedBlogs = new \Illuminate\Pagination\LengthAwarePaginator(
            $blogsData->forPage($page, $perPage),
            $blogsData->count(),
            $perPage,
            $page,
            ['path' => url('/blogs')]
        );

        return view('frontend.blogs', ['blogs' => $paginatedBlogs]);
    }
    //
}
