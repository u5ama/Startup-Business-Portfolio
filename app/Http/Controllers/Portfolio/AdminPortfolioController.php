<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminPortfolioController extends Controller
{
  public function index()
  {
    return view('content.portfolio.portfolio');
  }

    public function store(Request $request)
    {
      Session::flash('success', 'Portfolio updated successfully.');
      return redirect()->route('admin-about');
    }
}
