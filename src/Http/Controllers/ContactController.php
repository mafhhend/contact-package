<?php

namespace Samkhdev\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Samkhdev\Contact\Mail\ContactMailable;
use Samkhdev\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view("contact::contact-us");
    }
    public function store(Request $request)
    {
        Mail::to(config("contact.send_email_to"))->send(new ContactMailable($request->message));
        Contact::create($request->all());
        return redirect()->route("contact");
    }
}
