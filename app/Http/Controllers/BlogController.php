<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function blogs()
    {
        $blogsData = collect([
            [
                'title' => 'STAINLESS STEEL VS INCONEL TUBES',
                'author' => 'fletcher',
                'comments' => 14,
                'date' => '21 Feb',
                'image' => 'assets/images/blogs/Inconel-vs-Stainless-Steel.jpg',
                'excerpt' => 'Choosing between stainless steel and Inconel tubes depends heavily on your industrial needs',
                'link' => route('blogs.stainless-steel-inconel-tubes')
            ],
            [
                'title' => '10 Mistakes to Avoid When Buying Stainless Steel Pipes',
                'author' => 'fletcher',
                'comments' => 14,
                'date' => '21 Feb',
                'image' => 'assets/images/blog/10-Mistakes-to-Avoid-When-Buying-Stainless-Steel-Pipes.webp',
                'excerpt' => 'Stainless steel pipes are truly the backbone of many industries worldwide. ',
                'link' => route('blogs.10-mistakes-to-avoid-when-buying-stainless-steel-pipes')
            ],
            [
                'title' => 'Emerging Trends in Industrial Piping for 2025 and Beyond',
                'author' => 'Richards',
                'comments' => 22,
                'date' => '17 Apr',
                'image' => 'assets/images/blog/Untitled (1).png',
                'excerpt' => 'The industrial piping industry is on the brink of a significant transformation.',
                'link' => route('blogs.emerging-trends-in-industrial-piping-for-2025-and-beyond')
            ],
            [
                'title' => 'MATERIALS FOR THE ECONOMY',
                'author' => 'Vincent',
                'comments' => 16,
                'date' => '14 June',
                'image' => 'assets/images/blog/Untitled (9).png',
                'excerpt' => 'Pleasure and praising pain was born and I will give you a complete account.',
                'link' => '#'
            ],
            [
                'title' => 'MATERIALS FOR THE ECONOMY',
                'author' => 'Vincent',
                'comments' => 16,
                'date' => '14 June',
                'image' => 'assets/images/blog/Untitled (9).png',
                'excerpt' => 'Pleasure and praising pain was born and I will give you a complete account.',
                'link' => '#'
            ],
            [
                'title' => 'MATERIALS FOR THE ECONOMY',
                'author' => 'Vincent',
                'comments' => 16,
                'date' => '14 June',
                'image' => 'assets/images/blog/Untitled (9).png',
                'excerpt' => 'Pleasure and praising pain was born and I will give you a complete account.',
                'link' => '#'
            ],
            [
                'title' => 'MATERIALS FOR THE ECONOMY',
                'author' => 'Vincent',
                'comments' => 16,
                'date' => '14 June',
                'image' => 'assets/images/blog/Untitled (9).png',
                'excerpt' => 'Pleasure and praising pain was born and I will give you a complete account.',
                'link' => '#'
            ],


        ]);

        // Laravel pagination from array
        $perPage = 3;
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
