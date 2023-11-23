<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\ContactUsForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminContactController extends Controller
{
    public function home()
    {
        $contact = ContactUs::where('id',1)->first();
        return view('frontend.contact_us', compact('contact'));
    }

    public function index()
    {
      $contact = ContactUs::where('id',1)->first();
      return view('content.contact.contact_us', compact('contact'));
    }

    public function store(Request $request)
    {
      ContactUs::updateOrCreate(['id'=>1],[
        'section_one_title' => $request->section_one_title,
        'section_one_text' => $request->section_one_text,

        'section_two_title' => $request->section_two_title,
        'section_two_text' => $request->section_two_text,

        'section_three_title' => $request->section_three_title,
        'section_three_text' => $request->section_three_text,
        'section_three_number' => $request->section_three_number,

        'section_four_title' => $request->section_four_title,
        'section_four_text' => $request->section_four_text,
      ]);

      Session::flash('success', 'Contact Us updated successfully.');
      return redirect()->route('admin-contact');
    }

    public function contactFormStore(Request $request)
    {

      $validator_array = [
        'message' => 'required',
        'name' => 'required',
        'email' => 'required',
        'service_name' => 'required',
      ];

      try {
        $this->validate($request, $validator_array);
      } catch (ValidationException $e) {
        return redirect()
          ->back()
          ->withInput()
          ->withErrors($e->validator->errors());
      }

      $contact = new ContactUsForm();
      $contact->message = $request->message;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->service_name = $request->service_name;
      $contact->save();

      Session::flash('success', 'Your Message Submitted successfully.');
      return redirect()->route('thankyou');
    }

    public function contactFormDetails()
    {
      $contacts = ContactUsForm::all();
      return view('content.contact.contact_details', compact('contacts'));
    }
}
