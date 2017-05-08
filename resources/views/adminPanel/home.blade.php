@extends('layouts.template')

@section('title','blog admin')

@section('content')



    <div class="nav navbar-nav pull-right">


        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </div>
    <h1>Dashboard</h1>

    <a href="{{ route('posts.create') }}" class="btn btn-primary pull-right">Add new blog post</a>
    <br><br><br>
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Post Title</th>
        <th>Body</th>
        <th>Edit</th>
        <th>Del</th>
        </thead>

        <tbody>

        @foreach($posts as $post)
            <tr>

                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td><a href="{{ route('posts.edit',['id'=>$post->id]) }}" class="btn btn-info">edit</a></td>
                <td>Del</td>
            </tr>

        @endforeach

        </tbody>
    </table>

@endsection