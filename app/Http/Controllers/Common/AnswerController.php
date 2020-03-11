<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Question;
use App\Answer;



class AnswerController extends Controller
{
    //
   public function show(Request $request)
    {
        // Question Modelからデータを取得する
      $question = Question::find($request->id);
      if (empty($question)) {
        abort(404);    
      }
      
      $answer = Answer::find($request->id);
      return view('common.questions.show', ['q' => $question,'answer' =>$answer]);
      
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
      $this->validate($request, Answer::$rules);
      $answer = new Answer;
      $form = $request->all();
      $user = Auth::user();

      

      unset($form['_token']);
      // データベースに保存する
      $answer->fill($form);
      $answer->user_id = $user->id;
      $answer->save();
      
      
      
      return redirect()->action('Common\AnswerController@show', ['id' => $answer->question_id]);
        
    }
    
    
    
}
