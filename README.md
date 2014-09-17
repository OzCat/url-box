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
//Restore a url
$long = $demo->expand($bk);
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

please edit the defauly token in file class/bitly.class.php before using.
You can get your own token at [bitly](http://dev.bitly.com/my_apps.html).
```
include_once '../class/bitly.class.php';
$demo = new bitly($key);
$url = "http://url.com";
$bk  = $demo->srt($url);
//Restore a url
$long = $demo->expand($bk);
echo $bk;
```

###t.cn

please edit the appkey in file class/tcn.class.php before using.
You can get your own appkey at [sina](http://open.weibo.com).
```
include_once '../class/tcn.class.php';
$demo = new tcn($key);
$url = "http://url.com";
$bk  = $demo->srt($url);
//Restore a url
$long = $demo->expand($bk);
echo $bk;
```
