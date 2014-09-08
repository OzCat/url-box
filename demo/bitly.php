<?php
/**
 *  the demo of is.gd srt func
*/

include_once '../func/bitly.func.php';
$url = "http://url.com";
$bk  = bitlysrt($url);
?>

<p>Long Url: <?php echo $url; ?></p>
<p>Short Url: <?php echo $bk; ?></p>
