<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/',array('before'=>'auth',function(){

// 	return 'test';
// }));

// Route::get('/', function(){

// 	// $test=new User;
// 	// $test->setName('somdam');
// 	// $test->setpassword('ghjkl;ddd');
// 	// $test->setfinance('wertyuio');
// 	// $test->newUser();

// 	// $test=new Book;
// 	// $test->setName('abcd');
// 	// $test->setWriterID(1);
// 	// $test->setisPublic(true);
// 	// $test->setbookDetail('dfvghjklkjhgfcdcfvghjkl,mnbvcdfghjmnbghjmnbhjkmnhjklkmjnbvcdfghj');
// 	// $test->setbookContext('sdfghjkl;lkjhgfdsdfghjklkjhgfdfghjkl;lkjhgfghjklkjh');
// 	// $test->setbookPrice(700);
// 	// $test->setbookType(1);
// 	// $test->newBook();

// 	return 'eiei' ;
// });

Route::get('/', 'BookController@test' );

Route::get('/home', function() {
return View::make("home");
});   

Route::get('/howto', function() {
return View::make("howto");
});   

Route::get('/c1', function() {
return View::make("c1");
});   

Route::get('/c2', function() {
return View::make("c2");
});  

Route::get('/c3', function() {
return View::make("c3");
});  

Route::get('/c4', function() {
return View::make("c4");
});  

Route::get('/c5', function() {
return View::make("c5");
});  

Route::get('/c6', function() {
return View::make("c6");
});  

Route::get('/c7', function() {
return View::make("c7");
});  

Route::get('/c8', function() {
return View::make("c8");
});  

Route::get('/c9', function() {
return View::make("c9");
});  

Route::get('/c10', function() {
return View::make("c10");
});

Route::get('/manage', function() {
return View::make("manage");
});

Route::get('/delete', 'BookController@deletee');

Route::post('/edit', 'BookController@postedit');

Route::get('/create', 'BookController@getcreate');
Route::post('/create', 'BookController@postcreate');

Route::get('/firstpage', 'UserController@firstpage');
Route::post('/firstpage', 'UserController@signin');

Route::get('/signup', 'UserController@getsignup');


Route::get('/setting','UserController@setting');

//Route::post('/', 'CommentController@postComments'); 

