<?php
/**
 *  the demo of t.cn
 */

include_once '../class/tcn.class.php';
$demo = new tcn();
$url = "http://url.com";
$bk   = $demo->srt($url);
$long = $demo->expand($bk);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $bk; ?></p>
<p>Expand Short Url: <?php echo $long; ?></p>
