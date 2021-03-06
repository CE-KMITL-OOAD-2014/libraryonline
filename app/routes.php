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


// 	Route::group(['before' => 'force.ssl', function()
// {



Route::get('/home', 'showController@updatelist');   

Route::get('/howto', function() {
return View::make("howto");
});   

Route::get('/', function() {
return Redirect::to('/firstpage'); 
});    

 Route::get('/request', 'buyController@showrequest' );

 Route::get('/accept/{userid}/{bookid}', 'buyController@addkey' );

 Route::get('/canclereq/{userid}/{bookid}', 'buyController@canclereq' );

Route::get('/cata/{id}','searchController@searchtypebook' );  

Route::get('/showbook/{id}','showController@bookcontext' );  

Route::get('/buybook/{id}','buyController@buybook' ); 

Route::get('/finance/{id}', 'buyController@showfinance' );

Route::get('/manage', 'showController@ownbooklist');

Route::get('/delete/{id}', 'BookController@deletee');

Route::get('/edit/{id}', 'BookController@postedit');

Route::post('/comment/{id}', 'CommentController@postcomment');

Route::get('/create', 'BookController@getcreate');
Route::post('/create', 'BookController@postcreate');

Route::get('/firstpage', 'UserController@firstpage');
Route::post('/firstpage', 'UserController@signin');

Route::get('/signup', 'UserController@getsignup');
Route::post('/signup', 'UserController@postsignup');

Route::get('/signout', 'UserController@signout');

Route::get('/search', 'searchController@search');


Route::get('/setting','UserController@getsetting');
Route::post('/setting','UserController@postsetting');

// }


