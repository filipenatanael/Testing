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

    public function save(Request $request)
    {
     $data = $request->all();

     if(isset($data['published'])){
       $data['published'] = 'yes';
     }else{
       $data['published'] = 'no';
     }

     if($request->hasFile('image')) {
        $image = $request->file('image');
        $num = rand(1000,9999);
        $dir = "img/courses";
        $ext = $image->guessClientExtension(); /* Get image extension */
        $ImageName = 'Image_'.$num.".".$ext;
        $image->move($dir, $ImageName);        /* Move to directoty and rename*/
        $data['image'] = $dir."/".$ImageName;
     }
     Course::create($data);

     return redirect()->route('admin.courses');
    }

}
