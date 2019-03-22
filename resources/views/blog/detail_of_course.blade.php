@extends('layouts.master')
@section('content')
    <div class="courses_banner">
        <div class="container">
            <h3>تماس با ما</h3>
            <p class="description">
                موسسه شکوه دانش توس .بیش از 4سال تجربه در اموزش و ارائ خدمات اموزشی توانسته قدم های چشمگیری را بردارد و امید وار است با بهرهمندی از تجربه اساتید برجسته بتوانیم در عرصه اموزش همانند دوره های گذشته موفق باشیم

            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href='{{URL::to('/')}}'>صفحه اصلی</a></li>
                    <li class="current-page"><a href='{{URL::to('blog.course')}}'>دوره ها</a> با جزییات دوره ها</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <div class="courses_box1">
        <div class="container">
            <div class="col-md-3">

                <div class="personBox">
                    <div class="personBox_1">
                        <div class="person_image">
                            <img src="images/t13.png" class="img-responsive" alt=""/>
                        </div>
                        <div class="person_image_desc">
                            <h1>لورم ایپسوم</h1>
                            <p>لورم ایپسوم</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="person_description">
                        <p>
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. <a href="#">ادامه مطالعه</a>
                        </p>
                    </div>
                </div>
                <div class="social-widget">
                    <h2>ارتباط با ما</h2>
                    <ul class="courses_social">
                        <li class="facebook-icon">
                            <div>
                                <a href="#" class="fa fa-facebook"></a>
                                <p>2154</p>
                            </div>
                        </li>
                        <li class="twitter-icon">
                            <div>
                                <a href="#" class="fa fa-twitter"></a>
                                <p>1425</p>
                            </div>
                        </li>
                        <li class="gplus-icon">
                            <div>
                                <a href="#" class="fa fa-google-plus"></a>
                                <p>2150</p>
                            </div>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>

            </div>
            <div class="col-md-9 detail">
                <h3>{{$course->name}}</h3>
                <p>{{$course->content}}</p>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection