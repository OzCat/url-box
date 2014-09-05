<?php
/**
 * This is a demo
 * User: orvice
 * last update: 14-9-4
 */

//Load func
include_once 'func/baidu_dwz.func.php';

$url = "http://url.com";

$surl = bd_dwz('1',$url);
//print_r($surl);
echo $surl;
