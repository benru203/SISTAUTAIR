<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['prefix'=>'Administracion','middleware'=>'auth'],function(){

  Route::get('/',['as'=>'Administracion.index', function () {
		return view('Admin.Template.main');
	}]);


  Route::resource('Usuario','UserController');
  Route::get('Usuario/destroy/{id}',[
		'uses'=>'UserController@destroy',
		'as'=>'Administracion.Usuario.destroy'
	]);


  Route::resource('Bloque','BloqueController');
  Route::get('Bloque/destroy/{id}',[
		'uses'=>'BloqueController@destroy',
		'as'=>'Administracion.Bloque.destroy'
	]);

  Route::resource('Aula','AulaController');
  Route::get('Aula/destroy/{id}',[
    'uses'=>'AulaController@destroy',
    'as'=>'Administracion.Aula.destroy'
  ]);

  Route::resource('Aire','AireController');
  Route::get('Aire/destroy/{id}',[
    'uses'=>'AireController@destroy',
    'as'=>'Administracion.Aire.destroy'
  ]);


Route::resource('Horario','HorarioController');
Route::get('Horario/destroy/{id}',[
  'uses'=>'HorarioController@destroy',
  'as'=>'Administracion.Horario.destroy'
]);
});


Route::get('auth/login',[
  'uses'=> 'Auth\AuthController@getLogin',
   'as' =>'auth.login']
 );
 Route::post('auth/login',[
   'uses'=> 'Auth\AuthController@postLogin',
    'as' =>'auth.login']
);
Route::get('auth/logout',[
  'uses'=> 'Auth\AuthController@getLogout',
   'as' =>'auth.logout']
);
