<?php
/**
 * Created by PhpStorm.
 * User: yangmingzhao
 * Date: 2018/10/24
 * Time: 10:44
 */

function week($date)
{
    $week =array("周日","周一","周二","周三","周四","周五","周六");
    return $week[date("w",strtotime($date))];
}