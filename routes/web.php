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

Route::get('/', function () {
    //TODO 打印调用栈
    return debug_backtrace();
//    return view('welcome');
});


/*
 * 后台管理系统路由设置
 * namespace: 指定在该群组中控制器的命名空间
 * prefix:给群组内的路由加上路由前缀
 * */
Route::get('admin',function (){
    return view('admin_template');
});
//Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){
//
//});
//
//Route::get('admin',function (){
//   return view('admin_template');
//});


Route::get('test', 'TestController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
