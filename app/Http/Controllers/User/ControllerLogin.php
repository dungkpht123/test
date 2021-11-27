<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ControllerLogin extends Controller
{
  public function login()
  {

    return view('testLogin');
  }
  public function postlogin(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required', 'email',
      'password' => 'required',
    ], [
      'name.required' => 'Vui lòng nhập tên của bạn',
      'email.required' => 'Vui lòng nhập email của bạn',
      'email.required' => 'Email không đúng định dạng',
      'password.required' => 'Password không được để trống',
    ]);
    if (Auth::guard('customer')->attempt($request->only('name', 'email', 'password'), $request->has('remember'))) {
      return redirect()->route('home');
    } else {
      return redirect()->back();
    }
  }

  public function signup_user()
  {
    return view('testReg');
  }
  public function post_signup_user()
  {

    return view('testReg');
  }

  public function logout()
  {
    Auth::guard('customer')->logout();
    session(['cart' => []]);
    return redirect()->route('home');
  }

  // public function register()
  // {
  //   return view('testReg');
  // }
  // // kiểm tra đăng nhập
  // public function authenticate_user(Request $request)
  // {
  //   $request->validate([
  //     'name' => 'required|string',
  //     'email' => 'required|string|email',
  //     'password' => 'required|string',
  //   ]);

  //   $credentials = $request->only('name','email', 'password');

  //   if (Auth::attempt($credentials)) {
  //     return redirect()->intended('home');
  //   }
  //   return redirect('user-login')->with('error', 'Mật Khẩu hoặc Email sai vui lòng nhật lại!!!');
  // }

  // public function logout()
  // {
  //   Auth::logout();
  //   return redirect('');
  // }
}
