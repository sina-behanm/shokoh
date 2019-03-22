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
			<!--<div class="courses_box1-right">
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

                 <div class="select-block1">
                    <select>
                        <option value="">مدت زمان</option>
                        <option value="">مدت زمان</option>
                        <option value="">مدت زمان</option>
                        <option value="">مدت زمان</option>
                        <option value="">مدت زمان</option>
                    </select>
                </div>

                <div class="select-block1">
                    <select>
                        <option value="">سطح</option>
                        <option value="">سطح</option>
                        <option value="">سطح</option>
                        <option value="">سطح</option>
                        <option value="">سطح</option>
                    </select>
                </div>

                <div class="select-block1">
                    <select>
                        <option value="">موقعیت</option>
                        <option value="">موقعیت</option>
                        <option value="">موقعیت</option>
                        <option value="">موقعیت</option>
                        <option value="">موقعیت</option>
                    </select>
                </div>

                <input type="submit" value="جستجو" class="course-submit">		                            
            </form>
	       </div>-->
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
           <!--<section class="slider">
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
	      <!--<ul class="posts">
	      	<h3>پست های جدید</h3>
			<li>
				<article class="entry-item">
					<div class="entry-thumb pull-right">
						<img src="images/t17.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="entry-content">
						<h6><a href="#">منتشر شده</a></h6>
						<p><a href="#">مدیر</a> &nbsp;/&nbsp; 30 Dec 2015</p>
					</div>
					<div class="clearfix"> </div>
				</article>
			</li>
			<li>
				<article class="entry-item">
					<div class="entry-thumb pull-right">
						<img src="images/t7.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="entry-content">
					<h6><a href="#">منتشر شده</a></h6>
						<p><a href="#">مدیر</a> &nbsp;/&nbsp; 30 Dec 2015</p>
					</div>
					<div class="clearfix"> </div>
				</article>
			</li>
			<li>
				<article class="entry-item">
					<div class="entry-thumb pull-right">
						<img src="images/t16.jpg" class="img-responsive" alt=""/>
					</div>
					<div class="entry-content">
						<h6><a href="#">منتشر شده</a></h6>
						<p><a href="#">مدیر</a> &nbsp;/&nbsp; 30 Dec 2015</p>
					</div>
					<div class="clearfix"> </div>
				</article>
		    </li>
         </ul>-->
		</div>
		<div class="col-md-9 detail">
			<a href="#"><img src="{{asset('images/postimages/'.$post->image_name)}}" style="border-radius: 25px"  class="img-responsive" alt=""/></a>
			<h3 style="text-align: center">{{$post->title}}</h3>
			<p>{!! $post->body !!}</p>
			<!--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <i class="fa fa-bookmark-o icon_3"></i>لورم ایپسوم متن ساختگی
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                        <div class="panel-body">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-pencil-square-o icon_3"></i>لورم ایپسوم متن ساختگی
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                        <div class="panel-body">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-comments-o icon_3"></i>لورم ایپسوم متن ساختگی
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                       <div class="panel-body">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-clock-o icon_3"></i>لورم ایپسوم متن ساختگی
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false" style="height: 0px;">
                          <div class="panel-body">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد
                        </div>
                    </div>
                </div>
              </div>
              <div class="author-box">
                  <div class="author-box-right"><img src="images/t13.png" class="img-responsive" alt=""/></div>
				  <div class="author-box-left">		
					<h4>نویسنده<a href="#">مدیر</a></h4>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
				  </div>
				  <div class="clearfix"> </div>
			 </div>-->
			 <div class="comment_section">
			 	<h4>{{count($comments)}} نظر</h4>
			 	<ul class="comment-list">
					@foreach($comments as $comment)
                   <li>
				     <div class="author-box">
				       <div class="author-box_right"><img src="images/t13.png" class="img-responsive" alt=""/></div>
				       <div class="author-box_left">
				        <h5>{{$comment->comment_name}}</h5>
			            <span class="m_1"></span>
			            <p>{{$comment->comment_content}}</p>
				      </div> 
				      <div class="clearfix"> </div>
				     </div>
				  </li>
					@endforeach
                  <li>
				     <div class="author-box">
				       <div class="author-box_right"><img src="images/author.png" class="img-responsive" alt=""/></div>
				       <div class="author-box_left">
				       <h5><a href="#">مدیر</a><span class="pull-left"><a class="comment-reply-link" href="#">پاسخ</a></span></h5>
			            <span class="m_1">Jul 07, 2015 - 4:48 am Nov 15, 2015 - 08:07 pm</span>
			            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
				
				      </div> 
				      <div class="clearfix"> </div>
				     </div>
				  </li>
                  <ul class="children">
                    <li>
				     <div class="author-box">
				       <div class="author-box_right"><img src="images/author.png" class="img-responsive" alt=""/></div>
				       <div class="author-box_left">
				         <h5><a href="#">مدیر</a><span class="pull-left"><a class="comment-reply-link" href="#">پاسخ</a></span></h5>
			            <span class="m_1">Jul 07, 2015 - 4:48 am Nov 15, 2015 - 08:07 pm</span>
			            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </p>
				
				      </div> 
				      <div class="clearfix"> </div>
				     </div>
				  </li>
				</ul>
              </ul>
			 </div>
			 <form action="{{route('blog.post.comment')}}" method="POST" class="comment-form">
				 @csrf
				 <input type="hidden" name="post_id" value="{{$post->id}}">
			 	<h4>نظر گذاشتن</h4>
				  <div class="col-md-6 comment-form-right">
					<input type="text" placeholder="نام" value="" id="author" name="name" class="form-control">
	                <input type="text" class="form-control" placeholder="ایمیل" value="" id="email" name="email">
	              </div>
				  <div class="col-md-6 comment-form-left">
					<textarea name="content" aria-required="true" id="comment" class="form-control" placeholder="نظر"></textarea>
				  </div>
				  <div class="clearfix"> </div>						
				  <div class="form-submit">
				  	<input name="submit" type="submit" id="submit" class="submit_1 btn btn-primary btn-block" value="ثبت"> 
				  </div>	  
           </form>
		  </div>
		  <div class="clearfix"> </div>
	   </div>
	</div>
@endsection