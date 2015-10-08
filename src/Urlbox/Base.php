<?php

namespace OzCat\Urlbox;


class Base {

    private $c;

    function __construct(){
        $this->c = curl_init();
    }

    public function curlPost($url,$data){
        curl_setopt($this->c,CURLOPT_URL,$url);
        curl_setopt($this->c,CURLOPT_POST,true);
        curl_setopt($this->c,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($this->c,CURLOPT_HEADER,0); //remove head
        curl_setopt($this->c,CURLOPT_POSTFIELDS,$data); // POST
        //Set Charset
        //Get Json
        $json = curl_exec($this->c);
        return $json;
    }

    public function curlGet(){

    }
}