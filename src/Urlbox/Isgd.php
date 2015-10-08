<?php
/**
 * is.gd Class
 * @license MIT
 * @package OzCat\Urlbox
 */

namespace OzCat\Urlbox;

class Isgd{

    function srt($url)
    {

        $url     = urlencode($url);
        $baseurl = "http://is.gd/create.php?format=simple&format=json";
        $furl    = $baseurl.'&url='.$url;
        $short   = curl_init($furl);
        //curl_setopt($short,CURLOPT_URL,$furl);
        curl_setopt($short,CURLOPT_RETURNTRANSFER,true);
        $short_json = curl_exec($short);
        curl_close($short);

        $short_ary  = json_decode($short_json,true);

        $bk     = $short_ary['shorturl'];
        // if have any error, $error = 1 
        if(isset($short_ary['errorcode'])){
            return 0;
        }
        else{
            return $bk;
        }
    } 
} 
