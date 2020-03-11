<?php

namespace App\Http\Controllers\Mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Question;

class QuestionController extends Controller
{
    //
    public function index(Request $request)
    {
      $cond_title = $request->cond_title;
      if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Question::where('title', $cond_title)->get();
      } else {
          // それ以外はすべてのニュースを取得する
          $posts = Question::all();
      }
      return view('mentor.questions.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
}
