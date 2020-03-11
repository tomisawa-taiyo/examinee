<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $guarded = array('id');
    public static $rules = array(
        'body' => 'required',
    );
    
    public function question()
    {
        return $this->belongsTo('App\Question');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
