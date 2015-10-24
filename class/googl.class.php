<?php


class googl {

    public $baseurl = "https://www.googleapis.com/urlshortener/v1/url?";
    public $cc;
    function __construct($apikey){


        $this->cc = curl_init();

    }

    function srt($url){

        $data = array('longUrl'=>$url);
        $data_string = '{ "longUrl": "'.$url.'" }';

        curl_setopt($this->cc,CURLOPT_URL,$this->baseurl);
        curl_setopt($this->cc,CURLOPT_POST,true);
        curl_setopt($this->cc,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($this->cc,CURLOPT_HEADER,0); //remove head
        curl_setopt($this->cc,CURLOPT_HTTPHEADER, Array('Content-Type: application/json'));
        curl_setopt($this->cc,CURLOPT_POSTFIELDS, $data_string);

        $short_json = curl_exec($this->cc);
        $short_ary  = json_decode($short_json);
    }

    function __destruct(){
        curl_close($this->cc);
    }

} 