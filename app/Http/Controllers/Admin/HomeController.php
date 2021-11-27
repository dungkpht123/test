<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
class HomeController extends Controller
{
  // đăng nhập thành công login trỏ vào đây
    public function admin()
    {
      $admin = admin::all();
      return view('admin.dashboard')->with(compact('admin'));
    }

}
