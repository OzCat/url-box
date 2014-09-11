<?php
/**
 *  the demo of is.gd
*/

include_once '../class/bitly.class.php';
$demo = new bitly();
$url = "http://url.com";
$bk  = $demo->srt($url);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $bk; ?></p>
