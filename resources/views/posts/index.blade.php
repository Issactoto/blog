@extends('layouts.app')

@section('title')
<h1>All Posts</h1>
@endsection

@section('content')
    @foreach($posts as $post)
    <li>
        <a href ='posts/{{$post['id']}}'>
            {{$post['title']}}
        </a>
    </li>
    @endforeach
@endsection