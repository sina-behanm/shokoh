@extends('layouts.master')
@section('content')
    <style>
        .my-img
        {
            border-radius: 25px;
        }
    </style>
    <div class="courses_banner">
        <div class="container">
            <h3>جزییات دوره</h3>
            <p class="description">
                موسسه شکوه دانش توس .بیش از 4سال تجربه در اموزش و ارائ خدمات اموزشی توانسته قدم های چشمگیری را بردارد و امید وار است با بهرهمندی از تجربه اساتید برجسته بتوانیم در عرصه اموزش همانند دوره های گذشته موفق باشیم
            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href="index.html">صفحه اصلی</a></li>
                    <li class="current-page">جزییات دوره</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <div class="features">
        <div class="container">
            <h1>{{$course->course_name}}</h1>
                <div class="blog_box1">
                    <dl class="item_info_dl">
                        <h2 style="text-align: center">{{$course->course_title}}</h2>
                    </dl>
                   <img src='{{asset('images/course_images/'.$course->course_image_name)}}' class="my-img img-responsive" alt="{{$course->course_image_name}}"/>
                    <p>{!! $course->course_content !!}</p>
                </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection