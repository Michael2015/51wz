//首页自动翻页
$(function(){
    $(".rollpicshow").jCarouselLite({
        auto: 0, /*自动播放间隔时间*/
        speed: 500, /*速度*/
        btnNext:".next",/*向前滚动*/
        btnPrev:".prev",/*向后滚动*/
        visible:3 /*显示数量*/
    })});
//中超新闻标签
var tags_a = $(".tags a");
tags_a.each(function(){
    var x = 9;
    var y = 0;
    var rand = parseInt(Math.random() * (x - y + 1) + y);
    $(this).addClass("tags"+rand)});

