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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        //return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
