@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>投稿一覧</h1>
        <ul>
            @foreach ($posts as $post)
                <h4>id:{{ $post->id }}</h4>
                <h5>user_id:{{ $post->user_id }}</h5>
                <li>name:{{ $post->name }}</li>
                <p>本文......   {{$post->content}}
            @endforeach
        </ul>
    </div>
@endsection
