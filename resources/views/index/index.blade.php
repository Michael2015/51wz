@extends('layouts.app')
@section('title', '新闻1+1_今天央视新闻1+1直播中')
@section('keywords', '新闻1+1,新闻一加一,新闻1+1视频,新闻1+1直播')
@section('description', '新闻1+1直播网，为1+1观众提供央视cctv新闻1+1栏目的直播视频，历史视频锦集，精彩图片等信息。')
@section('content')
    <!--  start  首页精彩视频  -->
    <section class="i-schedule">
        <div class="rollpic cl">
            <a href="javascript:void(0)" class="prev">&lt;</a>
            <div class="rollpicshow">
                <ul>
                    @foreach ($recommend_video_video_20 as $recommend_video_video_20)
                        <li>
                            <div class="panel panel-default">
                                <div class="panel-header past">{{$recommend_video_video_20['date']}} / {{week($recommend_video_video_20['date'])}}</div>
                                <div class="panel-body">
                                    <a href="">
                                        <img src="http://img.haixialiangan.wang?img_url={{substr($recommend_video_video_20['video_key_frame_url'],25)}}" alt="{{$recommend_video_video_20['video_title']}}">
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <a href="javascript:void(0)" class="next">&gt;</a>
        </div>
    </section>
    <!--  end  首页精彩视频  -->

    <!--  start  首页视频播放模块  -->
    <section class="i-video-play">
        <div class="v-left">
            <div id="index-slider" class="bg-fff box-shadow radius">
                <div class="slider">
                    <div class="bd bg-fff">
                        <ul>
                            <li>
                                <iframe class="ldgplayer" height="100%" width="100%" frameborder="0" border="0" marginwidth="0" marginheight="0"
                                        scrolling="no" src="http://video.haixialiangan.wang?pid={{$slider_0_1_video['guid']}}"></iframe>
                            </li>
                        </ul>
                    </div>
                    <ol class="hd cl">
                        @foreach ($recommend_clip_5 as $recommend_clip_5)
                        <li>
                            <img src="http://img.haixialiangan.wang?img_url={{substr($recommend_clip_5['video_key_frame_url'],25)}}" width="80" height="58" alt="{{$recommend_clip_5['video_title']}}">
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
        <div class="v-right">
            <ul>
                @foreach ($slider_1_9_video as $slider_1_9_video)
                    <li>
                        <a href="">
                            <img class="cover_img" src="http://img.haixialiangan.wang?img_url={{substr($slider_1_9_video['video_key_frame_url'],25)}}" width="100%" alt="">
                            <p title="{{$slider_1_9_video['video_title']}}">{{$slider_1_9_video['video_title']}}</p>
                            <img class="play_img" src="{{asset('images/video_play.png')}}" alt="视频播放按钮">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="clear"></div>
    </section>
    <!--  end  首页赛程  -->

    <!--  start  首页分类模块  -->
    <section class="i-category">
        <!-- 视频 -->
        <div class="i-cate-all">
            <div  class="HuiTab">
                <div class="tabBar clearfix">
                    <span class="current">新闻1+1完整视频</span>
                    <a href="{{url('/video')}}"><span class="more">更多+</span></a>
                </div>
                <div class="tabCon">
                    <ul>
                        @foreach ($slider_9_19_video as $slider_9_19_video)
                            <li>
                                <div class="panel panel-secondary">
                                    <a href="/video/{{$slider_9_19_video['guid']}}.html">
                                        <div class="panel-body">
                                            <img src="http://img.haixialiangan.wang?img_url={{substr($slider_9_19_video['video_key_frame_url'],25)}}"
                                                 alt="">
                                            <h4>{{$slider_9_19_video['video_title']}}</h4>
                                            <div class="bg-img">
                                                <img src="{{asset('images/video_play.png')}}" alt="视频播放按钮">
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- 视频 -->

        <!-- 新闻 -->
        <div class="i-cate-all i-cate-news">
            <div  class="HuiTab">
                <div class="tabBar clearfix">
                    <span class="current">新闻1+1视频片段</span>
                    <a href="{{url('/clip')}}"><span class="more">更多+</span></a>
                </div>
                <div class="tabCon">
                    <div class="pd-10 tags">
                        @foreach ($recommend_clip_20 as $recommend_clip_20)
                            <a href="/clip/{{$recommend_clip_20['guid']}}.html">{{$recommend_clip_20['video_title']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- 新闻 -->
    </section>
    <!--  end  首页分类模块  -->
@endsection