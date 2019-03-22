@extends('layouts.admin')
@section('content')
    @include('partials.error')
    <div class="container">
        <h2>Here Your SubCourse Panel Controller :</h2><br>
        <h3>
            You Are Adding new SubCourse from <strong class="text-primary">{{$course->name}}</strong> that is include by <strong class="text-danger"> {{$course->grade}} </strong> grade.
        </h3>
        <form href="{{route('admin.create.sub_course',['id' => $course->id])}}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="course_name">NAME :</label>
                <input name="course_name" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="course_title">Title or Book Name :</label>
                <input name="course_title" class="form-control" type="text">
            </div>
            <div class="form-group">
                <label for="course_content">Content and Explanation</label>
                <textarea name="course_content" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="course_image_name">Course Image</label>
                <input name="course_image_name" class="form-control-file" type="file">
            </div><br>
            <button type="submit" class="btn btn-primary">Add Sub Course</button>
        </form>
        <br>
       <a href="{{route('admin.delete.course',['id' => $course->id])}}"><button class="btn btn-danger">Delete This Course</button></a>
        <hr>
        <br>

            <h2>List of <strong class="text-primary">{{$course->name}} </strong>  :</h2>
            <ul class="list-group">
                @foreach($sub_courses as $sub)
                    <li class="list-group-item"><strong class="text-danger" >{{$sub->course_name}}</strong>
                        <span class="badge">{{$sub->course_title}}</span>
                    </li><a href="{{route('admin.delete.sub_course',['id'=>$sub->id])}}"><button class="btn btn-danger" >Delete</button></a><br>
                @endforeach
            </ul>
        <br>
    </div>
@endsection