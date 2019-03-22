@extends('layouts.master')
@section('content')
 <div class="courses_banner">
  	<div class="container">
  		<h3>ثبت نام</h3>
  		<p class="description">															موسسه شکوه دانش توس .بیش از 4سال تجربه در اموزش و ارائ خدمات اموزشی توانسته قدم های چشمگیری را بردارد و امید وار است با بهرهمندی از تجربه اساتید برجسته بتوانیم در عرصه اموزش همانند دوره های گذشته موفق باشیم

        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">صفحه اصلی</a></li>
                <li class="current-page">ثبت نام</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
    @include('partials.error')
    @if(Session::has('info'))
        <div class="row">
            <div class="col-md-12">
                <p class="alert alert-success">{{Session::get('info')}}</p>
            </div>
        </div>
    @endif
	<div class="courses_box1">
	   <div class="container">
	   	  <form class="login" action="{{route('blog.student.post')}}"  name="mainForm" method="post">
              @csrf
                <p class="lead">ثبت نام الگوی جدید</p>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="  نام و نام خانوادگی" name="name" value="">
                </div>
			    <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder=" فرزند" name="family_name" value="">
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="کد ملی" name="SSN" value="">
                </div>
			  	<div class="form-group">
					 <input type="text" autocomplete="off" class="required form-control" placeholder="شهر" name="city" value="">
			    </div>
                <div class="form-group">
                    <input type="text" class="required form-control" placeholder="شماره تلفن همراه" name="s_phone"  value="">
                </div>
                <div class="form-group">
                    <input type="text" class="required form-control" placeholder="شماره تلفن" name="phone"  value="">
                </div>
                <div class="form-group">
                    <input type="text" autocomplete="off" class="required form-control" placeholder="متولد سال" name="age" >
                </div>
                <div class="form-group">
                    <input type="email" autocomplete="off" class="required form-control" placeholder="ایمیل" name="email" value="">
                </div>
                <div class="form-group">
                    <input type="radio" name="gender" value="men" checked>مرد
                    <input type="radio" name="gender" value="women">زن
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-lg1 btn-block" name="register" value="ثبت نام">
                </div>
                <!--<p>آیا حساب کاربری دارید؟ <a href="login.html">ورود</a></p>-->
            </form>
	   </div>
	</div>
	<script language="javascript">
		function confrim_pass()
		{
			var age = document.forms["mainForm"]["age"].value;
			if(age > 1397 || age < 1340)
				{
					 alert("سن خود را باید عددی بیشتر از 1340 باشد");
					 return false;
				}
			else{
				return true;
			}
		}
	</script>
@endsection