<?php
/**
 * Baidu dwz.cn URL Shorter
 * Author: orvice
 * last update: 14-9-4
 *
 */

function bd_dwz($type,$url){
    if($type == 1){
        $data= "url=".$url;
        $short = curl_init();

        curl_setopt($short,CURLOPT_URL,"http://dwz.cn/create.php");
        curl_setopt($short,CURLOPT_POST,true);
        curl_setopt($short,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($short,CURLOPT_HEADER,0); //remove head
        curl_setopt($short,CURLOPT_POSTFIELDS,$data); // POST
        //Set Charset
        curl_setopt($short, CURLOPT_HTTPHEADER, array("application/x-www-form-urlencoded; charset=utf-8",
            "Content-length: ".strlen($data)
        ));
        //Get Json
        $short_json = curl_exec($short);
        //No errot
        if (!curl_errno($short_json)){
            $short_array = jason_decode($short_json,true);
            return $short_array;
        }
        //if error occur,return 0
        else{
            return 0;
        }


    }



}