<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    function posts()
    {
       return Post::paginate(5);
    }
}
