<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">
    <link rel="Bookmark" href="favicon.ico" >
    <link rel="Shortcut Icon" href="favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('js/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/respond.min.js')}}"></script>
    <![endif]-->
    <link href="{{asset('css/h-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" /><!--自己的样式-->
</head>
<body>
<div class="container">
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
    @yield('content')
</div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jcarousellite.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jquery.SuperSlide.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
