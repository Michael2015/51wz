<?php

namespace App\Model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Clip extends Eloquent
{
    protected $primaryKey = '_id';
    protected $connection = 'mongodb';
    protected $collection = 'video_clip';     //文档名 
    static $feature_video_url = "http://api.cntv.cn/video/getVideoListByTopicIdInfo?videoid=##&topicid=TOPC1451559066181661&serviceId=tvcctv&type=0&t=jsonp&cb=setItem1=";

    public static function addClipVideo()
    {
        $get_video_url = str_replace('##', self::getLastVideoId(), self::$feature_video_url);
        $output = self::curl($get_video_url);
        if ($output) {
            $output = str_replace(['setItem1=', '(', ');', '?p=2&h=120'], '', $output);
            $output = json_decode($output, true);
        }
        self::buildData($output['data'][0]);
    }

    //插入完整视频
    public static function buildData($row)
    {
        if (is_array($row)) {
            $obj = new self();
            $obj->video_id = $row['video_id'];
            $obj->video_key_frame_url = $row['video_key_frame_url'];
            $obj->video_focus_date = $row['video_focus_date'];
            $obj->video_length = $row['video_length'];
            $obj->date = date("Y-m-d", strtotime($row['video_focus_date']));
            $obj->video_title = $row['video_title'];
            $obj->guid = $row['guid'];
            $video_detail = self::getVideoContentByUrl($row['video_url']);
            $obj->keyword = $video_detail[0];
            $obj->content = $video_detail[1];
            $obj->click_num = 0;
            $result = self::where('guid', '=', $obj->guid)->take(1)->get();
            if (empty(json_decode($result, true))) {
                $obj->save();
            }
        }
    }

    //获取内容简介
    public static function getVideoContentByUrl($url)
    {

        /* $return = self::curl($url);
         $res = htmlspecialchars_decode($return);
         preg_match_all('#<meta\s+name=keywords\s+content="(.*?)">#', $res, $keywords);
         preg_match_all('#<meta\s+name=description\s+content="(.*?)">#', $res, $descriptions);
         preg_match_all('#视频简介：</em>(.*?)</p>#s', $res, $content);*/
        $content[1][0] = '测试';
        $keywords[1][0] = '测试';
        return [$keywords[1][0], trim(str_replace('本期节目主要内容：', '', $content[1][0]))];
    }

    //获取最新一个视频id
    public static function getLastVideoId()
    {
        $video_id = 'VIDEA2BSg6GKRpmFQ6KcTEdP181020';
        $result = self::where('date', '<=', date("Y-m-d",strtotime('-1 day')))->orderBy('video_focus_date', 'desc')->take(1)->get();
        $result = json_decode($result, true);
        if ($result) {
            $video_id = $result[0]['video_id'];
        }
        return $video_id;
    }

    //do curl
    public static function curl($url)
    {
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        // 4. 释放curl句柄
        curl_close($ch);
        return $output;
    }


}