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
                'link' => '#'
            ],
            [
                'title' => 'MATERIALS & MANUFACTURING',
                'author' => 'fletcher',
                'comments' => 14,
                'date' => '21 Feb',
                'image' => 'assets/images/blog/blog.png',
                'excerpt' => 'Except to obtain some advantage from it? But who has any right to enjoy a pleasure.',
                'link' => '#'
            ],
            [
                'title' => 'COMMERCIAL AND REAL PROJECTS',
                'author' => 'Richards',
                'comments' => 22,
                'date' => '17 Apr',
                'image' => 'assets/images/blog/Untitled (1).png',
                'excerpt' => 'Great pleasure to take a trivial example, which of us undertakes laborious.',
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
