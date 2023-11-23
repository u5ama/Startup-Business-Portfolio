<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear', function() {
  Artisan::call('view:clear');
  Artisan::call('route:clear');
  Artisan::call('config:cache');
  Artisan::call('cache:clear');
  Artisan::call('config:clear');
  echo "success";
});

Route::get('/', '\App\Http\Controllers\Homepage\AdminHomepageController@home')->name('home');
Route::get('/about-us', '\App\Http\Controllers\About\AdminAboutUsController@home')->name('about');
Route::get('/contact-us', '\App\Http\Controllers\Contact\AdminContactController@home')->name('contact');
Route::get('/services', '\App\Http\Controllers\Services\AdminServicesController@home')->name('services');
Route::get('/services-details/{slug?}', '\App\Http\Controllers\Services\AdminServicesController@details')->name('services-details');
Route::get('/blog', '\App\Http\Controllers\Blog\BlogsController@home')->name('blog');
Route::get('blog-details/{slug?}', '\App\Http\Controllers\Blog\BlogsController@show')->name('blog_details');
Route::post('/admin_contact_form', '\App\Http\Controllers\Contact\AdminContactController@contactFormStore')->name('admin-contact-form-save');
Route::post('/admin_offer_form', '\App\Http\Controllers\Offer\AdminOfferController@offerFormStore')->name('admin-offer-form-save');
Route::get('/terms-conditions', '\App\Http\Controllers\Homepage\AdminHomepageController@termsConditions')->name('terms-conditions');

Route::get('/qr', function () {
  return view('frontend.linkTree');
})->name('link_tree');

Route::get('/portfolio', function () {
  return view('frontend.portfolio');
})->name('portfolio');

Route::get('/thankyou', function () {
  return view('frontend.thank_you');
})->name('thankyou');

Route::get('/portfolio-details', function () {
  return view('frontend.portfolio_details');
})->name('portfolio_details');

