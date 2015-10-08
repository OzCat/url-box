<?php
/**
 * Baidu dwz.cn class
 * @license MIT
 * @package OzCat\Urlbox
 */

namespace OzCat\Urlbox;

class Dwzcn extends Base {

    private $baseURL = "http://dwz.cn/create.php";

    function srt($url){ 
            $data=array('url'=>$url);
            $json = $this->curlPost($this->baseURL,$data);
            $short_array = json_decode($json,true);
            $bk = $short_array['status'];
            //No error
            if (!$bk){
                $rt = $short_array['tinyurl'];
                return $rt;
            }
            //if error occur,return 0
            else{
                return 0;
            }
        }

    function expand($url){
            $data=array('tinyurl'=>$url);
            $short = curl_init();
            curl_setopt($short,CURLOPT_URL,"http://dwz.cn/query.php");
            curl_setopt($short,CURLOPT_POST,true);
            curl_setopt($short,CURLOPT_RETURNTRANSFER,true);
            curl_setopt($short,CURLOPT_HEADER,0); //remove head
            curl_setopt($short,CURLOPT_POSTFIELDS,$data); // POST
            //Set Charset
            //Get Json
            $short_json = curl_exec($short);
            curl_close($short);
            //$curl_close($short);
            $short_array = json_decode($short_json,true);
            $bk = $short_array['status'];
            //No error
            if (!$bk){

                $rt = $short_array['longurl'];
                return $rt;
            }
            //if error occur,return 0
            else{
                return 0;
            }
        } 
} 