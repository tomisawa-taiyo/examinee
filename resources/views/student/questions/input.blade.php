{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.student')


{{-- admin.blade.phpの@yield('title')に'受験生からの質問フォーム'を埋め込む --}}
@section('title', '受験生からの質問フォーム')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


        <h1>受験生からの質問フォーム</h1>
        <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>質問投稿</h2>
                <form action="{{ action('Student\ExController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">本文</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" row="20">{{ old('body') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="title">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="質問を投稿する">
                </form>
            </div>
        </div>
    </div>
@endsection