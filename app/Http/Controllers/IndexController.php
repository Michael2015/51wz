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
        //完整视频
        $video_list = Video::orderBy('date', 'desc')->paginate(36);
        //视频片段
        $clip_list = Clip::orderBy('click_num','desc')->take(20)->get(['guid','video_title']);

        return view('index/video',[
            'video_list'=>$video_list,
            'clip_list'=>$clip_list,
        ]);
    }
    //视频片段
    public function clip()
    {
        //完整视频
        $clip_list = Clip::orderBy('date', 'desc')->paginate(36);
        //视频片段
        $video_list = Video::orderBy('click_num','desc')->take(20)->get(['guid','video_title']);

        return view('index/clip',[
            'video_list'=>$video_list,
            'clip_list'=>$clip_list,
        ]);
    }
    //精彩图片
    public function photo()
    {
        //完整视频
        $clip_list = Clip::orderBy('date', 'desc')->paginate(36);
        //视频片段
        $video_list = Video::orderBy('click_num','desc')->take(20)->get(['guid','video_title']);

        return view('index/photo',[
            'video_list'=>$video_list,
            'clip_list'=>$clip_list,
        ]);
    }
    //完整视频播放页
    public function video_play($guid)
    {
        //完整视频
        $video_detail = Video::where('guid', '=',$guid)->take(1)->get();
        $video_detail = json_decode($video_detail,true);
        if(empty($video_detail))
        {
            abort(404, '未授权操作');
        }
        //视频片段
        $video_list = Video::orderBy('date','desc')->take(10)->get();
        return view('index/video_play',[
            'video_detail'=>$video_detail,
            'video_list'=>$video_list,
        ]);
    }

    //视频片段播放页
    public function clip_play($guid)
    {
        //完整视频
        $clip_detail = Clip::where('guid', '=',$guid)->take(1)->get();
        $clip_detail = json_decode($clip_detail,true);
        if(empty($clip_detail))
        {
            abort(404, '未授权操作');
        }
        $clip_list = Clip::orderBy('date','desc')->take(10)->get();
        return view('index/clip_play',[
            'clip_detail'=>$clip_detail,
            'clip_list'=>$clip_list,
        ]);
    }

}
