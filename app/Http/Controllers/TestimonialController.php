<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonial.list', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit = false;
        return view('admin.testimonial.form',compact('isEdit'));
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
            // $request['image']   = 'assets/images/no-preview.png';

            if (!empty($request->file('b_image'))) {
                $path = $request->file('b_image')->store('public/testimonial');
                $attachment_url = str_replace("public", "storage", "/" . $path);
                $request['image']  = $attachment_url;
            }

            Testimonial::create($request->except('_token', 'b_image'));
            return redirect()->route('testimonial.index')->with(['status' => 'success', 'message' => "Testimonial has been created."]);

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
        return view('admin.testimonial.form');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $isEdit = true;
        return view('admin.testimonial.form', compact('testimonial','isEdit'));
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
        $testimonial = Testimonial::find($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {

            // $slug                   = slugGenerator($request->title, Blog::class, 'slug');
            // $request['slug']        = $slug;
            if(!$testimonial->image) $request['image']   = 'assets/images/no-preview.png';

            if (!empty($request->file('b_image'))) {
                $path = $request->file('b_image')->store('public/testimonial');
                $attachment_url = str_replace("public", "storage", "/" . $path);
                $request['image']  = $attachment_url;
                if($testimonial->image) {
                    $old_url = str_replace("storage", "public", "/" . $testimonial->image);
                    Storage::delete($old_url);
                }
            }

            Testimonial::where('id', $id)->update($request->except('_token', 'b_image','_method'));
            return redirect()->route('testimonial.edit', $id)->with(['status' => 'success', 'message' => "Testimonial is successfully Updated."]);

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
        $testimonial = Testimonial::find($id);
        //delete image from admin images
        if (isset($testimonial->image)) {
            $old_url = str_replace("storage", "public", "/" . $testimonial->image);
            Storage::delete($old_url);
        }
        $testimonial->delete();
        return redirect()->back()->with('delete', 'Testimonial has been Deleted');
    }
}
