Url-box
===========

URL Shorten bundle for PHP

## How To Use/Demo

### Install

Install with Composer

```
composer require ozcat/url-box
```

### dwz.cn

```
$demo = new OzCat\Urlbox\Dwzcn();
$url = "http://url.com";
$bk = $demo->srt($url);
//Restore a url
$long = $demo->expand($bk);
echo $bk;
```
###is.gd

```
$demo = new OzCat\Urlbox\Isgd();
$url = "http://url.com";
$bk  = $demo->srt($url);
echo $bk;
```

###bit.ly 
You can get your own token at [bitly](http://dev.bitly.com/my_apps.html).
```
$demo = new OzCat\Urlbox\Bitly($key);
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
