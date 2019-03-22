@extends('layouts.master')
@section('content')
    <style>
        th {
            text-align: center;
        }
        td
        {
            text-align: center;
        }
    </style>
    <div class="courses_banner">
        <div class="container">
            <h3>تماس با ما</h3>
            <p class="description">
                موسسه شکوه دانش توس .بیش از 4سال تجربه در اموزش و ارائ خدمات اموزشی توانسته قدم های چشمگیری را بردارد و امید وار است با بهرهمندی از تجربه اساتید برجسته بتوانیم در عرصه اموزش همانند دوره های گذشته موفق باشیم

            </p>
            <div class="breadcrumb1">
                <ul>
                    <li class="icon6"><a href='{{URL::to('/')}}'>صفحه اصلی</a></li>
                    <li class="current-page">درباره ما</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- //banner -->
    <div class="courses_box1">
        <div class="container">
            <div class="col-md-3">
                <div class="courses_box1-right">
                    <form>
                        <div class="select-block1">
                            <select>
                                <option value="">انضباط</option>
                                <option value="">انضباط</option>
                                <option value="">انضباط</option>
                                <option value="">انضباط</option>
                                <option value="">انضباط</option>
                            </select>
                        </div>
                        <!-- select-block -->
                        <div class="select-block1">
                            <select>
                                <option value="">مدت زمان</option>
                                <option value="">مدت زمان</option>
                                <option value="">مدت زمان</option>
                                <option value="">مدت زمان</option>
                                <option value="">مدت زمان</option>
                            </select>
                        </div>
                        <!-- select-block -->
                        <div class="select-block1">
                            <select>
                                <option value="">سطح</option>
                                <option value="">سطح</option>
                                <option value="">سطح</option>
                                <option value="">سطح</option>
                                <option value="">سطح</option>
                            </select>
                        </div>
                        <!-- select-block -->
                        <div class="select-block1">
                            <select>
                                <option value="">موقعیت</option>
                                <option value="">موقعیت</option>
                                <option value="">موقعیت</option>
                                <option value="">موقعیت</option>
                                <option value="">موقعیت</option>
                            </select>
                        </div>
                        <!-- select-block -->
                        <input type="submit" value="جستجو" class="course-submit">
                    </form>
                </div>
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
                <!-- <section class="slider">
                      <h3>گواهی نامه</h3>
                      <div class="flexslider">
                          <ul class="slides">
                              <li>
                                  <div class="banner-info1">
                                     <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                     <h5><a href="#">لورم ,</a>لورم ایپسوم 2015</h5>
                                  </div>
                              </li>
                              <li>
                                  <div class="banner-info1">
                                     <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                     <h5><a href="#">لورم ,</a>لورم ایپسوم 2015</h5>
                                  </div>
                              </li>
                              <li>
                                  <div class="banner-info1">
                                      <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                                     <h5><a href="#">لورم ,</a>لورم ایپسوم 2015</h5>
                                  </div>
                              </li>
                          </ul>
                       </div>
                </section>-->
                {{--<ul class="posts">--}}
                    {{--<h3>پست های جدید</h3>--}}
                    {{--@foreach($posts as $post)--}}
                        {{--<li>--}}
                            {{--<article class="entry-item">--}}
                                {{--<div class="entry-thumb pull-right">--}}
                                    {{--<img src="images/postimages/{{$post->image_name}}" class="img-responsive" alt=""/>--}}
                                {{--</div>--}}
                                {{--<div class="entry-content">--}}
                                    {{--<h6><a href="{{route('blog.course_detail',['id'=>$post->id])}}">{!! $post->title !!}</a></h6>--}}
                                    {{--<p><a href="#"></a> {{$post->created_at}}</p>--}}
                                {{--</div>--}}
                                {{--<div class="clearfix"> </div>--}}
                            {{--</article>--}}
                        {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
            </div>
            <div class="col-md-9">
                <h2 style="color: red">لیست فایل های pdf:</h2>
                <hr>
                <br>
                <table class="table table-striped">
                    <thead>

                    <tr>
                        <th>شماره</th>
                        <th>نام</th>
                        <th>مطالب</th>
                        <th>حجم فایل</th>
                        <th>  </th>
                    </tr>

                    </thead>
                    <tbody>
                    @foreach($pdfs as $pdf)
                        <tr>
                            <td>{{$pdf->id}}</td>
                            <td>{{$pdf->name}}</td>
                            <td>{{$pdf->concept}}</td>
                            <td>{{number_format(($pdf->file_size/1024),2)}}kb</td>
                            <td><button class="btn btn-outline-info" ><a href="{{route('downloads.file.pdf',['id' => $pdf->id])}}">دانلود</a></button></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection