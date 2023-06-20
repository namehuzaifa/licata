<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use App\Models\User;
use App\Notifications\NewsletterNotification;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        try{
            if(isset($request->email)){

                $temp = Newsletter::where('email',$request->email)->first();

                if($temp){
                    return ["status" => false, "error" => "Newsletter Already Subscribed!"];
                } else{
                    $newsletter         = new Newsletter;
                    $newsletter->email  = $request->email;
                    $newsletter->save();

                    $details = [
                        'greeting' => "Hi, Good day to you",
                        'body' => 'Your subscription to our newsletter has been confirmed.',
                        'thanks' => 'Thank you for subscribing!',
                        'actionText' => 'Visit Site',
                        'actionURL' => "https://licata-insurance.com",
                    ];

                    $temp = explode('@',$request->email);
                    (new User)->forceFill([
                        'name' => $temp[0],
                        'email' => $request->email,
                    ])->notify(new NewsletterNotification($details));

                    return ["status" => true, "error" => "Newsletter Subscribed Successfully!"];
                }

            } else{
                return ["status" => false, "error" => "Email is required"];
            }

        } catch(\Exception $e) {
            return ["status" => false, "error" => $e->getMessage()];
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NewsLetter $newsLetter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NewsLetter $newsLetter)
    {
        //
    }
}
