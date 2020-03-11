<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Question;

class ExController extends Controller
{
    //
    public function add()
    {
        return view('student.questions.input');
        
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
      $this->validate($request, Question::$rules);
      $question = new Question;
      $form = $request->all();

      // formに画像があれば、保存する
      if (isset($form['image'])) {
        $path = $request->file('image')->store('public/image');
        $question->image_path = basename($path);
      } else {
          $question->image_path = null;
      }

      unset($form['_token']);
      unset($form['image']);
      // データベースに保存する
      $question->fill($form);
      $question->save();

      return redirect('student/questions');
    }
    
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
      return view('student.questions.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    public function finish(Request $request)
    {
    
        \App\Question::where('id', $request->id)->update(['is_complete' => 1]); 
        
        return redirect('student/questions');
    }
    
    
    
}
