<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add() {
      return view('add-content');
    }

    public function store(Request $request) {
      $this->validate($request, [
        'name' => 'required|max:10',
      ]);

      // $data = $request->all();
      // $article = new Article;
      // $article->fill($data);

      // $article->save();
      return redirect('/');
    }
}
