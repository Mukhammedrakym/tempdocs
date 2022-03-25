<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function showContactForm() {
        return view('contact_form');
    }

    public function contactForm(ContactFormRequest $request) {
        Mail::to('mmanmurynov@mail.ru')->send(new ContactForm($request->validated()));

        return redirect(route('contacts'));
    }
}