// authentication
Route::group(['prefix' => 'admin'], function () {

  $controller_path = 'App\Http\Controllers';
  Route::get('/login', $controller_path . '\authentications\LoginBasic@index')->name('auth-login');
  Route::post('/login', $controller_path . '\authentications\LoginBasic@postLogin')->name('adminLoginPost');

  // Main Page Route
  Route::group(['prefix' => '','middleware' => 'adminauth'], function () use ($controller_path) {
    Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('adminDashboard');
    Route::post('/logout', $controller_path . '\authentications\LoginBasic@adminLogout')->name('logout');

    // pages
    Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');

    //Homepage
    Route::get('/admin_homepage', $controller_path . '\Homepage\AdminHomepageController@index')->name('admin-homepage');
    Route::post('/admin_homepage', $controller_path . '\Homepage\AdminHomepageController@store')->name('admin-homepage-save');
    //About
    Route::get('/admin_about_us', $controller_path . '\About\AdminAboutUsController@index')->name('admin-about');
    Route::post('/admin_about_us', $controller_path . '\About\AdminAboutUsController@store')->name('admin-about-save');
    //Contact
    Route::get('/admin_contact_us', $controller_path . '\Contact\AdminContactController@index')->name('admin-contact');
    Route::post('/admin_contact_us', $controller_path . '\Contact\AdminContactController@store')->name('admin-contact-save');
    //Contact Form
    Route::get('/admin_contact_form', $controller_path . '\Contact\AdminContactController@contactFormDetails')->name('admin-contact-form');
    //Offer Form
    Route::get('/admin_offer_form', $controller_path . '\Offer\AdminOfferController@offerFormDetails')->name('admin-offer-form');
    //Portfolio
    Route::get('/admin_portfolio', $controller_path . '\Portfolio\AdminPortfolioController@index')->name('admin-portfolio');
    Route::post('/admin_portfolio', $controller_path . '\Portfolio\AdminPortfolioController@store')->name('admin-portfolio-save');
    //Terms and Conditions
    Route::get('/admin_terms_conditions', $controller_path . '\Homepage\AdminHomepageController@adminTermsConditionIndex')->name('admin-terms-conditions');
    Route::post('/admin_terms_conditions', $controller_path . '\Homepage\AdminHomepageController@adminTermsConditionStore')->name('admin-terms-conditions-save');

    //Admin All Service
    Route::get('/admin_all_services', $controller_path . '\Services\AdminServicesController@all_services')->name('admin-service');
    Route::post('/admin_all_services', $controller_path . '\Services\AdminServicesController@allServiceStore')->name('admin-service-save');
    //Admin SEO Service
    Route::get('/admin_seo_services', $controller_path . '\Services\AdminServicesController@index')->name('admin-seo-service');
    Route::post('/admin_seo_services', $controller_path . '\Services\AdminServicesController@store')->name('admin-seo-service-save');
    //Admin SMM Service
    Route::get('/admin_smm_services', $controller_path . '\Services\AdminServicesController@smmIndex')->name('admin-smm-service');
    Route::post('/admin_smm_services', $controller_path . '\Services\AdminServicesController@smmStore')->name('admin-smm-service-save');
    //Admin Web Service
    Route::get('/admin_web_services', $controller_path . '\Services\AdminServicesController@webIndex')->name('admin-web-service');
    Route::post('/admin_web_services', $controller_path . '\Services\AdminServicesController@webStore')->name('admin-web-service-save');
    //Admin PPC Service
    Route::get('/admin_ppc_services', $controller_path . '\Services\AdminServicesController@ppcIndex')->name('admin-ppc-service');
    Route::post('/admin_ppc_services', $controller_path . '\Services\AdminServicesController@ppcStore')->name('admin-ppc-service-save');
    //Admin SEO Service
    Route::get('/admin_seo_services', $controller_path . '\Services\AdminServicesController@index')->name('admin-seo-service');
    Route::post('/admin_seo_services', $controller_path . '\Services\AdminServicesController@store')->name('admin-seo-service-save');
    //Admin Ads Service
    Route::get('/admin_ads_services', $controller_path . '\Services\AdminServicesController@adsIndex')->name('admin-ads-service');
    Route::post('/admin_ads_services', $controller_path . '\Services\AdminServicesController@adsStore')->name('admin-ads-service-save');

    // Services
    Route::resource('all_services', $controller_path . '\Services\ServicesController');
    Route::get('all_services/edit/{id}', $controller_path . '\Services\ServicesController@edit')->name('all_services.edit');
    Route::post('all_services/update/{id}', $controller_path . '\Services\ServicesController@update')->name('all_services.update');
    Route::delete('all_services/{id}', $controller_path .'\Services\ServicesController@destroy')->name('all_services.destroy');
    //Testimonial
    Route::resource('admin_testimonials', $controller_path . '\Testimonials\TestimonialController');
    Route::delete('admin_testimonials/{id}', $controller_path .'\Testimonials\TestimonialController@destroy')->name('admin_testimonials.destroy');
    //Categories
    Route::resource('admin_categories', $controller_path . '\Categories\CategoriesController');
    Route::delete('admin_categories/{id}', $controller_path .'\Categories\CategoriesController@destroy')->name('admin_categories.destroy');
    //Blogs
    Route::resource('admin_blogs', $controller_path . '\Blog\BlogsController');
    Route::delete('admin_blogs/{id}', $controller_path . '\Blog\BlogsController@destroy')->name('admin_blogs.destroy');
    Route::get('admin_blogs/edit/{id}', $controller_path . '\Blog\BlogsController@edit')->name('admin_blogs.edit');
    Route::post('admin_blogs/update/{id}', $controller_path . '\Blog\BlogsController@update')->name('admin_blogs.update');

    // form elements
    Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
    Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

    // form layouts
    Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
    Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

    // tables
    Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');

    });
});

Route::get('/foo', function () {
  Artisan::call('storage:link');
});
