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

Route::get('/', array('uses'=>'HostingController@index'));
Route::get('/test',function(){
//return CpanelWhm::listpkgs(["api.version" =>1]);
return CpanelWhm::accountsummary(["user" =>"bitrix"]);
});

Route::get('/sendmail',function(){
	$data = array();
	Mail::send('emails.welcome', $data, function ($message) {
    	$message->subject('WHM - Hosting');
    	$message->from('server@renzocarpio.com', 'Hosting');
    	$message->to('me@renzocarpio.com'); //->cc('bar@example.com');
	});	
});