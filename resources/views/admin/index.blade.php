@extends('layouts.admin')
@section('content')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-4">
                <p class="alert alert-info">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
    @if(Session::has('error'))
        <div class="row">
            <div class="col-md-4">
                <p class="alert alert-danger">{{Session::get('error')}}</p>
            </div>
        </div>
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .my-card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .my-card-title {
            color: grey;
            font-size: 18px;
        }

        .my-card-button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .my-card-link a{
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        .my-card-button :hover, a:hover {
            opacity: 0.7;
        }
    </style>
    <div class="row">
        <div class="my-card">
            {{--<img src="/w3images/team2.jpg" alt="John" style="width:100%">--}}
            <h1>{{Auth::user()->name}}</h1>
            <p class="my-card-title">{{Auth::user()->level}}</p>
            <p>{{Auth::user()->email}}</p>
            <p><button class="my-card-button">Contact</button></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.create') }}" class="btn btn-success">New Post</a>
        </div>
    </div>
    @foreach($posts as $post)
        <hr>
        <div class="row">
            <div class="col-md-12">
                <p><strong>{{$post->title}}</strong>
                <p>{!! $post->body !!}</p>
                <div  style="margin-left: 83%">
                    <a href="{{route('admin.edit',['id'=>$post->id])}}"><button class="btn btn-outline-warning">Edit</button></a>
                    <a href="{{route('admin.delete',['id'=>$post->id])}}"><button class="btn btn-danger">Delete</button></a>
                </div>
                </p>

            </div>
        </div>
    @endforeach
@endsection