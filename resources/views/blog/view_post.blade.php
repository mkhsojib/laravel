@extends('layouts.homePublicTemplate')

@section('title', 'View Post #' . $id)

@section('content')
    <div id="fbCommentCount" style="display: none;">
        <span class="fb-comments-count" data-href="{{ Request::url() }}"></span>
    </div>

    <form style="display: none;" name="fbCommentCountform" id="fbCommentCountForm"
          action="{{ route('blogs.update', ['id'=>$id]) }}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">

        <input type="text" name="commentCount" id="fbFormCommentCount">
        <input type="text" name="visitCount" id="hiddenFormPostVisitCounter" value="{{ $post->visit_count }}">
    </form>

    <div class="row">
        <a href="http://laravel.dev/">Go to Home</a>
    </div>
    <div id="postContent" class="row">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
    </div>

    {{--<div class="row text-center" id="facebookCommentContainer">--}}
        {{--<div class="fb-comments" data-href="{{ Request::url() }}" data-width="800" data-numposts="10"></div>--}}
    {{--</div>--}}

    {{--<script>--}}
        {{--let fbCommentCount = document.getElementById('fbCommentCount').getElementsByClassName('fb_comments_count');--}}

        {{--setTimeout(function () {--}}
            {{--document.getElementById('fbFormCommentCount').value = fbCommentCount[0].innerHTML;--}}

            {{--var $formVar = $('#fbCommentCountForm');--}}

            {{--let visitCount = document.getElementById('hiddenFormPostVisitCounter').value;--}}

            {{--let visitCountPlusOne = parseInt(visitCount) + 1;--}}

            {{--document.getElementById('hiddenFormPostVisitCounter').value = visitCountPlusOne;--}}

            {{--$.ajax({--}}
                {{--url: $formVar.prop('{{ route('blogs.update', ['id'=>$id]) }}'),--}}
                {{--method: 'PUT',--}}
                {{--data: $formVar.serialize(),--}}
            {{--});--}}
        {{--}, 1000);--}}


    {{--</script>--}}
@endsection