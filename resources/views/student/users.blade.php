{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.student')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'マイページ')


{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ExamineeSupport</title>
        
    </head>
    <body>
        <h1>マイページ</h1>
    </body>
</html>




@endsection
