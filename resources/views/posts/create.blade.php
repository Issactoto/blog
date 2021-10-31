@extends('layouts.app')

@section('title')
    <h1>Create a Form</h1>
@endsection

@section('content')
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
@endsection