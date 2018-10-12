$(function(){
    $(".rollpicshow").jCarouselLite({
        auto: 0, /*自动播放间隔时间*/
        speed: 500, /*速度*/
        btnNext:".next",/*向前滚动*/
        btnPrev:".prev",/*向后滚动*/
        visible:3 /*显示数量*/
    })});
//首页新闻轮播图
$(function(){
    jQuery("#index-slider .slider").slide({mainCell:".bd ul",titCell:".hd li",trigger:"click",effect:"leftLoop",autoPlay:true,delayTime:850,interTime:7000,pnLoop:false,titOnClassName:"active"})});

