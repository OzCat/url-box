<?php
/**
 * Bit.ly Class
 * @license MIT
 * @package OzCat\Urlbox
 */

namespace  OzCat\Urlbox;

class Bitly extends Base {
    // ApiKey
    public $token;
    public $apikey;
    //curl
    public $cc;
    public $baseurl   = "https://api-ssl.bitly.com/v3/shorten";
    public $expandurl = "https://api-ssl.bitly.com/v3/expand";

    // Edit this apikey
    function  __construct($apikey="4d4cb354e6d48339a5043f98d08572404cf02628"){
        $this->token = $apikey;
        // init
        $this->cc = curl_init();
    }

    function srt($url){
        $url     = urlencode($url);
        $furl = $this->baseurl.'?access_token='.$this->token.'&longUrl='.$url;
        $this->cc  = curl_init($furl);
        curl_setopt($this->cc,CURLOPT_RETURNTRANSFER,true);
        $short_json = curl_exec($this->cc);
        //curl_close($cc);
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

    function expand($url){
        $url     = urlencode($url);
        $furl = $this->expandurl.'?access_token='.$this->token.'&shortUrl='.$url;
        $this->cc  = curl_init($furl);
        curl_setopt($this->cc,CURLOPT_RETURNTRANSFER,true);
        $exp_json = curl_exec($this->cc);
        $exp_ary  = json_decode($exp_json,true);
        $code = $exp_ary['status_code'];
        if($code="200"){
            $bk = $exp_ary['data'];
            $bk = $bk['expand'];
            $bk = $bk['0'];
            $bk = $bk['long_url'];
            return $bk;
        }
        else{
            return 0;
        } 
    }

    function __destruct(){
        curl_close($this->cc);
    }
}



