@extends('layouts.app')

@section('title')
<h1>Welcome to my blog!</h1>
@endsection
<link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 

@section('content')
<div>
    <br/>
    <img class = "mainPhoto" src="{{ URL::to('img/blogging.jpeg') }}">
    <br/>
    <br/>
    <p class="word"> 
        Hi everyone! This is my blog and feel free to write anything here;)
    </p>

</div>
@endsection