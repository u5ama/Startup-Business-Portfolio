<?php

namespace App\Http\Controllers\Testimonials;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
      $testimonials = Testimonial::all();
      return view('content.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
      return view('content.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validator_array = [
          'message' => 'required',
          'name' => 'required',
          'country' => 'required',
        ];

        try {
          $this->validate($request, $validator_array);
        } catch (ValidationException $e) {
          return redirect()
            ->back()
            ->withInput()
            ->withErrors($e->validator->errors());
        }

        $testimonial = new Testimonial();
        $testimonial->message = $request->message;
        $testimonial->name = $request->name;
        $testimonial->country = $request->country;
        $testimonial->save();

      Session::flash('success', 'Testimonial created successfully.');
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return void
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
      Testimonial::where('id', $id)->delete();
      Session::flash('success', 'Testimonial deleted successfully.');
      return redirect()->back();
    }
}
