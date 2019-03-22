<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PostController@getIndexPostOfBlog')->name('blog.index');

Route::post('/student_register','StudentController@postStudent')->name('blog.student.post');

Route::get('/about', function () {
	return view('blog.about');
})->name('blog.about');

Route::get('/contact', function () {
	return view('blog.contact');
})->name('blog.contact');

Route::get('/student_register', function () {
	return view('blog.register');
})->name('blog.register');

Route::get('/blog','PostController@getBlogIndex')->name('blog.blog');

//Route::get('/course','PostController@getSidePost')->name('blog.courses');

Route::get('/course/kid','CoursesController@getKidCourseIndex')->name('blog.kid.courses');
Route::get('/course/adult','CoursesController@getAdultCourseIndex')->name('blog.adult.courses');

Route::get('/sub_course/{id}','CoursesController@getSubCourse')->name('blog.sub_course');

Route::get('/courses/{id}','PostController@getPost')->name('blog.course_detail');
Route::post('/course_detail/comment','PostController@postCommentPost')->name('blog.post.comment');

//Route::get('/course_content/{id}','CoursesController@getCourse')->name('blog.course.content');

//downloads pages
Route::get('/download',function (){
    return view('blog.index_download');
});
Route::group(['prefix' => 'downloads'],function() {
   Route::get('',function (){return view('blog.downloads.index');})->name('blog.downloads');
   //----------------pdf---------------------
    Route::group(['prefix' => 'pdf'],function () {
       Route::get('','DownloadController@getPdf')->name('blog.downloads.pdf');
       Route::get('file/{id}','DownloadController@getPdfFile')->name('downloads.file.pdf');
    });
    //--------------image--------------------
    Route::group(['prefix' => 'image'],function () {
        Route::get('','DownloadController@getImage')->name('blog.downloads.image');
        Route::get('file/{id}','DownloadController@getImageFile')->name('downloads.file.image');
    });
});
//admin Routing

Route::group(['prefix' => 'admin','middleware' => ['auth']],function (){
    Route::get('','PostController@getAdminIndex')->name('admin.index');
    Route::get('create','PostController@getAdminCreate')->name('admin.create');
    Route::post('create','PostController@postAdminCreate')->name('admin.create');
    Route::get('delete/{id}','PostController@getAdminDelete')->name('admin.delete');
    Route::get('edit/{id}','PostController@getAdminEdit')->name('admin.edit');
    Route::post('edit','PostController@postAdminEdit')->name('admin.update');
    Route::get('student','StudentController@getStudent')->name('admin.student');
    //
    Route::group(['prefix'=>'index'],function (){
        Route::get('','IndexController@getAdminIndexBanner')->name('admin.index.banner');
        Route::post('create','IndexController@postAdminCreateBanner')->name('admin.create.index.banner');
        Route::post('bottom_create','IndexController@postAdminCreateBottomContent')->name('admin.create.index.bottom');
        Route::get('deleteBottom/{id}','IndexController@getBottomDelete')->name('admin.delete.index.bottom');
    });
    Route::group(['prefix'=>'courses'],function (){
       Route::get('','CoursesController@getAdminCourses')->name('admin.courses');
       Route::get('delete/{id}','CoursesController@getAdminDeleteCourse')->name('admin.delete.course');
       Route::post('create','CoursesController@postAdminCreateCourse')->name('admin.create.course');
       Route::get('/sub_courses/{id}','CoursesController@getAdminSubCourse')->name('admin.sub_course');
       Route::post('/sub_courses/{id}','CoursesController@postAdminCreateSubCourses')->name('admin.create.sub_course');
       Route::get('/sub_course/delete/{id}','CoursesController@getAdminDeleteSubCourse')->name('admin.delete.sub_course');
    });
    //----downloads----//
    Route::group(['prefix' => 'downloads'],function (){
        Route::get('','DownloadController@getAdminIndex')->name('admin.downloads.index');
        //----------------------pdf-----------------------
       Route::group(['prefix' => 'pdf'] ,function () {
         Route::get('admin_pdf','DownloadController@getAdminPdf')->name('admin.downloads.pdf');
         Route::post('create','DownloadController@postAdminCreatePdf')->name('admin.create.downloads.pdf');
         Route::get('file_delete/{id}','DownloadController@getAdminPdfDelete')->name('admin.delete.downloads.pdf');
       });
        //---------------------image-----------------------
        Route::group(['prefix' => 'image'] ,function () {
            Route::get('admin_image','DownloadController@getAdminImage')->name('admin.downloads.image');
            Route::post('create','DownloadController@postAdminCreateImage')->name('admin.create.downloads.image');
            Route::get('file_delete/{id}','DownloadController@getAdminImageDelete')->name('admin.delete.downloads.image');
        });
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
