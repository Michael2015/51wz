@extends('layouts.app')
@section('title', '中超联赛直播_今天央视中超联赛直播中')
@section('keywords', '中超联赛,央视中超联赛,中国足球联赛,中超联赛直播')
@section('description', '中超联赛直播网，为广大球迷提供中国足球联赛的直播视频，历史视频锦集，中超联赛积分排名，中超联赛赛程，中超联赛新闻等信息。')
@section('content')
    <header class="navbar-wrapper">
        <div class="navbar navbar-black">
            <div class="container cl">
                <a class="logo navbar-logo f-l mr-10 hidden-xs" href="{{url('/')}}">中超联赛直播网</a>
                <span class="logo navbar-slogan f-l mr-10 hidden-xs">视频 &middot; 赛程 &middot; 排名&middot; 锦集</span>
                <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
                <nav class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
                    <ul class="cl">
                        <li class="current"><a href="/">中超直播</a></li>
                        <li><a href="#">中超赛程</a></li>
                        <li><a href="#">中超排名</a></li>
                        <li><a href="#">视频锦集</a></li>
                        <li><a href="#">中超新闻</a></li>
                        <li><a href="#">中超球星</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <section class="i-schedule">
        <div class="rollpic cl">
            <a href="javascript:void(0)" class="prev"></a>
            <div class="rollpicshow">
                <ul>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/1.jpg"></li>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/2.jpg"></li>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/3.jpg"></li>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/4.jpg"></li>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/5.jpg"></li>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/6.jpg"></li>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/7.jpg"></li>
                    <li><img width="170" height="143" title="" src="http://www.h-ui.net/temp/8.jpg"></li>
                </ul>
            </div>
            <a href="javascript:void(0)" class="next"></a>
        </div>
    </section>
@endsection