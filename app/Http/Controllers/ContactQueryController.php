<?php

namespace App\Http\Controllers;

use App\Models\ContactQuery;
use Illuminate\Http\Request;

class ContactQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = ContactQuery::all();
        return view('admin.contact.list', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'g-recaptcha-response' => 'bail|required|recaptchav3:register,0.5'
        ]);

        try {

            ContactQuery::create($request->except('_token','g-recaptcha-response'));
            return redirect()->back()->with(['status' => 'success', 'message' => "Query has been Submitted."]);

        } catch (\Exception $e) {
            return redirect()->back()->with(['status' => 'failed', 'message' => $e->getMessage() ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ContactQuery $contactQuery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactQuery $contactQuery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactQuery $contactQuery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactQuery $contactQuery)
    {
        //
    }
}
