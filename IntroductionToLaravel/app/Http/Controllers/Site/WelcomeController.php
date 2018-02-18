<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class WelcomeController extends Controller
{
    public function index()
    {
      $courses = Course::all();
      return view('welcome', compact('courses'));
    }
}
