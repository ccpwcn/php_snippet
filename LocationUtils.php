<?php
/**
 * Created by PhpStorm.
 * User: lidawei
 * Date: 2019/3/20
 * Time: 17:32
 */

namespace app\admin\utils;


class LocationUtils
{
    /**
     * @param $lat1 double 纬度1
     * @param $lng1 double 经度1
     * @param $lat2 double 纬度2
     * @param $lng2 double 经度2
     * @return double 返回计算结果，单位：千米（km）
     */
    public static function getDistance($lat1, $lng1, $lat2, $lng2)
    {
        // 将角度转为狐度
        $radLat1 = deg2rad($lat1);// deg2rad()函数将角度转换为弧度
        $radLat2 = deg2rad($lat2);
        $radLng1 = deg2rad($lng1);
        $radLng2 = deg2rad($lng2);

        $a = $radLat1 - $radLat2;
        $b = $radLng1 - $radLng2;

        $s = 2 * asin(sqrt(pow(sin($a / 2), 2) + cos($radLat1) * cos($radLat2) * pow(sin($b / 2), 2))) * 6378.137;

        return $s;

    }

    /**
     * @param $lat1 double 纬度1
     * @param $lon1 double 经度1
     * @param $lat2 double 纬度2
     * @param $lon2 double 经度2
     * @param float $radius 星球半径 KM
     * @return double 返回计算结果，单位：千米（km）
     */
    public static function distance($lat1, $lon1, $lat2, $lon2, $radius = 6378.137)
    {
        $rad = floatval(M_PI / 180.0);

        $lat1 = floatval($lat1) * $rad;
        $lon1 = floatval($lon1) * $rad;
        $lat2 = floatval($lat2) * $rad;
        $lon2 = floatval($lon2) * $rad;

        $theta = $lon2 - $lon1;

        $dist = acos(sin($lat1) * sin($lat2) + cos($lat1) * cos($lat2) * cos($theta));

        if ($dist < 0) {
            $dist += M_PI;
        }
        return $dist = $dist * $radius;
    }
}