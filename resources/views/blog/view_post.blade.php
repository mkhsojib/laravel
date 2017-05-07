@extends('layouts.viewPostTemplate')

@section('title', 'View Post #'. $id)

@section('content')

    <div class="row">

        <a href="http://laravel.dev/">Back To Home</a>
    </div>
<div class="row">

    <h3> {{ $post->title }}</h3>
    <p> {{ $post->body }}</p>

</div>

    <div class="row text-center" id="facebookCommentContainer">

        <div class="fb-comments" data-href="http://laravel.dev/posts/{{ $id }}" data-width="800" data-numposts="10"></div>

    </div>

@endsection