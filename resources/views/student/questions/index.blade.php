@extends('layouts.student')
@section('title', '受験生からの質問の一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>質問一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Student\ExController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Student\ExController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-question col-md-12 mx-auto">
                <div class="row">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="10%">ステータス</th>
                                <th width="20%">タイトル</th>
                                <th width="30%">本文</th>
                                <th width="10%">詳細</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $question)
                                <tr>
                                    <th>{{ $question->id }}</th>
                                    @if ($question->is_complete === 0)
                                        <td>未解決</td>
                                    @else 
                                        <td>解決済み</td>
                                    @endif
                                    <td>{{ \Str::limit($question->title, 100) }}</td>
                                    <td>{{ \Str::limit($question->body, 250) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Common\AnswerController@show', ['id' => $question->id]) }}">詳細</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection