<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use App\Models\Blog;
use App\Models\BlogCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    public function allBlog()
    {
        $blog = Blog::latest()->get();

        return view('backend.blog.blog_all', compact('blog'));
    }

    public function addBlog()
    {
        $category = BlogCategory::orderBy('category', 'asc')->get();

        return view('backend.blog.blog_add', compact('category'));
    }

    public function storeBlog(Request $request)
    {

        $img = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->save('upload/blog/'.$name_gen);
        $save_url = 'upload/blog/'.$name_gen;

        Blog::insert([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'tags' => $request->tags,
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);
        $notification = [
            'message' => 'Portfolio Data updated With Image Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->route('all.blog')->with($notification);
    }

    public function editBlog($id)
    {
        $blog = Blog::findOrFail($id);
        $category = BlogCategory::orderBy('category', 'asc')->get();

        return view('backend.blog.blog_edit', compact('blog', 'category'));
    }

    public function updateBlog(Request $request)
    {

        $id = $request->id;
        if ($request->file('image')) {
            $img = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();

            Image::make($img)->save('upload/blog/'.$name_gen);
            $save_url = 'upload/blog/'.$name_gen;

            Blog::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,
                'tags' => $request->tags,
                'image' => $save_url,
            ]);
            $notification = [
                'message' => 'Blog Data updated With Image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->route('all.blog')->with($notification);
        } else {
            Blog::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'title' => $request->title,
                'description' => $request->description,
                'tags' => $request->tags,
            ]);

            $notification = [
                'message' => 'Blog updated Without Image Successfully',
                'alert-type' => 'success',
            ];

            return redirect()->route('all.blog')->with($notification);
        }
    }

    public function deleteBlog($id)
    {

        $blogs = Blog::findOrFail($id);
        $img = $blogs->image;
        unlink($img);

        $blogs->delete();

        $notification = [
            'message' => 'Blog Deleted Successfully',
            'alert-type' => 'success',
        ];

        return redirect()->back()->with($notification);
    }

    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        $category = BlogCategory::orderBy('category', 'asc')->get();
        $count = Blog::where('category_id', $blog->category_id)->where('id', '!=', $id)->get();

        return view('frontend.page.blog_details', compact('blog', 'category', 'count'));
    }
}
