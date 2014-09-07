<?php
/**
 *  the demo of is.gd srt func
*/

include_once '../func/isgd.func.php';
$url = "http://url.com";
$bk  = isgdsrt($url);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $bk; ?></p>
