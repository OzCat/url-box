<?php
/**
 * bit.ly URL Shorter
 * Author: orvice
 * last update: 14-9-16
 *
 */


class bitly {

    function  _construct($apikey){
        $token = $apikey;
    }

    function srt($url){
        $url     = urlencode($url);
        $baseurl = "https://api-ssl.bitly.com/v3/shorten";
        //Edit this token
        $owntoken   =  "4d4cb354e6d48339a5043f98d08572404cf02628";
        if($token==NULL){
            $token = $owntoken;
        }
        $furl = $baseurl.'?access_token='.$token.'&longUrl='.$url;
        $short  = curl_init($furl);
        curl_setopt($short,CURLOPT_RETURNTRANSFER,true);
        $short_json = curl_exec($short);
        curl_close($short);
        $short_ary  = json_decode($short_json,true);
        $code = $short_ary['status_code'];
        if($code =="200"){
            $bk = $short_ary['data'];
            $bk  = $bk['url'];
            return $bk;
        }
        else{
            return 0;
        }

    }

    function _destruct(){
        curl_close($short);
    }

}



