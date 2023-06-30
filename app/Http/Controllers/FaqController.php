<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faq::active()->get();
        return view('admin.faq.list', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $isEdit = false;
        return view('admin.faq.form',compact('isEdit'));
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
            'question' => 'required',
            'answer' => 'required',
        ]);

        try {

            Faq::create($request->except('_token',));
            return redirect()->route('faq.index')->with(['status' => 'success', 'message' => "Faq has been created."]);

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
        return view('admin.faq.form');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        $isEdit = true;
        return view('admin.faq.form', compact('faq','isEdit'));
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
        $faq = Faq::find($id);

        $request->validate([
            'question' => 'required',
            'answer' => 'required',
        ]);

        try {

            Faq::where('id', $id)->update($request->except('_token','_method'));
            return redirect()->route('faq.edit', $id)->with(['status' => 'success', 'message' => "Faq is successfully Updated."]);

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
        $faq = Faq::find($id);
        //delete image from admin images
        // if (isset($faq->image)) {
        //     $old_url = str_replace("storage", "public", "/" . $faq->image);
        //     Storage::delete($old_url);
        // }
        $faq->delete();
        return redirect()->back()->with('delete', 'faq has been Deleted');
    }
}
