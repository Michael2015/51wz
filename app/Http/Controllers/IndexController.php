<?php

namespace App\Http\Controllers;


use App\Model\Clip;
use App\Model\Video;
use Illuminate\Support\Facades\Route;

class IndexController extends Controller
{
    public function __construct()
    {
        $action_name = substr(strchr(Route::currentRouteAction(),'@'),1);

        View()->share('action_name', $action_name);
    }

    //首页
    public function index()
    {
        Video::addVideoVideo();
        Clip::addClipVideo();

        //首页推荐视频
        $recommend_video_video_20 = Video::orderBy('click_num', 'desc')->take(20)->get();

        $recommend_video_video_19 = Video::orderBy('date', 'desc')->take(19)->get();

        $recommend_video_video_19 = json_decode($recommend_video_video_19, true);

        //获取最新一条视频链接
        $slider_0_1_video = array_slice($recommend_video_video_19,0,1)[0];
        //获取最新花絮视频
        $recommend_clip_5 = Clip::orderBy('date','desc')->take(5)->get();

        //首页侧边栏
        $slider_1_9_video = array_slice($recommend_video_video_19,1,8);

        //首页视频栏目
        $slider_9_19_video = array_slice($recommend_video_video_19,9,10);

        //首页推荐视频片段
        $recommend_clip_20 = Clip::orderBy('click_num','desc')->take(20)->get(['guid','video_title']);

        return view('index/index',[
            'recommend_video_video_20'=>$recommend_video_video_20,
            'slider_0_1_video'=>$slider_0_1_video,
            'slider_1_9_video'=>$slider_1_9_video,
            'slider_9_19_video'=>$slider_9_19_video,
            'recommend_clip_20'=>$recommend_clip_20,
            'recommend_clip_5'=>$recommend_clip_5,
            ]);
    }
    //完整视频
    public function video()
    {
        $video_list = Video::orderBy('date', 'desc')->paginate(36);
        return view('index/video',[
            'video_list'=>$video_list,
        ]);
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
