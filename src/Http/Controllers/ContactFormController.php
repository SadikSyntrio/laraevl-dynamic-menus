<?php
namespace MySyntrio\contactform\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MySyntrio\contactform\Models\ContactForm;

class ContactFormController extends Controller {

    public function index()
    {
        return view('ContactForm::contact');
    }

    public function sendMail(Request $request)
    {
        ContactForm::create($request->all());

        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }


}