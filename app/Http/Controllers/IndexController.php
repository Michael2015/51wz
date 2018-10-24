<?php

namespace App\Http\Controllers;


use App\Model\Clip;
use App\Model\Video;

class IndexController extends Controller
{
    //首页
    public function index()
    {
       /*
        Video::addVideoVideo();
        Clip::addClipVideo();
       */
        return view('index/index');
    }
    //完整视频
    public function video()
    {
        return view('index/video');
    }
    //视频片段
    public function clip()
    {
        return view('index/clip');
    }
    //精彩图片
    public function photo()
    {
        return view('index/photo');
    }
}
