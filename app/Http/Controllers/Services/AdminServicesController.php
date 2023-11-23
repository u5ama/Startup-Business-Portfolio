<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\AdminServices;
use App\Models\Services;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminServicesController extends Controller
{
  public function home()
  {
    $testimonials = Testimonial::all();
    $service = AdminServices::where('id',6)->first();
    return view('frontend.services', compact('testimonials','service'));
  }

  public function details($slug)
  {
    $service = AdminServices::where('slug',$slug)->first();
    $services = Services::all();
    $testimonials = Testimonial::all();
    return view('frontend.service_detail', compact('service','testimonials','services'));
  }

  public function index()
  {
    $service = AdminServices::where('id',1)->first();
    return view('content.admin_services.seo_services', compact('service'));
  }
  public function all_services()
  {
    $service = AdminServices::where('id',6)->first();
    return view('content.admin_services.all_services', compact('service'));
  }

  public function allServiceStore(Request $request)
  {
    AdminServices::updateOrCreate(['id'=>6],[
      'section_one_title' => $request->section_one_title,
      'section_one_text' => $request->section_one_text,

      'section_two_title' => $request->section_two_title,
      'section_two_text' => $request->section_two_text,

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

      'section_three_title' => $request->section_three_title,

      'section_three_box_one_title' => $request->section_three_box_one_title,
      'section_three_box_one_text' => $request->section_three_box_one_text,
      'section_three_box_two_title' => $request->section_three_box_two_title,
      'section_three_box_two_text' => $request->section_three_box_two_text,
      'section_three_box_three_title' => $request->section_three_box_three_title,
      'section_three_box_three_text' => $request->section_three_box_three_text,

    ]);

    Session::flash('success', 'All Service updated successfully.');
    return redirect()->route('admin-service');
  }

  public function store(Request $request)
  {

    $service = AdminServices::where(['id'=>1])->first();
    if ($request->file('banner_image')){
      $imageName = time().'.'.$request->banner_image->extension();
      $request->banner_image->move(public_path('service_images'), $imageName);
      $banner_image = $imageName;
    }else{
      $banner_image = $service->banner_image;
    }
    if ($request->file('image_one')){
      $imageName = time().'.'.$request->image_one->extension();
      $request->image_one->move(public_path('service_images'), $imageName);
      $first_image = $imageName;
    }
    else{
      $first_image = $service->first_image;
    }
    if ($request->file('image_two')){
      $imageName = time().'.'.$request->image_two->extension();
      $request->image_two->move(public_path('service_images'), $imageName);
      $second_image = $imageName;
    }else{
      $second_image = $service->second_image;
    }

    AdminServices::updateOrCreate(['id'=>1],[
      'slug' => $request->slug,
      'section_one_title' => $request->section_one_title,
      'section_one_text' => $request->section_one_text,

      'section_two_title' => $request->section_two_title,
      'section_two_text' => $request->section_two_text,

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

      'section_two_box_six_title' => $request->section_two_box_six_title,
      'section_two_box_six_text' => $request->section_two_box_six_text,

      'section_three_title' => $request->section_three_title,

      'section_three_box_one_title' => $request->section_three_box_one_title,
      'section_three_box_one_text' => $request->section_three_box_one_text,
      'section_three_box_two_title' => $request->section_three_box_two_title,
      'section_three_box_two_text' => $request->section_three_box_two_text,
      'section_three_box_three_title' => $request->section_three_box_three_title,
      'section_three_box_three_text' => $request->section_three_box_three_text,
      'section_three_box_four_title' => $request->section_three_box_four_title,
      'section_three_box_four_text' => $request->section_three_box_four_text,
      'section_three_box_five_title' => $request->section_three_box_five_title,
      'section_three_box_five_text' => $request->section_three_box_five_text,
      'section_three_box_six_title' => $request->section_three_box_six_title,
      'section_three_box_six_text' => $request->section_three_box_six_text,

      'section_three_box_seven_title' => $request->section_three_box_seven_title,
      'section_three_box_seven_text' => $request->section_three_box_seven_text,
      'section_three_box_eight_title' => $request->section_three_box_eight_title,
      'section_three_box_eight_text' => $request->section_three_box_eight_text,
      'section_three_box_nine_title' => $request->section_three_box_nine_title,
      'section_three_box_nine_text' => $request->section_three_box_nine_text,

      'section_four_title' => $request->section_four_title,
      'section_four_text' => $request->section_four_text,
      'section_five_title' => $request->section_five_title,
      'section_five_text' => $request->section_five_text,

      'section_six_title'  => $request->section_six_title,
      'section_six_text'  => $request->section_six_text,
      'section_six_faq_one_title'  => $request->section_six_faq_one_title,
      'section_six_faq_one_text'  => $request->section_six_faq_one_text,
      'section_six_faq_two_title'  => $request->section_six_faq_two_title,
      'section_six_faq_two_text'  => $request->section_six_faq_two_text,
      'section_six_faq_three_title'  => $request->section_six_faq_three_title,
      'section_six_faq_three_text'  => $request->section_six_faq_three_text,
      'section_six_faq_four_title'  => $request->section_six_faq_four_title,
      'section_six_faq_four_text'  => $request->section_six_faq_four_text,
      'section_six_faq_five_title'  => $request->section_six_faq_five_title,
      'section_six_faq_five_text' => $request->section_six_faq_five_text,

      'banner_image' => $banner_image,
      'image_one' => $first_image,
      'image_two' => $second_image,
    ]);

    Session::flash('success', 'SEO Service updated successfully.');
    return redirect()->route('admin-seo-service');
  }

  public function smmIndex()
  {
    $service = AdminServices::where('id',2)->first();
    return view('content.admin_services.smm_services', compact('service'));
  }

  public function smmStore(Request $request)
  {
    $service = AdminServices::where(['id'=>2])->first();
    if ($request->file('banner_image')){
      $imageName = time().'.'.$request->banner_image->extension();
      $request->banner_image->move(public_path('service_images'), $imageName);
      $banner_image = $imageName;
    }else{
      $banner_image = $service->banner_image;
    }
    if ($request->file('image_one')){
      $imageName = time().'.'.$request->image_one->extension();
      $request->image_one->move(public_path('service_images'), $imageName);
      $first_image = $imageName;
    }
    else{
      $first_image = $service->first_image;
    }
    if ($request->file('image_two')){
      $imageName = time().'.'.$request->image_two->extension();
      $request->image_two->move(public_path('service_images'), $imageName);
      $second_image = $imageName;
    }else{
      $second_image = $service->second_image;
    }

    AdminServices::updateOrCreate(['id'=>2],[
      'slug' => $request->slug,
      'section_one_title' => $request->section_one_title,
      'section_one_text' => $request->section_one_text,

      'section_two_title' => $request->section_two_title,
      'section_two_text' => $request->section_two_text,

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

      'section_two_box_six_title' => $request->section_two_box_six_title,
      'section_two_box_six_text' => $request->section_two_box_six_text,

      'section_three_title' => $request->section_three_title,

      'section_three_box_one_title' => $request->section_three_box_one_title,
      'section_three_box_one_text' => $request->section_three_box_one_text,
      'section_three_box_two_title' => $request->section_three_box_two_title,
      'section_three_box_two_text' => $request->section_three_box_two_text,
      'section_three_box_three_title' => $request->section_three_box_three_title,
      'section_three_box_three_text' => $request->section_three_box_three_text,
      'section_three_box_four_title' => $request->section_three_box_four_title,
      'section_three_box_four_text' => $request->section_three_box_four_text,
      'section_three_box_five_title' => $request->section_three_box_five_title,
      'section_three_box_five_text' => $request->section_three_box_five_text,
      'section_three_box_six_title' => $request->section_three_box_six_title,
      'section_three_box_six_text' => $request->section_three_box_six_text,
      'section_three_box_seven_title' => $request->section_three_box_seven_title,
      'section_three_box_seven_text' => $request->section_three_box_seven_text,
      'section_three_box_eight_title' => $request->section_three_box_eight_title,
      'section_three_box_eight_text' => $request->section_three_box_eight_text,
      'section_three_box_nine_title' => $request->section_three_box_nine_title,
      'section_three_box_nine_text' => $request->section_three_box_nine_text,

      'section_four_title' => $request->section_four_title,
      'section_four_text' => $request->section_four_text,
      'section_five_title' => $request->section_five_title,
      'section_five_text' => $request->section_five_text,

      'section_six_title'  => $request->section_six_title,
      'section_six_text'  => $request->section_six_text,
      'section_six_faq_one_title'  => $request->section_six_faq_one_title,
      'section_six_faq_one_text'  => $request->section_six_faq_one_text,
      'section_six_faq_two_title'  => $request->section_six_faq_two_title,
      'section_six_faq_two_text'  => $request->section_six_faq_two_text,
      'section_six_faq_three_title'  => $request->section_six_faq_three_title,
      'section_six_faq_three_text'  => $request->section_six_faq_three_text,
      'section_six_faq_four_title'  => $request->section_six_faq_four_title,
      'section_six_faq_four_text'  => $request->section_six_faq_four_text,
      'section_six_faq_five_title'  => $request->section_six_faq_five_title,
      'section_six_faq_five_text' => $request->section_six_faq_five_text,

      'banner_image' => $banner_image,
      'image_one' => $first_image,
      'image_two' => $second_image,

    ]);

    Session::flash('success', 'SMM Service updated successfully.');
    return redirect()->route('admin-smm-service');
  }

  public function webIndex()
  {
    $service = AdminServices::where('id',3)->first();
    return view('content.admin_services.web_services', compact('service'));
  }

  public function webStore(Request $request)
  {

    $service = AdminServices::where(['id'=>3])->first();
    if ($request->file('banner_image')){
      $imageName = time().'.'.$request->banner_image->extension();
      $request->banner_image->move(public_path('service_images'), $imageName);
      $banner_image = $imageName;
    }else{
      $banner_image = $service->banner_image;
    }
    if ($request->file('image_one')){
      $imageName = time().'.'.$request->image_one->extension();
      $request->image_one->move(public_path('service_images'), $imageName);
      $first_image = $imageName;
    }
    else{
      $first_image = $service->first_image;
    }
    if ($request->file('image_two')){
      $imageName = time().'.'.$request->image_two->extension();
      $request->image_two->move(public_path('service_images'), $imageName);
      $second_image = $imageName;
    }else{
      $second_image = $service->second_image;
    }

    AdminServices::updateOrCreate(['id'=>3],[
      'slug' => $request->slug,
      'section_one_title' => $request->section_one_title,
      'section_one_text' => $request->section_one_text,

      'section_two_title' => $request->section_two_title,
      'section_two_text' => $request->section_two_text,

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

      'section_two_box_six_title' => $request->section_two_box_six_title,
      'section_two_box_six_text' => $request->section_two_box_six_text,

      'section_three_title' => $request->section_three_title,

      'section_three_box_one_title' => $request->section_three_box_one_title,
      'section_three_box_one_text' => $request->section_three_box_one_text,
      'section_three_box_two_title' => $request->section_three_box_two_title,
      'section_three_box_two_text' => $request->section_three_box_two_text,
      'section_three_box_three_title' => $request->section_three_box_three_title,
      'section_three_box_three_text' => $request->section_three_box_three_text,
      'section_three_box_four_title' => $request->section_three_box_four_title,
      'section_three_box_four_text' => $request->section_three_box_four_text,
      'section_three_box_five_title' => $request->section_three_box_five_title,
      'section_three_box_five_text' => $request->section_three_box_five_text,
      'section_three_box_six_title' => $request->section_three_box_six_title,
      'section_three_box_six_text' => $request->section_three_box_six_text,
      'section_three_box_seven_title' => $request->section_three_box_seven_title,
      'section_three_box_seven_text' => $request->section_three_box_seven_text,
      'section_three_box_eight_title' => $request->section_three_box_eight_title,
      'section_three_box_eight_text' => $request->section_three_box_eight_text,
      'section_three_box_nine_title' => $request->section_three_box_nine_title,
      'section_three_box_nine_text' => $request->section_three_box_nine_text,

      'section_four_title' => $request->section_four_title,
      'section_four_text' => $request->section_four_text,
      'section_five_title' => $request->section_five_title,
      'section_five_text' => $request->section_five_text,

      'section_six_title'  => $request->section_six_title,
      'section_six_text'  => $request->section_six_text,
      'section_six_faq_one_title'  => $request->section_six_faq_one_title,
      'section_six_faq_one_text'  => $request->section_six_faq_one_text,
      'section_six_faq_two_title'  => $request->section_six_faq_two_title,
      'section_six_faq_two_text'  => $request->section_six_faq_two_text,
      'section_six_faq_three_title'  => $request->section_six_faq_three_title,
      'section_six_faq_three_text'  => $request->section_six_faq_three_text,
      'section_six_faq_four_title'  => $request->section_six_faq_four_title,
      'section_six_faq_four_text'  => $request->section_six_faq_four_text,
      'section_six_faq_five_title'  => $request->section_six_faq_five_title,
      'section_six_faq_five_text' => $request->section_six_faq_five_text,

      'banner_image' => $banner_image,
      'image_one' => $first_image,
      'image_two' => $second_image,
    ]);

    Session::flash('success', 'Web Service updated successfully.');
    return redirect()->route('admin-web-service');
  }

  public function ppcIndex()
  {
    $service = AdminServices::where('id',4)->first();
    return view('content.admin_services.ppc_services', compact('service'));
  }

  public function ppcStore(Request $request)
  {

    $service = AdminServices::where(['id'=>4])->first();
    if ($request->file('banner_image')){
      $imageName = time().'.'.$request->banner_image->extension();
      $request->banner_image->move(public_path('service_images'), $imageName);
      $banner_image = $imageName;
    }else{
      $banner_image = $service->banner_image;
    }
    if ($request->file('image_one')){
      $imageName = time().'.'.$request->image_one->extension();
      $request->image_one->move(public_path('service_images'), $imageName);
      $first_image = $imageName;
    }
    else{
      $first_image = $service->first_image;
    }
    if ($request->file('image_two')){
      $imageName = time().'.'.$request->image_two->extension();
      $request->image_two->move(public_path('service_images'), $imageName);
      $second_image = $imageName;
    }else{
      $second_image = $service->second_image;
    }

    AdminServices::updateOrCreate(['id'=>4],[
      'slug' => $request->slug,
      'section_one_title' => $request->section_one_title,
      'section_one_text' => $request->section_one_text,

      'section_two_title' => $request->section_two_title,
      'section_two_text' => $request->section_two_text,

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

      'section_two_box_six_title' => $request->section_two_box_six_title,
      'section_two_box_six_text' => $request->section_two_box_six_text,

      'section_three_title' => $request->section_three_title,

      'section_three_box_one_title' => $request->section_three_box_one_title,
      'section_three_box_one_text' => $request->section_three_box_one_text,
      'section_three_box_two_title' => $request->section_three_box_two_title,
      'section_three_box_two_text' => $request->section_three_box_two_text,
      'section_three_box_three_title' => $request->section_three_box_three_title,
      'section_three_box_three_text' => $request->section_three_box_three_text,
      'section_three_box_four_title' => $request->section_three_box_four_title,
      'section_three_box_four_text' => $request->section_three_box_four_text,
      'section_three_box_five_title' => $request->section_three_box_five_title,
      'section_three_box_five_text' => $request->section_three_box_five_text,
      'section_three_box_six_title' => $request->section_three_box_six_title,
      'section_three_box_six_text' => $request->section_three_box_six_text,
      'section_three_box_seven_title' => $request->section_three_box_seven_title,
      'section_three_box_seven_text' => $request->section_three_box_seven_text,
      'section_three_box_eight_title' => $request->section_three_box_eight_title,
      'section_three_box_eight_text' => $request->section_three_box_eight_text,
      'section_three_box_nine_title' => $request->section_three_box_nine_title,
      'section_three_box_nine_text' => $request->section_three_box_nine_text,

      'section_four_title' => $request->section_four_title,
      'section_four_text' => $request->section_four_text,
      'section_five_title' => $request->section_five_title,
      'section_five_text' => $request->section_five_text,

      'section_six_title'  => $request->section_six_title,
      'section_six_text'  => $request->section_six_text,
      'section_six_faq_one_title'  => $request->section_six_faq_one_title,
      'section_six_faq_one_text'  => $request->section_six_faq_one_text,
      'section_six_faq_two_title'  => $request->section_six_faq_two_title,
      'section_six_faq_two_text'  => $request->section_six_faq_two_text,
      'section_six_faq_three_title'  => $request->section_six_faq_three_title,
      'section_six_faq_three_text'  => $request->section_six_faq_three_text,
      'section_six_faq_four_title'  => $request->section_six_faq_four_title,
      'section_six_faq_four_text'  => $request->section_six_faq_four_text,
      'section_six_faq_five_title'  => $request->section_six_faq_five_title,
      'section_six_faq_five_text' => $request->section_six_faq_five_text,

      'banner_image' => $banner_image,
      'image_one' => $first_image,
      'image_two' => $second_image,
    ]);

    Session::flash('success', 'PPC Service updated successfully.');
    return redirect()->route('admin-ppc-service');
  }

  public function adsIndex()
  {
    $service = AdminServices::where('id',5)->first();
    return view('content.admin_services.ads_services', compact('service'));
  }

  public function adsStore(Request $request)
  {

    $service = AdminServices::where(['id'=>5])->first();
    if ($request->file('banner_image')){
      $imageName = time().'.'.$request->banner_image->extension();
      $request->banner_image->move(public_path('service_images'), $imageName);
      $banner_image = $imageName;
    }else{
      $banner_image = $service->banner_image;
    }
    if ($request->file('image_one')){
      $imageName = time().'.'.$request->image_one->extension();
      $request->image_one->move(public_path('service_images'), $imageName);
      $first_image = $imageName;
    }
    else{
      $first_image = $service->first_image;
    }
    if ($request->file('image_two')){
      $imageName = time().'.'.$request->image_two->extension();
      $request->image_two->move(public_path('service_images'), $imageName);
      $second_image = $imageName;
    }else{
      $second_image = $service->second_image;
    }

    AdminServices::updateOrCreate(['id'=>5],[
      'slug' => $request->slug,
      'section_one_title' => $request->section_one_title,
      'section_one_text' => $request->section_one_text,

      'section_two_title' => $request->section_two_title,
      'section_two_text' => $request->section_two_text,

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

      'section_two_box_six_title' => $request->section_two_box_six_title,
      'section_two_box_six_text' => $request->section_two_box_six_text,

      'section_three_title' => $request->section_three_title,

      'section_three_box_one_title' => $request->section_three_box_one_title,
      'section_three_box_one_text' => $request->section_three_box_one_text,
      'section_three_box_two_title' => $request->section_three_box_two_title,
      'section_three_box_two_text' => $request->section_three_box_two_text,
      'section_three_box_three_title' => $request->section_three_box_three_title,
      'section_three_box_three_text' => $request->section_three_box_three_text,
      'section_three_box_four_title' => $request->section_three_box_four_title,
      'section_three_box_four_text' => $request->section_three_box_four_text,
      'section_three_box_five_title' => $request->section_three_box_five_title,
      'section_three_box_five_text' => $request->section_three_box_five_text,
      'section_three_box_six_title' => $request->section_three_box_six_title,
      'section_three_box_six_text' => $request->section_three_box_six_text,
      'section_three_box_seven_title' => $request->section_three_box_seven_title,
      'section_three_box_seven_text' => $request->section_three_box_seven_text,
      'section_three_box_eight_title' => $request->section_three_box_eight_title,
      'section_three_box_eight_text' => $request->section_three_box_eight_text,
      'section_three_box_nine_title' => $request->section_three_box_nine_title,
      'section_three_box_nine_text' => $request->section_three_box_nine_text,

      'section_four_title' => $request->section_four_title,
      'section_four_text' => $request->section_four_text,
      'section_five_title' => $request->section_five_title,
      'section_five_text' => $request->section_five_text,

      'section_six_title'  => $request->section_six_title,
      'section_six_text'  => $request->section_six_text,
      'section_six_faq_one_title'  => $request->section_six_faq_one_title,
      'section_six_faq_one_text'  => $request->section_six_faq_one_text,
      'section_six_faq_two_title'  => $request->section_six_faq_two_title,
      'section_six_faq_two_text'  => $request->section_six_faq_two_text,
      'section_six_faq_three_title'  => $request->section_six_faq_three_title,
      'section_six_faq_three_text'  => $request->section_six_faq_three_text,
      'section_six_faq_four_title'  => $request->section_six_faq_four_title,
      'section_six_faq_four_text'  => $request->section_six_faq_four_text,
      'section_six_faq_five_title'  => $request->section_six_faq_five_title,
      'section_six_faq_five_text' => $request->section_six_faq_five_text,

      'banner_image' => $banner_image,
      'image_one' => $first_image,
      'image_two' => $second_image,
    ]);

    Session::flash('success', 'Ads Service updated successfully.');
    return redirect()->route('admin-ads-service');
  }
}
