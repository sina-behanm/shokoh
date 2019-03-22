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
                  <li class="icon6"><a href="index.html">صفحه اصلی</a></li>
                <li class="current-page">درباره ما</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="features">
	   <div class="container">
	   	  <h1>چگونه ما را پیدا می کنید؟</h1>
	   	  <div class="map">
			 <!--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>-->
			  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2705.7306287808783!2d59.521538568227264!3d36.289253923321745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f6c925572d34419%3A0xe286bd18eb5e8bdd!2sEmarat+Hashtom+Shargh+Company!5e0!3m2!1sen!2s!4v1545923204809" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		  </div>
		  <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
		  <div class="wrapper">
				<div class="col_1">
					<i class="fa fa-home  icon2"></i>
					<div class="box">
						<p class="marTop9">لورم ایپسوم متن<br>لورم ایپسوم متن</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-phone  icon2"></i>
					<div class="box">
						<p class="marTop9"> 02188454816<br> 02188454816</p>
					</div>
				</div>

				<div class="col_2">
					<i class="fa fa-envelope icon2"></i>
					<div class="box">
						<p class="m_6"><a href="" class="link4">info@barnamenevisan.org</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
		 </div>
		 <form class="contact_form">
		 	<h2>فرم تماس با ما</h2>
			<div class="col-md-6 grid_6">
				<input type="text" class="text" value="نام" placeholder="نام" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
				<input type="text" class="text" value="ایمیل" placeholder="ایمیل" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
				<input type="text" class="text" value="تلفن" placeholder="تلفن" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
			</div>
	
			<div class="col-md-6 grid_6">
				<textarea value="Message" placeholder="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">پیام</textarea>
			</div>
            <div class="clearfix"> </div>
            <div class="btn_3">
			  <a href="#" class="more_btn" data-type="submit">ارسال پیام</a>
		    </div>
		 </form>
							
						
	  </div>
	</div>
	@endsection