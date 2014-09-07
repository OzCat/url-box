<?php
/**
 * is.gd url shorter function
 * User: orvice
 * last update Date: 14-9-7
*/




function isgdSrt($url)
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
    $error  = $short_ary['errorcode'];
    if($error){
        return 0;
    }
    else{
        return $bk;
    }
}
?>
