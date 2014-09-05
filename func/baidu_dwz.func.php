<?php
/**
 * Baidu dwz.cn URL Shorter
 * Author: orvice
 * last update: 14-9-5
 *
 */

function bd_dwz($type,$url){
    if($type == 1){
        $data=array('url'=>$url);
        //$data= "url=".$url;
        $short = curl_init();

        curl_setopt($short,CURLOPT_URL,"http://dwz.cn/create.php");
        curl_setopt($short,CURLOPT_POST,true);
        curl_setopt($short,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($short,CURLOPT_HEADER,0); //remove head
        curl_setopt($short,CURLOPT_POSTFIELDS,$data); // POST
        //Set Charset


        //Get Json
        $short_json = curl_exec($short);
        //$curl_close($short);
        $short_array = json_decode($short_json,true);
        $bk = $short_array['status'];
        //No error   
        //if (!curl_errno($short_json)){
        if (!$bk){

            $rt = $short_array['tinyurl'];
            return $rt;
        }
        //if error occur,return 0
        else{
            return 0;
        }


    }



}