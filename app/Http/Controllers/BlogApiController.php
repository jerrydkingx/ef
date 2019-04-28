<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogApiController extends Controller
{
    //
     public function index()
     {
        $blog = Blog::all();
        return $blog;
     }
}
