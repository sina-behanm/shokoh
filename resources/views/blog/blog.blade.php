@extends('layouts.master')
@section('content')

<div class="courses_banner">
  	<div class="container">
  		<h3>اخبار</h3>
  		<p class="description">
			موسسه شکوه دانش توس .بیش از 4سال تجربه در اموزش و ارائ خدمات اموزشی توانسته قدم های چشمگیری را بردارد و امید وار است با بهرهمندی از تجربه اساتید برجسته بتوانیم در عرصه اموزش همانند دوره های گذشته موفق باشیم
        </p>
        <div class="breadcrumb1">
            <ul>
                <li class="icon6"><a href="index.html">صفحه اصلی</a></li>
                <li class="current-page">اخبار</li>
            </ul>
        </div>
  	</div>
  </div>
    <!-- //banner -->
	<div class="features">
	   <div class="container">
	   	  <h1>اخبار</h1>
		   @foreach($posts as $post)
			   <div class="blog_box1">
				   <dl class="item_info_dl">
					   <h2><a href="{{route('blog.course_detail' , ['id' => $post->id])}}">{{ $post->title }}</a></h2>
					   <dd>
						   <address class="item_createdby">
							   Posted by Super <a href="{{route('blog.course_detail' , ['id' => $post->id])}}">User</a>
						   </address>
					   </dd>
					   <dd>
						   <time datetime="2015-05-01 19:45" class="item_published">
							   on 08 Dec 2015			</time>
					   </dd>
					   <dd>
		      <span class="comment">
		        <a href="#"></a>
	          </span>
						   <p style="font-family: Yekan">
							   @foreach($post->tags as $tag)
								   #{{$tag->name}}
							   @endforeach
						   </p>
					   </dd>
				   </dl>
				   <a href="{{route('blog.course_detail' , ['id' => $post->id])}}"><img src="images/postimages/{{$post->image_name}}" class="img-responsive" alt=""/></a>
				   <p>{!! $post->body !!}</p>
				   <a href="{{route('blog.course_detail' , ['id' => $post->id])}}" class="radial_but">Read More</a>
			   </div>
			@endforeach
	    <div class="blog_box1">
	   	   <dl class="item_info_dl">
	   	   	<h2><a href="course_detail.html">At vero eos et accusamus et iusto odio dignissimos</a></h2>
		    <dd>
				<address class="item_createdby">
					Posted by Super <a href="course_detail.html">User</a>			
				</address>
			</dd>
			<dd>
		       <time datetime="2015-05-01 19:45" class="item_published">
			    on 08 Dec 2015			</time>
	        </dd>
			<dd>
		      <span class="comment">
		        <a href="#">0</a>
	          </span>
	       </dd>
		 </dl>
		 <a href="course_detail.html"><img src="images/b3.jpg" class="img-responsive" alt=""/></a>
		 <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.?"</p>
	     <a href="course_detail.html" class="radial_but">Read More</a>
	    </div>
	    <div class="blog_box2">
	   	   <dl class="item_info_dl">
	   	   	<h2><a href="course_detail.html">At vero eos et accusamus et iusto odio dignissimos</a></h2>
		    <dd>
				<address class="item_createdby">
					Posted by Super <a href="course_detail.html">User</a>			
				</address>
			</dd>
			<dd>
		       <time datetime="2015-05-01 19:45" class="item_published">
			    on 08 Dec 2015			</time>
	        </dd>
			<dd>
		      <span class="comment">
		        <a href="#">0</a>
	          </span>
	       </dd>
		 </dl>
		 <a href="course_detail.html"><img src="images/b1.jpg" class="img-responsive" alt=""/></a>
		 <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.?"</p>
	     <a href="course_detail.html" class="radial_but">Read More</a>
	    </div>
	  </div>
	</div>
@endsection