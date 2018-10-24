<?php

namespace App\Http\Controllers;


use App\Model\Clip;
use App\Model\Video;

class IndexController extends Controller
{
    //首页
    public function index()
    {
        //Video::addVideoVideo();
        //Clip::addClipVideo();

        //首页推荐视频
        $recommend_video_video_20 = Video::orderBy('click_num', 'desc')->take(20)->get();

        $recommend_video_video_18 = Video::orderBy('date', 'desc')->take(18)->get();
        $recommend_video_video_18 = json_decode($recommend_video_video_18, true);
        //首页侧边栏
        $slider_0_8_video = array_slice($recommend_video_video_18,0,8);

        //首页视频栏目
        $slider_8_18_video = array_slice($recommend_video_video_18,8,10);

        //首页视频片段
        $recommend_clip_20 = Clip::orderBy('click_num','desc')->take(20)->get(['guid','video_title']);

        return view('index/index',[
            'recommend_video_video'=>$recommend_video_video_20,
            'slider_0_8_video'=>$slider_0_8_video,
            'slider_8_18_video'=>$slider_8_18_video,
            'recommend_clip_20'=>$recommend_clip_20,
            ]);
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
