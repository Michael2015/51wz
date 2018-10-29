@extends('layouts.app')
@section('title', '新闻1+1图片库')
@section('keywords', '新闻1+1,新闻一加一图片,新闻1+1图片')
@section('description', '新闻1+1图片库，包括新闻1+1主持人图片、视频封面截图')
@section('content')
    <!--  start  首页分类模块  -->
    <section class="i-category i-video i-photo">
        <!-- 视频 -->
        <div class="i-cate-all">
            <div  class="HuiTab">
                <div class="tabBar clearfix">
                    <span class="current">新闻1+1图片</span>
                </div>
                <div class="tabCon">
                    <ul>
                        @foreach ($clip_list as $clip)
                            <li>
                                <img src="http://img.haixialiangan.wang?img_url={{substr($clip['video_key_frame_url'],25)}}" alt="{{$clip['video_title']}}" title="{{$clip['video_title']}}" width="98%">
                            </li>
                        @endforeach
                        <div class="clear"></div>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 视频 -->

        <!-- 新闻 -->
        <div class="i-cate-all i-cate-news">
            <div  class="HuiTab">
                <div class="tabBar clearfix">
                    <span class="current">新闻1+1完整视频</span>
                    <a href="/video"><span class="more">更多+</span></a>
                </div>
                <div class="tabCon">
                    <div class="pd-10 tags">
                        @foreach($video_list as $video)
                            <a href="/video/{{$video['guid']}}.html">{{$video['video_title']}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- 新闻 -->
    </section>
    <!--  end  首页分类模块  -->
@endsection