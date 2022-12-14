@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https:/ /fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                {{ csrf_field() }}
                @method('PUT')
                <div class='content__title'>
                    <h2>Title</h2>
                    <input type='text' name='post[title]' placeholder="タイトル" value="{{ $post->title}}">
                </div>
                <div class='content__body'>
                    <h2>Body</h2>
                    <textarea type='text' name='post[body]' placeholder="今日も1日お疲れさまでした。" >{{ $post->body }}</textarea>
                </div>
                <input type="submit" value="保存">
            </form>
            <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
        </div>
    </body>
</html> 
@endsection