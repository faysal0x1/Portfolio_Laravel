<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function index()
    {

        return view('backend.newsletter.index');
    }

    public function newsletterList()
    {
        $data = Newsletter::all();
        return response()->json($data);
    }

    public function newsletterStore(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
        ]);

        try {
            Newsletter::create($request->all());

            $notification = array(
                'message' => 'Successfully Subscribed.',
                'alert-type' => 'success'
            );

            return response()->json($notification);
        } catch (\Throwable $th) {

            $notification = array(
                'message' => 'Something Went Wrong.',
                'alert-type' => 'error'
            );

            return response()->json([
                'status' => 'error',
                'message' => $request->title,
            ], 200);
        }
    }
}
