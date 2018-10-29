@extends('layouts.app')
@section('title', '新闻1+1完整视频列表')
@section('keywords', '新闻1+1,新闻一加一完整视频,新闻1+1完整视频')
@section('description', '新闻1+1历史完整视频列表合集')
@section('content')
    <!--  start  首页分类模块  -->
    <section class="i-category i-video">
        <!-- 视频 -->
        <div class="i-cate-all">
            <div  class="HuiTab">
                <div class="tabBar clearfix">
                    <span class="current">推荐新闻1+1视频</span>
                </div>
                <div class="w100">
                    <iframe class="ldgplayer" height="419px" width="100%" frameborder="0" border="0" marginwidth="0" marginheight="0"
                            scrolling="no" src="http://video.haixialiangan.wang?pid={{$clip_detail[0]['guid']}}"></iframe>
                </div>
                <div class="tabCon">
                    <ul>
                        @foreach ($clip_list as $clip)
                        <li>
                            <div class="panel panel-secondary">
                                <a href="/video/{{$clip['guid']}}.html">
                                    <div class="panel-body">
                                        <img src="http://img.haixialiangan.wang?img_url={{substr($clip['video_key_frame_url'],25)}}" alt="{{$clip['video_title']}}">
                                        <h4>{{$clip['video_title']}}</h4>
                                        <div class="bg-img">
                                            <img src="{{asset('images/video_play.png')}}" alt="视频播放">
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
    </section>
    <!--  end  首页分类模块  -->
@endsection