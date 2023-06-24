<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit = false;
        return view('admin.service.form',compact('isEdit'));
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
                $path = $request->file('b_image')->store('public/service');
                $attachment_url = str_replace("public", "storage", "/" . $path);
                $request['image']  = $attachment_url;
            }

            Service::create($request->except('_token', 'b_image'));
            return redirect()->route('service.index')->with(['status' => 'success', 'message' => "Service has been created."]);

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
        return view('admin.service.form');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $isEdit = true;
        return view('admin.service.form', compact('service','isEdit'));
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
        $service = Service::find($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        try {

            // $slug                   = slugGenerator($request->title, Blog::class, 'slug');
            // $request['slug']        = $slug;
            if(!$service->image) $request['image']   = 'assets/images/no-preview.png';

            if (!empty($request->file('b_image'))) {
                $path = $request->file('b_image')->store('public/service');
                $attachment_url = str_replace("public", "storage", "/" . $path);
                $request['image']  = $attachment_url;
                if($service->image) {
                    $old_url = str_replace("storage", "public", "/" . $service->image);
                    Storage::delete($old_url);
                }
            }

            Service::where('id', $id)->update($request->except('_token', 'b_image','_method'));
            return redirect()->route('service.edit', $id)->with(['status' => 'success', 'message' => "Service is successfully Updated."]);

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
        $service = Service::find($id);
        //delete image from admin images
        if (isset($service->image)) {
            $old_url = str_replace("storage", "public", "/" . $service->image);
            Storage::delete($old_url);
        }
        $service->delete();
        return redirect()->back()->with('delete', 'Service has been Deleted');
    }
}
