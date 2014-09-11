<?php
/**
 *  the demo of is.gd srt
*/

include_once '../class/isgd.class.php';
$demo = new isgd();
$url = "http://url.com";
$bk  = $demo->srt($url);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $bk; ?></p>
