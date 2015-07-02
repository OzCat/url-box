Url-box
===========

URL Shorten bundle for PHP

## How To Use/Demo

### Install

Install with Composer

```
composer require orvice/url-box

```

### dwz.cn

```
$demo = new Orvice\Urlbox\Dwzcn();
$url = "http://url.com";
$bk = $demo->srt($url);
//Restore a url
$long = $demo->expand($bk);
echo $bk;
```
###is.gd

```
$demo = new Orvice\Urlbox\Isgd();
$url = "http://url.com";
$bk  = $demo->srt($url);
echo $bk;
```

###bit.ly 
You can get your own token at [bitly](http://dev.bitly.com/my_apps.html).
```
$demo = new Orvice\Urlbox\Bitly($key);
$url = "http://url.com";
$bk  = $demo->srt($url);
//Restore a url
$long = $demo->expand($bk);
echo $bk;
```
