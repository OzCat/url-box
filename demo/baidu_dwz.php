<?php
/**
 * This is a demo
 * User: orvice
 * last update: 14-9-7
 */

//Load func
include_once '../func/baidu_dwz.func.php';

$url = "http://url.com";

$surl = bd_dwz('1',$url);
//print_r($surl);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $surl; ?></p>

