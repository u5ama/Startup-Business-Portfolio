<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Homepage;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminAboutUsController extends Controller
{
  public function home()
  {
    $about = AboutUs::where('id',1)->first();
    $testimonials = Testimonial::all();
    return view('frontend.about_us', compact('about','testimonials'));
  }

  public function index()
  {
    $about = AboutUs::where('id',1)->first();
    return view('content.about_us.about_us', compact('about'));
  }

    public function store(Request $request)
    {
      AboutUs::updateOrCreate(['id'=>1],[
          'section_one_title' => $request->section_one_title,
          'section_one_text' => $request->section_one_text,

          'section_two_title' => $request->section_two_title,
          'section_two_text' => $request->section_two_text,

          'section_two_faq_one_title' => $request->section_two_faq_one_title,
          'section_two_faq_one_text' => $request->section_two_faq_one_text,

          'section_two_faq_two_title' => $request->section_two_faq_two_title,
          'section_two_faq_two_text' => $request->section_two_faq_two_text,

          'section_two_faq_three_title' => $request->section_two_faq_three_title,
          'section_two_faq_three_text' => $request->section_two_faq_three_text,

          'section_three_video_url' => $request->section_three_video_url,

          'section_four_title' => $request->section_four_title,
          'section_four_text' => $request->section_four_text,

          'section_four_box_one_title' => $request->section_four_box_one_title,
          'section_four_box_one_text' => $request->section_four_box_one_text,

          'section_four_box_two_title' => $request->section_four_box_two_title,
          'section_four_box_two_text' => $request->section_four_box_two_text,

          'section_four_box_three_title' => $request->section_four_box_three_title,
          'section_four_box_three_text' => $request->section_four_box_three_text,

          'section_four_box_four_title' => $request->section_four_box_four_title,
          'section_four_box_four_text' => $request->section_four_box_four_text,

          'section_two_box_one_title' => $request->section_two_box_one_title,
          'section_two_box_one_text' => $request->section_two_box_one_text,

          'section_two_box_two_title' => $request->section_two_box_two_title,
          'section_two_box_two_text' => $request->section_two_box_two_text,

          'section_two_box_three_title' => $request->section_two_box_three_title,
          'section_two_box_three_text' => $request->section_two_box_three_text,
      ]);

      Session::flash('success', 'About Us updated successfully.');
      return redirect()->route('admin-about');
    }
}
