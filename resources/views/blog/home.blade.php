@extends('layouts.publicHomePageTemplate')

@section('title','Blog Home Page')

@section('content')
    <div class="row headingBox">


        @yield('content')


        <div>

            @foreach($posts as $post)

                <div class="well well-lg">

                    <h3> {{ $post->title }}</h3>
                    <p>{{ $post->body }}</p>
                </div>

            @endforeach
<div class="row text-center">

    {{ $posts->links() }}
</div>

        </div>
@endsection

