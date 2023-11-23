<?php

namespace App\Http\Controllers\authentications;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginBasic extends Controller
{
  public function index()
  {
    return view('content.authentications.auth-login-basic');
  }
  public function postLogin(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if(auth()->guard('admin')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
      $user = auth()->guard('admin')->user();
      if($user->is_admin == 1){
        return redirect()->route('adminDashboard')->with('success','You are Logged in successfully.');
      }
    }else {
      return back()->with('error','Whoops! invalid email and password.');
    }
  }

  public function adminLogout(Request $request)
  {
    auth()->guard('admin')->logout();
    Session::flush();
    Session::put('success', 'You are logout successfully');
    return redirect(route('auth-login'));
  }
}
