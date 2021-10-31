@extends('layouts.app')

@section('title')
<h1>All Posts</h1>
@endsection

@section('content')
    @foreach($posts as $post)
        <div>
            {{$post['title']}}
            {{$post['content']}}
        </div>
    @endforeach
@endsection