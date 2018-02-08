<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
      return 'This is a Index of ContactController!';
    }

    public function create()
    {
      return 'This is a create of ContactController!';
    }

    public function edit()
    {
      return 'This is a edit of ContactController!';
    }
}
