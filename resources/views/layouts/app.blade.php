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
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<div class="container">
    <header class="navbar-wrapper">
        <div class="navbar navbar-black">
            <div class="container cl">
                <a class="logo navbar-logo f-l mr-10 hidden-xs" href="{{url('/')}}">新闻1+1直播网</a>
                <span class="logo navbar-slogan f-l mr-10 hidden-xs">视频 &middot; 锦集 &middot; 图片</span>
                <nav class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
                    <ul class="cl">
                        <li @if($action_name === 'index') class="current" @endif><a href="{{URL::to('/')}}">新闻1+1直播</a></li>
                        <li @if($action_name === 'video') class="current" @endif><a href="{{URL::to('/video')}}">新闻1+1完整视频</a></li>
                        <li @if($action_name === 'clip') class="current" @endif><a href="{{URL::to('/clip')}}">新闻1+1视频片段</a></li>
                        <li @if($action_name === 'photo') class="current" @endif><a href="{{URL::to('/photo')}}">新闻1+1精彩图片</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- 面包屑导航  -->
    @if($action_name != 'index')
        <section>
            <nav class="breadcrumb">
                <a class="maincolor" href="{{url('/')}}">首页</a>
                <span class="c-666 en">&gt;</span>
                @if($action_name == 'video' ||  $action_name == 'video_play')
                    <a href="/video">新闻1+1完整视频</a>
                    @if($action_name == 'video_play')
                        <span class="c-666 en">&gt;</span>
                        <a href="/video/{{$video_detail[0]['guid']}}.html">{{$video_detail[0]['video_title']}}</a>
                    @endif
                    @elseif($action_name == 'clip' || $action_name == 'clip_play')
                    <a href="/clip">新闻1+1视频片段</a>
                    @if($action_name == 'clip_play')
                        <span class="c-666 en">&gt;</span>
                        <a href="/video/{{$clip_detail[0]['guid']}}.html">{{$clip_detail[0]['video_title']}}</a>
                    @endif
                @elseif($action_name == 'photo')
                    <a href="/photo">新闻1+1精彩图片</a>
                @endif
            </nav>
        </section>
    @endif
<!-- 面包屑导航  -->
    @yield('content')
    <footer class="footer mt-20">
        <div class="container-fluid">
            <nav><a href="{{url('/')}}" target="_blank">本站将为您带来精彩丰富的<strong>央视新闻1+1直播</strong>视频、新闻、图片、直播等内容，将带您今早观看新闻1+1直播新闻</a></nav>
            <nav>本站为方便网民观看并传播、弘扬中央伟大精神;让热爱新闻1+1的观众更早观看社会时事热点新闻</nav>
            <p>Copyright&copy; 2018 51wz.wang 侵权联系：3087808537#qq.com All Rights Reserved. <br>
                <a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">京ICP备1000000号</a><br>
            </p>
        </div>
    </footer>
</div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jcarousellite.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>
