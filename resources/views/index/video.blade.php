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
                    <span class="current">新闻1+1完整视频</span>
                </div>
                <div class="tabCon">
                    <ul>
                        @foreach ($video_list as $video)
                        <li>
                            <div class="panel panel-secondary">
                                <a href="/video/{{$video['guid']}}.html">
                                    <div class="panel-body">
                                        <img src="http://img.haixialiangan.wang?img_url={{substr($video['video_key_frame_url'],25)}}" alt="{{$video['video_title']}}">
                                        <h4>{{$video['video_title']}}</h4>
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
        <div class="clear"></div>
        {{ $video_list->links() }}
        <div class="clear"></div>
        <!-- 新闻 -->
        <div class="i-cate-all i-cate-news">
            <div  class="HuiTab">
                <div class="tabBar clearfix">
                    <span class="current">新闻1+1视频片段</span>
                    <a href="/clip"><span class="more">更多+</span></a>
                </div>
                <div class="tabCon">
                    <div class="pd-10 tags">
                        @foreach($clip_list as $clip)
                        <a href="/clip/{{$clip['guid']}}.html">{{$clip['video_title']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- 新闻 -->
    </section>
    <!--  end  首页分类模块  -->
@endsection