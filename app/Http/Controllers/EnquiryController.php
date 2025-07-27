<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnquiryContact;
use Illuminate\Support\Facades\Mail;
use App\Mail\Enquiry;
// use Mail;

class EnquiryController extends Controller
{
    public function sendEnquiry(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
            'email' => 'required|email:dns',
            'company' => 'required|string|min:2',
            'message' => 'required|min:3',
        ]);

        EnquiryContact::create($data);

        try {
            Mail::to(env('CONTACT_RECEIVER_EMAIL'))->send(new Enquiry($data));

        } catch (\Exception $e) {
            logger()->error("Mail failed: " . $e->getMessage());

            if (app()->environment('local')) {
                return back()->with('error', $e->getMessage());
            }

            return back()->with('error', 'There was an error sending your message.');
        }

//        return redirect('contact')->with('success', 'Message sent successfully!');

        return redirect()->back()->with('success', 'Message sent successfully.');

    }
}

