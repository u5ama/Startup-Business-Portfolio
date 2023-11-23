<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blogs;
use App\Models\Categories;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Viewddddd
     */
    public function home()
    {
      $blogs = Blogs::with('category')->paginate(12);
      return view('frontend.blog',compact('blogs'));
    }

    public function index()
    {
      $blogs = Blogs::with('category')->get();
      return view('content.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
      $categories = Categories::all();
      return view('content.blogs.create', compact('categories'));
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
      'description' => 'required',
      'title' => 'required',
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
    ];

        try {
          $this->validate($request, $validator_array);
        } catch (ValidationException $e) {
          return redirect()
            ->back()
            ->withInput()
            ->withErrors($e->validator->errors());
        }

        $blogs = new Blogs();
        $blogs->description = $request->description;
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->category_id = $request->category_id;
        if ($request->file('image')){
          $imageName = time().'.'.$request->image->extension();
          $request->image->move(public_path('blog_images'), $imageName);
          $blogs->image = $imageName;
        }
        $blogs->save();

        Session::flash('success', 'Blog created successfully.');
        return redirect()->back();
    }

  /**
   * Display the specified resource.
   *
   * @param $slug
   * @return Application|Factory|View
   */
    public function show($slug)
    {

      $blog = Blogs::with('category')->where('slug', $slug)->first();
      if ($blog){
        return view('frontend.blog_details',compact('blog'));
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $categories = Categories::all();
        $blog = Blogs::with('category')->where('id', $id)->first();
        if ($blog){
          return view('content.blogs.edit',compact('blog','categories'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
      $validator_array = [
        'description' => 'required',
        'title' => 'required',
      ];

      try {
        $this->validate($request, $validator_array);
      } catch (ValidationException $e) {
        return redirect()
          ->back()
          ->withInput()
          ->withErrors($e->validator->errors());
      }

      $blogs = Blogs::where('id', $id)->first();
      $blogs->description = $request->description;
      $blogs->title = $request->title;
      $blogs->slug = $request->slug;
      $blogs->category_id = $request->category_id;
      // Set the image only if a file was uploaded
      if ($request->file('image')){
          $imageName = time().'.'.$request->image->extension();
          $request->image->move(public_path('blog_images'), $imageName);
          $blogs->image = $imageName;
      }
      $blogs->save();

      Session::flash('success', 'Blog updated successfully.');
      return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
      Blogs::where('id', $id)->delete();
      Session::flash('success', 'Blog deleted successfully.');
      return redirect()->back();
    }
}
