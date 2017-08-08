<?php

/**
 * 地理位置接口
 *
 * @author: moxiaobai
 * @since : 2016/2/1 12:14
 */

class Helper_Map {

    const KEY = '2f4b9443c460870c7779525dcb01434c';

    public static function getLocation($address) {
        $url = "http://restapi.amap.com/v3/geocode/geo?output=json&key=" . Helper_Map::KEY . "&address=" . $address;
        $ret = self::curlGet($url);

        $ret = json_decode($ret, true);
        if($ret['status'] == 1) {
            $location = $ret['geocodes'][0]['location'];
            $location = explode(',', $location);

            return array('latitude'=>$location[0], 'longitude'=>$location[1]);
        } else {
            return false;
        }
    }

    public static function getAddress($geo, $poitype, $radius) {
        $url = "http://restapi.amap.com/v3/geocode/regeo?key=" . Helper_Map::KEY ."&location={$geo}&poitype={$poitype}&radius={$radius}&extensions=base&batch=false&roadlevel=1";
        $ret = self::curlGet($url);

        $ret = json_decode($ret, true);
        if($ret['status'] == 1) {
            return $ret['regeocode']['formatted_address'];
        } else {
            return false;
        }
    }

    public static function curlGet($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $ret = curl_exec($ch);
        curl_close($ch);

        return $ret;
    }
}