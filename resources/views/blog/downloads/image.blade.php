@extends('layouts.master')
@section('content')
    <style>
        .overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100%;
            width: 100%;
            opacity: 0;
            transition: .5s ease;
            background-color: #008CBA;
        }

        .my-overlay-content:hover .overlay {
            opacity: 0.8;
        }

        .mytext {
            color: white;
            font-size: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            text-align: center;
        }
    </style>
    <div class="row">
        <div class="col-md-12">

            <div id="mdb-lightbox-ui"></div>

            <div class="mdb-lightbox no-margin">

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(121).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(121).jpg"
                             class="img-fluid img-responsive ">
                        <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(96).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(96).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(104).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(104).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(45).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(45).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(122).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(122).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(125).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(125).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                <figure class="col-md-4 my-overlay-content">
                    <a class="black-text" href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(119).jpg"
                       data-size="1600x1067">
                        <img alt="picture" src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(119).jpg"
                             class="img-fluid img-responsive" />
                         <div class="overlay">
                            <div class="mytext">Hello World</div>
                        </div>
                    </a>
                </figure>

                @foreach($images as $image)
                    <figure class="col-md-4 my-overlay-content">
                        <a class="black-text" href="{{route('downloads.file.image',['id' => $image->id])}}"
                           data-size="1600x1067">
                            <img alt="{{$image->name}}" src="images/{{$image->file_name}}"
                                 class="img-fluid img-responsive" />
                            <div class="overlay">
                                <div class="mytext">{{$image->name}}</div>
                            </div>
                        </a>
                    </figure>
                @endforeach
            </div>

        </div>
    </div>
    {{--<script>--}}
        {{--// MDB Lightbox Init--}}
        {{--$(function () {--}}
            {{--$("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");--}}
        {{--});--}}
    {{--</script>--}}
@endsection