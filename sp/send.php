<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=“viewport” content=“initial-scale=1”>
<link rel="stylesheet" href="../sidr/stylesheets/jquery.sidr.light.css">
<link href="../css/jquery.bxslider.css" rel="stylesheet" />
<link href="./css/topmenu.css" rel="stylesheet" />
	</div>

<meata charset="UTF-8">
<style type="text/css">
/************************************************************
html body area
*************************************************************/
html {
	font-family:'Lucida Grande','Hiragino Kaku Gothic ProN',
	Meiryo, sans-serif;
}

body {
	margin:0;
	padding: 0;
	background: #f0f0f0;
}
/************************************************************
menu area
*************************************************************/
.menu {
	width:100%:
}
.menu li{
	width:30%;
	height:200px;
	font-size:200%;
	color:#000;
	text-align:center;
	float:left;
	border:solid 1px transparent;
}


.menu li a{
	text-decoration: none;
}
#menu li a{
	text-decoration: none;
}
.menu li img{
	width:300px;
}


.rotate{
	transform:rotate(-45deg);
	width:200px;
}

.clearLeft{
	clear:left;
	font-size:400%;
}


p { font-family: 'Arial', 'Tahoma', sans-serif }


.top_img {
	text-align:center;
}

.top_img img{
}

.page-top {
	width:300px;
	position: fixed;
	bottom: 60px;
	right: 40px;
	padding: 10px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	font-size: 12px;
}

.page-top img{
	width:300px;
}

/***********************************************************
toggle menu
************************************************************/

#top-editarea{
 background: #dcdcdc;/*外側の背景*/
 text-align: right;/*MENUの文字の位置*/
 position: fixed;
 top: 0;
 width: 100%;
 z-index: 10;
}
#top-editarea .section{
 margin: 0;
  width: 100%;
}
.menu-toggle{
	 color: #000;/*MENUの文字色*/
	  display: block;
	   padding: 5px;
	   font-size: 4em;
	margin-top:0px;

}
#menu {
 position:absolute;
 width:100%;
 background-color:#000;
 opacity: 0.9;
 display: none;
 padding: 0;
 margin: 0;
 z-index:3;
}
#menu li{
 list-style-type: none;
  background: #f5f5f5;/*リストの背景色*/
   margin: 0 auto;
}
#menu li a {
 color: #444444;/*リストの文字色*/
  font-weight: bold;
   display: block;
    padding: 7px;
	 text-align: left;/*リストの文字の位置*/
}

.textspace{
	margin-top:30px;
	border:solid 1px transparent;
}
.textsblock{
	width:40%;
	float:left;
	margin-top:20px;
	margin-bottom:20px;
	padding:20px;
	margin-left:30px;
	background-color:#fff;
	border:solid 1px #000;
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px; 
}
.block {
	border: #ffb6c1 solid 1px;
	border-left: #ffb6c1 solid 10px;
	padding: 0px;
	background: #fff;
}
.contents img{
	float:left;
}


/************************************************************
second area
*************************************************************/

.space{
	margin-left:201px;
	margin-top:60px;
	width:70%;
}
/************************************************************
main area
*************************************************************/
.overlay{
	z-index:1;
}
.main{
	width:100%;
	margin:0px;
}


.lists{
	float:left;
}


#form_space{
	width: 100%;
	border:solid 1px transparent;
	margin:auto;

}
#demo {
	width:100%;
	text-align:center;
}
#demo ul {
	list-style:none;
	margin:0; padding:0;
}
#demo li {
	list-style:none;
	margin:0; padding:6px;
	clear:both;
}
#demo label {
	display:block;
	font-weight:bold;
	color:#666;
	margin-left:30px;
	width:30%;
	float:left;
	text-align:left;
	font-size:200%;
}
#demo li span {
	float:left;
	width:45%;
	margin:0 5px 0 0; padding:0;
}
#demo li span label {
	color:#999;
	font-weight:normal;
	background-color:#99ccff;
}
#demo input#name{
	width:60%;
	font-size:20px;
}
#demo textarea {
	background:#fff url(/content/img/css/fieldborder.png) repeat-x 0 0;
	border:1px solid #ddd;
	border-top-color:#ccc;
	border-left-color:#ccc;
	padding:3px;
}
#demo textarea {
	width:45%;
	font-size:20px;
}
#demo input#email {
	width:60%;
	font-size:20px;
}


#btn_submit {
	width: 80%;
	margin-top:100px;
	padding: 5px;
	background: -webkit-gradient(linear, left top, left bottom, from(#FFAA33), to(#FF8800));	
	border: 1px #F27300 solid;
	color: #FFF;
	-webkit-appearance: none;
	-webkit-border-radius: 10px;
	-webkit-box-shadow: 0 2px 2px #CCC;
	text-shadow: 1px 2px 3px #C45C00;
	height:100px;
	font-size:200%;
}

</style>

<script>

$(function() {

	var pageTop = $('.page-top');
		pageTop.hide();
		$(window).scroll(function () {
		if ($(this).scrollTop() > 600) {
			pageTop.fadeIn();
		} else {
			pageTop.fadeOut();
		}
	});
	pageTop.click(function () {
	$('body, html').animate({scrollTop:0}, 500, 'swing');
		return false;
	});
	var url = location.href;
	parameters = url.split("?");
	param = parameters[1];
});

</script>

<script type="text/javascript">
$(document).ready(function(){
	$('.bxslider').bxSlider({
	hideControlOnEnd: 'true',
	auto: 'true',
	});
});

$(function(){
	$(".menu-toggle").on("click", function() {
		$(this).next().slideToggle();
	});
});

</script>

<?php
error_reporting(E_ALL);
include "../db.php";
include "../function.php";
if(isset($_GET['sean'])){
	$select_sean=$_GET['sean'];
}else{
	$select_sean='school';
}
$menu_images=get_all();
$images_names=get_komono($select_sean);
$seans_names=seans($select_sean);
$top_images=get_top_image($select_sean);

$message = "名前：" . $_POST["name"] . "\n本文：" . $_POST["message"];

$message_=mb_encode_mimeheader($message, 'UTF-8');
if (!mb_send_mail("alps.sha@i.softbank.jp", $_POST["subject"], $message_, "From: " . $_POST["mail"])) {
	exit("error");
}

?>

</head>

<body onLoad="size1()">
<div class="main">
	<div class="top_menu">
		<ul>
			<li><a href="index.php"><p><img src="../menu/title_white.png" height="90px"></p></a></li>
			<li><a href="drawing.php"><p><img src="../menu/sp_enpitu_mokutan.png" height="90px"></p></li>
			<li><a href="images.php"><p><img src="../menu/sp_pasu.png" height="90px"></p></a></li>
		</ul>
	</div>

		<span class="menu-toggle"><i class="blogicon-reorder lg"></i>≡</span>
		<ul id='menu'>
		<li><a href='./zoom.php'><img src="../zoom/kabin.png" width="200px">かびん　おきもの</a></li>
		<li><a href=''><img src="../img/kabuto.png" width="300px">でっさん</a></li>
		<li><a href=''><img src="../img/mesukuwagata.png" width="300px">しゃしん</a></li>
		<li><a href=''><img src="../zoom/okimono.png" width="200px">しゃしん２</a></li>
		<li><a href=''><img src="../zoom/tsumayouji.png" width="200px">しゃしん３</a></li>
		</ul>


	<div class="clearLeft"></div>
	<div class="overlay"> <!-- オーバーレイのとこ -->


	</d>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>sample</title>
	</head>
	<body>
	<p>メールが送信されました。</p>
	<div><!--オーバーレイおわり-->
</body>
</html>

