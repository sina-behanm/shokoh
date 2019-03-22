@extends('layouts.admin')
@section('content')
@include('partials.error')
<style>
    p {
        width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    th {
        text-align: center;
    }
    td
    {
        text-align: center;
    }
    .my-style {
        background-color: #00ACED;
        border-radius: 10px;
        height: 71px;
        position: relative;
        text-align: center;
        width: 150px;
        margin-top: 10px;
        margin-left: 10px;
        bottom: 8px;
    }
    .my-style:hover {
      background-color: #0000ee;
      cursor: pointer;
    }
    .my-style h3 {
        position: absolute;
        font-size: 35px;
        color: white;
        left: 50%;
        transform: translateX(-50%);
    }
</style>
    <div class="container">
        <form action="{{route('admin.create.course')}}" method="post">
            @csrf
            <div class="form-group">
                <lable for="name">Name</lable>
                <input class="form-control" name="name" type="text">
            </div>
            <div class="form-group">
                <label for="grade">Kind of grade : </label>
                <input type="radio" name="grade" value="kid"> Kids
                <input type="radio" name="grade" value="adult"> Adult
            </div>
            <button type="submit" class="btn btn-primary" >Add Course</button>
        </form>
        <br>
        <br>
        <br>
        <hr>
        <br>
        <div class="container">
            <h2>Courses list</h2>
            <br>
            <hr>
            <br>
            <h3>Kids Courses list:</h3>
            <div class="row">
                @foreach($kid_courses as $kid)
                  <a href="{{route('admin.sub_course',['id'=>$kid->id])}}"><div class="col col-md-6 my-style"><h3>{{$kid->name}}</h3></div></a>
                @endforeach
            </div>
            <br>
            <hr>
            <br>
            <h3>Adult Courses list:</h3>
            <div class="row">
                @foreach($adult_courses as $adult)
                   <a href="{{route('admin.sub_course',['id'=>$adult->id])}}"><div class="col col-md-6 my-style"><h3>{{$adult->name}}</h3></div></a>
                @endforeach
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
@endsection