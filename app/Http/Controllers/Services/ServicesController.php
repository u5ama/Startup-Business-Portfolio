<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\ValidationException;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
      $services = Services::all();
      return view('content.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
      return view('content.services.create');
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
          'title' => 'required',
          'description' => 'required',
        ];

        try {
          $this->validate($request, $validator_array);
        } catch (ValidationException $e) {
          return redirect()
            ->back()
            ->withInput()
            ->withErrors($e->validator->errors());
        }

        $service = new Services();
        $service->title = $request->title;
        $service->service_key = $request->service_key;
        $service->description = $request->description;
        $service->save();

      Session::flash('success', 'Service created successfully.');
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
     * @return Application|Factory|View
     */
    public function edit($id)
    {
      $service = Services::where('id', $id)->first();
      if ($service){
        return view('content.services.edit',compact('service'));
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
        'title' => 'required',
        'description' => 'required',
      ];

      try {
        $this->validate($request, $validator_array);
      } catch (ValidationException $e) {
        return redirect()
          ->back()
          ->withInput()
          ->withErrors($e->validator->errors());
      }

      $service = Services::where('id', $id)->first();
      $service->description = $request->description;
      $service->title = $request->title;

      $service->save();

      Session::flash('success', 'Service updated successfully.');
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
      Services::where('id', $id)->delete();
      Session::flash('success', 'Service deleted successfully.');
      return redirect()->back();
    }
}
