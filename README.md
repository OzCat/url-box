url-shorter
===========

url-shorter func base on PHP

## How To Use/Demo

###dwz.cn

```
include_once '../class/dwzcn.class.php';
$demo = new dwzcn();
$url = "http://url.com";
$bk = $demo->srt($url);
echo $bk;
```
###is.gd

```
include_once '../class/isgd.class.php';
$demo = new isgd();
$url = "http://url.com";
$bk  = $demo->srt($url);
echo $bk;
```

###bit.ly

please edit the token in file class/bitly.class.php before using.
```
include_once '../class/bitly.class.php';
$demo = new bitly();
$url = "http://url.com";
$bk  = $demo->srt($url);
echo $bk;
```
