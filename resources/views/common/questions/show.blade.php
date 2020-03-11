@extends('layouts.student')
@section('title', '質問応答')

@section('content')
<div class="container">
    
    <div class="form-group row">
        <div class="col-md-10">
            <p class="text">{{ $q->title}} <br> {{ $q->body }}</p>
        </div>
    </div>
    <div class="row">
        <div class="list-answer col-md-12 mx-auto">
            <div class="row">
                <p>返信一覧</p>
            </div>
            @foreach($q->answers as $answer)
                <p class="text">{{ $answer->user->name }} @ {{ $answer->user->identity }} <br> {{ $answer->created_at }}　<br> {{ $answer->body }}</p>
            @endforeach

        </div>
    </div>
    <form action="{{ action('Common\AnswerController@create') }}" method="post" >
        <div class="form-group row">
            <div class="col-md-10">
                <textarea class="form-control" name="body" rows="20"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                <input type="hidden" name="question_id" value="{{ $q->id }}">
                {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="投稿する">
            </div>
        </div>
    </form>
    <form action="{{ action('Student\ExController@finish') }}" method="post" >
    @csrf
        <div class="form-group row">
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary" value="解決した">
            </div>
        </div>
    </form>
</div>
@endsection