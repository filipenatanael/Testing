<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class ArticlesController extends Controller
{
    public function index()
    {
        $breadCrumb = json_encode([
           ["title" => "Home", "url" => route('home')]
          ,["title" => "Shopping", "url" => "#"]
        ]);
        // $ListOfArticles = json_encode([
        //    ["id"=>1,"title" => "PHP OO Course", "description" => "Course of computer programmer on PHP.", "date"=>"2018-01-02"]
        //   ,["id"=>2,"title" => "Vue JS", "description" => "Javascript on Pratice with Vue JS.", "date"=>"2018-01-02"]
        // ]);
        $ListOfArticles = json_encode(Article::select('id','title','description','date')->get());
        return view('admin.articles.index', compact('breadCrumb', 'ListOfArticles'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validation = \Validator::make($data, [
          "title" => "required",
          "description" => "required",
          "content" => "required",
          "date" => "required"
        ]);

        if($validation->fails()) {
          return redirect()->back()->withErrors($validation)->withInput();
        }
        Article::create($data);
        return redirect()->back();
    }

    public function show($id)
    {
        return Article::find($id);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
      $data = $request->all();
      $validation = \Validator::make($data, [
        "title" => "required",
        "description" => "required"
      ]);

      if($validation->fails()) {
        return redirect()->back()->withErrors($validation)->withInput();
      }
      Article::find($id)->update($data);
      return redirect()->back();
    }

    public function destroy($id)
    {
        Article::find($id)->delete($id);
        return redirect()->back();
    }
}
