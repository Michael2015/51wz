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
                    @foreach ($recommend_video_video as $recommend_video)
                        <li>
                            <div class="panel panel-default">
                                <div class="panel-header past">{{$recommend_video['date']}} / {{week($recommend_video['date'])}}</div>
                                <div class="panel-body">
                                    <a href="">
                                        <img src="http://img.haixialiangan.wang?img_url={{substr($recommend_video['video_key_frame_url'],25)}}" alt="{{$recommend_video['video_title']}}">
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
                            <li><a href="#" target="_blank"><img
                                            src="http://p1.img.cctvpic.com/photoAlbum/photo/2018/10/06/PHOTIf3AHsyBM4AWY7EQwgQ4181006_920x700.jpg"></a>
                            </li>
                            <li><a href="#" target="_blank"><img
                                            src="http://p1.img.cctvpic.com/photoAlbum/photo/2018/10/06/PHOTIf3AHsyBM4AWY7EQwgQ4181006_920x700.jpg"></a>
                            </li>
                            <li><a href="#" target="_blank"><img
                                            src="http://p1.img.cctvpic.com/photoAlbum/photo/2018/10/06/PHOTIf3AHsyBM4AWY7EQwgQ4181006_920x700.jpg"></a>
                            </li>
                            <li><a href="#" target="_blank"><img
                                            src="http://lib.h-ui.net/jquery.SuperSlide/2.1.1/demo/01/images/b-3.jpg"></a>
                            </li>
                            <li><a href="#" target="_blank"><img
                                            src="http://p1.img.cctvpic.com/photoAlbum/page/performance/img/2018/10/5/1538747601070_528.jpg"></a>
                            </li>
                            <li><a href="#" target="_blank"><img
                                            src="http://p1.img.cctvpic.com/photoAlbum/page/performance/img/2018/10/5/1538747601070_528.jpg"></a>
                            </li>
                        </ul>
                    </div>
                    <ol class="hd cl">
                        <li>
                            <img src="http://p1.img.cctvpic.com/photoAlbum/page/performance/img/2018/10/5/1538747601070_528.jpg"
                                 width="80" height="58"></li>
                        <li><img src="http://lib.h-ui.net/jquery.SuperSlide/2.1.1/demo/01/images/s-2.jpg" width="80"
                                 height="58"></li>
                        <li><img src="http://lib.h-ui.net/jquery.SuperSlide/2.1.1/demo/01/images/s-3.jpg" width="80"
                                 height="58"></li>
                        <li><img src="http://lib.h-ui.net/jquery.SuperSlide/2.1.1/demo/01/images/s-4.jpg" width="80"
                                 height="58"></li>
                        <li><img src="http://lib.h-ui.net/jquery.SuperSlide/2.1.1/demo/01/images/s-5.jpg" width="80"
                                 height="58"></li>
                        <li><img src="http://lib.h-ui.net/jquery.SuperSlide/2.1.1/demo/01/images/s-6.jpg" width="80"
                                 height="58"></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="v-right">
            <ul>
                @foreach ($slider_0_8_video as $slider_0_8_video)
                <li>
                    <a href="">
                        <img class="cover_img"
                             src="http://img.haixialiangan.wang?img_url={{substr($slider_0_8_video['video_key_frame_url'],25)}}"
                             width="100%" alt="">
                        <p title="{{$slider_0_8_video['video_title']}}">{{$slider_0_8_video['video_title']}}</p>
                        <img class="play_img"
                             src="{{asset('images/video_play.png')}}"
                             alt="视频播放按钮">
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
                        @foreach ($slider_8_18_video as $slider_8_18_video)
                        <li>
                            <div class="panel panel-secondary">
                                <a href="/video/{{$slider_8_18_video['guid']}}.html">
                                    <div class="panel-body">
                                        <img src="http://img.haixialiangan.wang?img_url={{substr($slider_8_18_video['video_key_frame_url'],25)}}"
                                             alt="">
                                        <h4>{{$slider_8_18_video['video_title']}}</h4>
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