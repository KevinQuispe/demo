<?php

Route::get('/', function () {
    return view('welcome');
});
  //RUTA CON NOMBRE
  Route::group(['middelware'=> ['web']],function (){
  Route::get('panel', 'Desktop\AdministratorController@panel');
  Route::get('access', 'Desktop\AdministratorController@access');
  Route::get('reports', 'Desktop\AdministratorController@reports');
  Route::get('dashboards', 'Desktop\DashboardsController@index');
  // Route::get('product','Producto\ProductController@index');
  //rutas con recuros
  Route::resource('product','Producto\ProductController');
});

Route::auth();
Route::get('/home', 'HomeController@index');
