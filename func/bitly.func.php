<?php
/**
 * bit.ly URL Shorter
 * Author: orvice
 * last update: 14-9-8
 *
 */
function bitlysrt($url){
  $url     = urlencode($url);
  $baseurl = "https://api-ssl.bitly.com/v3/shorten";
  //Edit this token
  $token   =  "4d4cb354e6d48339a5043f98d08572404cf02628";
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
