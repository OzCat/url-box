<?php
/**
 *  the demo of is.gd
*/

include_once '../class/bitly.class.php';
$demo = new bitly();
$url = "http://url.com";
$bk  = $demo->srt($url);
$long = $demo->expand($bk);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $bk; ?></p>
<p>Expand Short Url: <?php echo $long; ?></p>
