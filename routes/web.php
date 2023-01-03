<?php

//->middleware('auth);

//user route
Route::get('/', 'MyController@getIndex');
Route::get('/index', 'MyController@getIndex');
Route::get('/contact', 'MyController@getContact');
Route::get('/about', 'MyController@getAbout');
Route::get('/blog', 'MyController@getBlog');
Route::get('/course', 'MyController@getCourse');
Route::get('/teacher', 'MyController@getTeacher');
Route::post('/searchCourse', 'MyController@getSearch');

Route::group(['middleware' => 'auth'], function () {
//admin route for course
Route::get('/dashboard', 'CourseController@indexCourse');
Route::post('/storeCourse', 'CourseController@storeCourse');
Route::get('/createCourse', 'CourseController@createCourse');
Route::post('/updateCourse', 'CourseController@updateCourse');
Route::get('/editCourse/{id}', 'CourseController@editCourse');
Route::get('/deleteCourse/{id}', 'CourseController@deleteCourse');
Route::get('/restoreCourse/{id}', 'CourseController@restoreCourse');

//admin route for teacher 
Route::get('/indexTeacher', 'TeacherController@indexTeacher');
Route::post('/storeTeacher', 'TeacherController@storeTeacher');
Route::get('/createTeacher', 'TeacherController@createTeacher');
Route::post('/updateTeacher', 'TeacherController@updateTeacher');
Route::get('/editTeacher/{id}', 'TeacherController@editTeacher');
Route::get('/deleteTeacher/{id}', 'TeacherController@deleteTeacher');
Route::get('/restoreTeacher/{id}', 'TeacherController@restoreTeacher');

//admin route for blog
Route::get('/indexBlog', 'BlogController@indexBlog');
Route::post('/storeBlog', 'BlogController@storeBlog');
Route::get('/createBlog', 'BlogController@createBlog');
Route::post('/updateBlog', 'BlogController@updateBlog');
Route::get('/editBlog/{id}', 'BlogController@editBlog');
Route::get('/deleteBlog/{id}', 'BlogController@deleteBlog');
Route::get('/restoreBlog/{id}', 'BlogController@restoreBlog');

//admin route for feedback
Route::get('/indexFeedback', 'FeedbackController@indexFeedback');
Route::post('/storeFeedback', 'FeedbackController@storeFeedback');
Route::get('/createFeedback', 'FeedbackController@createFeedback');
Route::get('/editFeedback/{id}', 'FeedbackController@editFeedback');
Route::post('/updateFeedback', 'FeedbackController@updateFeedback');
Route::get('/deleteFeedback/{id}', 'FeedbackController@deleteFeedback');
Route::get('/restoreFeedback/{id}', 'FeedbackController@restoreFeedback');

//admin route for category
Route::get('/indexCategory', 'CategoryController@indexCategory');
Route::post('/storeCategory', 'CategoryController@storeCategory');
Route::get('/createCategory', 'CategoryController@createCategory');
Route::get('/editCategory/{id}', 'CategoryController@editCategory');
Route::post('/updateCategory', 'CategoryController@updateCategory');
Route::get('/deleteCategory/{id}', 'CategoryController@deleteCategory');
Route::get('/restoreCategory/{id}', 'CategoryController@restoreCategory');

//admin route for contact
Route::get('/indexContact', 'ContactController@indexContact');
Route::post('/storeContact', 'ContactController@storeContact');
Route::get('/deleteContact/{id}', 'ContactController@deleteContact');
Route::get('/restoreContact/{id}', 'ContactController@restoreContact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

