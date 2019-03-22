@extends('layouts.master')
@section('content')
    <style>
        .myimg{
            max-height: 500px;
        }
    </style>
    <div class="courses_banner">
        <div class="container">
            <h3>اخبار</h3>
            <p class="description">
                موسسه شکوه دانش توس .بیش از 4سال تجربه در اموزش و ارائ خدمات اموزشی توانسته قدم های چشمگیری را بردارد و امید وار است با بهرهمندی از تجربه اساتید برجسته بتوانیم در عرصه اموزش همانند دوره های گذشته موفق باشیم
            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href="index.html">صفحه اصلی</a></li>
                    <li class="current-page">دانلود کده</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <br>
        <br>
        <div id="pdf" class="card mb-3 text-center margin-top hideme">
          <a href="{{route('blog.downloads.pdf')}}"><img class="myimg card-img-top img-rounded img-responsive center-block" src="images/download_images/pdf.png" alt="Card image cap"></a>
            <div class="card-body jumbotron">
                <h1 class="card-title">Card title</h1>
                <p class="card-text"><h3>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h3></p>
                <a href="{{route('blog.download.pdf')}}" class="radial_but" style="border-radius: 6px;">Go somewhere</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div id="word" class="card mb-3 text-center margin-top hideme">
           <a href="#"><img class="myimg card-img-top img-rounded img-responsive center-block" src="images/download_images/word.png" alt="Card image cap"></a>
            <div class="card-body jumbotron">
                <h1 class="card-title">Card title</h1>
                <p class="card-text"><h3>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h3></p>
                <a href="#" class="radial_but" style="border-radius: 6px;">Go somewhere</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div id="xls" class="card mb-3 text-center margin-top hideme">
            <a href="#"><img class="myimg card-img-top img-rounded img-responsive center-block" src="images/download_images/xls.png" alt="Card image cap"></a>
            <div class="card-body jumbotron">
                <h1 class="card-title">Card title</h1>
                <p class="card-text"><h3>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h3></p>
                <a href="#" class="radial_but" style="border-radius: 6px;">Go somewhere</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>

        <div id="video" class="card mb-3 text-center margin-top hideme">
           <a href="#"><img class="myimg card-img-top img-rounded img-responsive center-block" src="images/download_images/video.png" alt="Card image cap"></a>
            <div class="card-body jumbotron">
                <h1 class="card-title">Card title</h1>
                <p class="card-text"><h3>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h3></p>
                <a href="#" class="radial_but" style="border-radius: 6px;">Go somewhere</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>


        <div id="image" class="card mb-3 text-center margin-top hideme">
            <a href="#"><img class="myimg card-img-top img-rounded img-responsive center-block" src="images/download_images/images-icon.png" alt="Card image cap"></a><br>
            <div class="card-body jumbotron">
                <h1 class="card-title">Card title</h1>
                <p class="card-text"><h3>This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</h3></p>
                <a href="{{route('blog.downloads.image')}}" class="radial_but" style="border-radius: 6px;">Go somewhere</a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    </div>
    <script>

        $(document).ready(function(){

            /*! Fades in page on load */
            $('.hideme').css('display', 'none');
            $('#pdf').fadeIn(2200);
            $('#word').fadeIn(3200);
            $('#xls').fadeIn(4200);
            $('#video').fadeIn(5200);
            $('#image').fadeIn(5200);

        });
    </script>
@endsection