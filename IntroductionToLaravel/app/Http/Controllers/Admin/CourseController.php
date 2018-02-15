<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller
{
    public function index()
    {
      $registries = Course::all();
      return view('admin.courses.index', compact('registries'));
    }

    public function add()
    {
      return view('admin.courses.add');
    }
}
