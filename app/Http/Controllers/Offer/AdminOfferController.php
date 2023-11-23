<?php

namespace App\Http\Controllers\Offer;

use App\Http\Controllers\Controller;
use App\Models\GetOffersForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class AdminOfferController extends Controller
{

    public function offerFormStore(Request $request)
    {

      $validator_array = [
        'offer' => 'required',
        'name' => 'required',
        'email' => 'required',
        'agency_name' => 'required',
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

      $contact = new GetOffersForm();
      $contact->offer = $request->offer;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->agency_name = $request->agency_name;
      $contact->service_name = $request->service_name;
      $contact->save();

      Session::flash('success', 'Your Message Submitted successfully.');
      return redirect()->back();
    }

    public function offerFormDetails()
    {
      $offers = GetOffersForm::all();
      return view('content.offer.offer_details', compact('offers'));
    }
}
