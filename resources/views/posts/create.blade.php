@extends('layouts.app')

@section('title')
    <h1>Create a Form</h1>
@endsection

@section('content')
@guest
<p class = "p-2" style="display: inline-block;">
    If you want to add a blog post, you need to 
</p>
@if (Route::has('login'))
    <a  href="{{ route('login') }}" style="display: inline-block;">{{ __('Login') }}</a>
@endif

@else

    <div>
        <form action ="{{ route('posts.store') }}" method ="POST">
            @csrf
            <div class="form-group"><input  class="form-control" type ='text' name = 'title'></div>
            <div class="form-group"><textarea class="form-control" style="min-height: 25vh" name='content'></textarea></div>
            <div ><input type ='submit' value = 'Create' class="btn btn-primary btn-block"></div>
        </form>
    </div>
    @if($errors->any())
    <div>
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
    </div>
    @endif
@endguest
@endsection