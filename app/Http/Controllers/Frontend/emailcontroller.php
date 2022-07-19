<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class emailcontroller extends Controller
{
    public function create()
    {
        return view('pages.homopage');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];
        
        try {
            Mail::send('pages.email-template', $data, function($message) use ($data) {
            $message->from($data['email']);
            $message->to('aldizulfikar04@gmail.com')->subject($data['subject']);
          });

          return back()->with(['success' => 'Email successfully sent!']);
        }catch (\Exception $e){
                return back()->with(['error' => 'Error during the creation!']);
        }
    }
}
