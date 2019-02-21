<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
class ArticlesController extends Controller
{
    public function index(){
        $articles = article::paginate(4);
        return view("Rocroc")->with("articles", $articles);
    }

    public function store(Request $request){
        // $article = new article;
        // $article->title = $request->input('title');
        // $article->content = $request->input('content');
        // $article->save();

$request->validate([
"title" => "required|min:5|max:20|unique:articles",
"content" => "required|min:5|max:200"
]);

        article::create(["title" => $request->title, "content" => $request->content]);
        echo "succesfully Added!";
    }

    public function create(){
return view("adform");
    }   

    public function show($id){
$article = article::find($id);

return view("show")->with("article", $article);

    }
    public function edit($id){

        $article = article::find($id);
return view('editform')->with("article", $article);
    }
    public function update(Request $request, $id){
        $article = article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        echo "Succesfully updated";
    }

    public function destroy($id){
        // article::destroy($id);
        $article = article::find($id);
        $article->delete();
        echo "OK NE";
    }

    
}
