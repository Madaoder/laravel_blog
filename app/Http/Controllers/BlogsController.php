<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Support\Carbon;

class BlogsController extends Controller
{
    public function AddBlog()
    {
        return view('blog.create');
    }

    public function CreateBlog(Request $request)
    {
        Blogs::insert([
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => Carbon::now()
        ]);
        return Redirect('/');
    }

    public function ShowBlog($id)
    {
        $blog = Blogs::find($id);
        return view('blog.show', compact('blog'));
    }
}
