<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Blogs;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

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

    public function EditBlog($id)
    {
        $blog = Blogs::find($id);
        return view('blog.edit', compact('blog'));
    }

    public function ChangeBlog(Request $request, $id)
    {
        Blogs::find($id)->update([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return Redirect('show/blog/' . $id);
    }

    public function DeleteBlog($id)
    {
        Blogs::find($id)->delete();
        return Redirect('/');
    }
}
