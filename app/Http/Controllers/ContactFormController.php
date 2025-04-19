<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function email(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'=>'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'userQuery' => $request->get('message'),
        ), function ($message) use ($request){
            $message->from($request->get('email'));
            $message->to('emmanuel.mwinama@ppda.mw', 'Admin')->subject($request->get('subject'));
        });

        return back()->with('success', 'We have received your message. We will get back to you as soon as we can.');
    }
}
