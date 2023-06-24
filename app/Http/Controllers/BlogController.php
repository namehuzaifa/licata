<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.list', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit = false;
        return view('admin.blog.form',compact('isEdit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {

            // $slug                   = slugGenerator($request->title, Blog::class, 'slug');
            // $request['slug']        = $slug;
            $request['image']   = 'assets/images/no-preview.png';

            if (!empty($request->file('b_image'))) {
                $path = $request->file('b_image')->store('public/blog');
                $attachment_url = str_replace("public", "storage", "/" . $path);
                $request['image']  = $attachment_url;
            }

            Blog::create($request->except('_token', 'b_image'));
            return redirect()->route('blog.index')->with(['status' => 'success', 'message' => "Blog has been created."]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'failed', 'message' => $e->getMessage() ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.blog.form');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $isEdit = true;
        return view('admin.blog.form', compact('blog','isEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {

            // $slug                   = slugGenerator($request->title, Blog::class, 'slug');
            // $request['slug']        = $slug;
            if(!$blog->image) $request['image']   = 'assets/images/no-preview.png';

            if (!empty($request->file('b_image'))) {
                $path = $request->file('b_image')->store('public/blog');
                $attachment_url = str_replace("public", "storage", "/" . $path);
                $request['image']  = $attachment_url;
                if($blog->image) {
                    $old_url = str_replace("storage", "public", "/" . $blog->image);
                    Storage::delete($old_url);
                }
            }

            Blog::where('id', $id)->update($request->except('_token', 'b_image','_method'));
            return redirect()->route('blog.edit', $id)->with(['status' => 'success', 'message' => "Blog is successfully Updated."]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'failed', 'message' => $e->getMessage() ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        //delete image from admin images
        if (isset($blog->image) && $blog->image) {
            $old_url = str_replace("storage", "public", "/" . $blog->image);
            Storage::delete($old_url);
        }
        $blog->delete();
        return redirect()->back()->with('delete', 'Blog has been Deleted');
    }
}
