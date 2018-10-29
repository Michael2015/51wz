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
//首页
Route::get('/', 'IndexController@index');
//完整视频
Route::get('/video', 'IndexController@video');
//首页
Route::get('/clip', 'IndexController@clip');
//图片
Route::get('/photo', 'IndexController@photo');
//完整视频详情
Route::get('/video/{guid}.html', 'IndexController@video_play');
//视频片段详情
Route::get('/clip/{guid}.html', 'IndexController@clip_play');