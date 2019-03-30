@extends('layouts.admin')
@section('content')
 @include('partials.error')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostController@postAdminCreate', 'method' => 'POST' ,'enctype'=> 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' => 'form-control' , 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['id'=> 'article-ckeditor','class' => 'form-control' , 'placeholder' => 'Body'])}}
    </div>
    <div class="form-group">
        {{Form::label('content','Content')}}
        {{Form::textarea('content','',['id'=> 'article-ckeditor','class' => 'form-control' , 'placeholder' => 'content'])}}
    </div>
    <div class="form-group">
        {{Form::label('image','Image')}}
        {{Form::file('image')}}
    </div>
    <div class="form-group">
        @foreach($tags as $tag)
            <div class="checkbox">
                <lable>
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                    {{$tag->name}}
                </lable>
            </div>
        @endforeach
    </div>
     {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection