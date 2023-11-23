<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Homepage;
use App\Models\TermsConditions;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminHomepageController extends Controller
{
  public function home()
  {
    $blogs = Blogs::latest()->take(3)->get();
    $testimonials = Testimonial::all();
    $home = Homepage::where('id',1)->first();
    return view('frontend.homepage', compact('home','blogs','testimonials'));
  }
  public function index()
  {
    $home = Homepage::where('id',1)->first();
    return view('content.homepage.home', compact('home'));
  }

    public function store(Request $request)
    {
      Homepage::updateOrCreate(['id'=>1],[
          'slider_title' => $request->slider_title,
          'slider_text' => $request->slider_text,
          'slider_video_url' => $request->slider_video_url,

          'section_two_title' => $request->section_two_title,
          'section_two_text' => $request->section_two_text,

          'section_two_a_title' => $request->section_two_a_title,
          'section_two_a_text' => $request->section_two_a_text,

          'section_three_part_one_title' => $request->section_three_part_one_title,
          'section_three_part_one_text' => $request->section_three_part_one_text,

          'section_three_part_two_title' => $request->section_three_part_two_title,
          'section_three_part_two_text' => $request->section_three_part_two_text,

          'section_four_title' => $request->section_four_title,
          'section_four_text' => $request->section_four_text,

          'section_four_faq_one_title' => $request->section_four_faq_one_title,
          'section_four_faq_one_text' => $request->section_four_faq_one_text,

          'section_four_faq_two_text' => $request->section_four_faq_two_text,
          'section_four_faq_two_title' => $request->section_four_faq_two_title,

          'section_four_faq_three_title' => $request->section_four_faq_three_title,
          'section_four_faq_three_text' => $request->section_four_faq_three_text,

          'section_seven_title' => $request->section_seven_title,
          'section_seven_text' => $request->section_seven_text,

          'section_two_box_one_title' => $request->section_two_box_one_title,
          'section_two_box_one_text' => $request->section_two_box_one_text,

          'section_two_box_two_title' => $request->section_two_box_two_title,
          'section_two_box_two_text' => $request->section_two_box_two_text,

          'section_two_box_three_title' => $request->section_two_box_three_title,
          'section_two_box_three_text' => $request->section_two_box_three_text,

          'section_two_box_four_title' => $request->section_two_box_four_title,
          'section_two_box_four_text' => $request->section_two_box_four_text,

          'section_two_box_five_title' => $request->section_two_box_five_title,
          'section_two_box_five_text' => $request->section_two_box_five_text,
      ]);

      Session::flash('success', 'Homepage updated successfully.');
      return redirect()->route('admin-homepage');
    }

    public function termsConditions()
    {
      $content = TermsConditions::where('id',1)->first();
      return view('frontend.terms_privacy', compact('content'));
    }

    public function adminTermsConditionIndex()
    {
      $content = TermsConditions::where('id',1)->first();
      return view('content.terms_conditions.create', compact('content'));
    }
    public function adminTermsConditionStore(Request $request)
    {
      TermsConditions::updateOrCreate(['id'=>1],[
        'title' => $request->title,
        'description' => $request->description,
      ]);

      Session::flash('success', 'Terms&Conditions updated successfully.');
      return redirect()->route('admin-terms-conditions');
    }
}
