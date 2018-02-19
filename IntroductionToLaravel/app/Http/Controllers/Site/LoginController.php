<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
      return view('login.index');
    }

    public function getin(Request $request)
    {
      $data = $request->all();

      if(Auth::attempt([
        'email'=>$data['email'],
        'password'=>$data['password']
      ]))
      {
        return redirect()->route('admin.courses');
      }
      return redirect()->route('login.index');
    }
}
