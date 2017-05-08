@extends('layouts.template')

@section('title','Add New Post')

@section('content')

    <h1>Edit New Post # {{ $post->id }}</h1>

    <div class="col-lg-8 col-sm-8 col-sm-offset-2">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('posts.update') }}" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="PUT"/>
            <div class="form-group">


                <label for="title">Title</label>
                <input name="title" type="test" class="form-control" value="{{ $post->title }}">



            </div>


            <div class="form-group">


                <label for="body">body</label>
                <textarea name="body" id="" cols="30" rows="10" class="form-control">

{{ $post->body }}

          </textarea>



            </div>

            <button type="submit" class="btn btn-primary"> Submit </button>
            <a href="{{ route('posts.index') }}" class="btn btn-default pull-right">Back</a>

        </form>



    </div>



@endsection