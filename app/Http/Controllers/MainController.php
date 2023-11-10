<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MainController extends Controller
{
    public function main()
    {
        $posts=Post::where('published','!=',false)->paginate();
        return view('Pages.main',compact('posts'));
    }

}
