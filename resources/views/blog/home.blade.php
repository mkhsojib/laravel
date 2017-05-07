@extends('layouts.publicHomePageTemplate')

@section('title','Blog Home Page')

@section('content')
    <div class="row headingBox">


        @yield('content')


        <div>

            @foreach($posts as $post)

                <div class="well well-lg">

                    <h3> {{ $post->title }}</h3>
                    <p>{{ $post->created_at->diffForHumans(Carbon\Carbon::now())}}</p>
                    <p>{{ $post->body }}</p>
                    <a href="{{ route('posts.show',['id'=>$post->id]) }}" class="btn btn-default pull-right">Read More</a>
                    &nbsp;
                </div>

            @endforeach
<div class="row text-center">

    {{ $posts->links() }}
</div>

        </div>
@endsection

