@extends('layouts.app')
<link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css"> 

@section('title')
<h1>Contact</h1>
@endsection

@section('content')
<div>
    <br/>
        <img class = "mainPhoto" src="{{ URL::to('img/issac.jpg') }}">
    <br/>
    <br/>
    <p class="word"> 
        Contact me at tototototoman@gmail.com
    </p>

</div>
@endsection