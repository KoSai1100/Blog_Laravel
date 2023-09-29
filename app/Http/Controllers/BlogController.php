<?php

 

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

 

class BlogController extends Controller

{

    

    public function index() {

        
        return view('blogs.index',[

            'blogs'=>Blog::with('category','user')
            ->latest()
            ->filter(request(['search','category','user' ]))
            ->paginate(5),

        ]);

    }

   

    public function show (Blog $blog) {

        return view('blogs.show',[

            'blog'=>$blog

        ]);

    }

}