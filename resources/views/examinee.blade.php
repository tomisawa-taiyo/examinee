<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>ExamineeSupport</title>
        <link rel="stylesheet" href="stylesheet.scss">
        
    </head>
    <body>
        <header>
            <div class="container">
                <div class="header-right">
                    <a href="#" class="login">ログイン</a>
                    
                </div>
            </div>
        </header>
    </body>
</html>

{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.student')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', '大学生への質問投稿サイト')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

    <div class="top-wrapper">
        <div class="container">
            <h1>現役の大学生に質問できるサイト</h1>
            <p>どんな勉強法で合格したのか、なんの参考書を使っていたのか</p>
            <div class="btn-wrapper">
                <a href="#" class="btn-sighup">新規会員登録はこちらから</a>
                <p>または</p>
                <a href="#" class="btn twitter">Twitterで登録</a>
                
            </div>
            
        </div>
    </div>
    
@endsection