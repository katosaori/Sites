<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
	list-style-type: none;
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
	border:solid 1px #ccc;

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
	border:solid 1px transparent;
	margin:0px;
	backgroud-color:#F0F;
}
.mainpictures{
	margin-top:60px;
	width:100%;
	text-align:center;
}
.mainpictures img{
	width:80%;
	margin-top:10px;
}
.b_mainpic{
	float:left;
}
.s_mainpic{
	width:200px;
	height:350px;
	float:left;

}

.mainspace{
	width:70%;
}

.item{
	width:80%;
	border:solid 1px transparent;
}
.lists{
	float:left;
}

.otoiawase{
	position: absolute;
	left: 30;
}
.text{
	float:right;
}
.footer{
	border:solid 1px transparent;
	margin-top:10px;
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
		<li><a href=''><img src="../menu/tanabata1_1.png" width="150px">-----</a></li>
		<li><a href=''><img src="../menu/tanabata1_2.png" width="150px">-----</a></li>
		<li><a href=''><img src="../menu/tanabata1_3.png" width="150px">-----</a></li>
		<li><a href=''><img src="../menu/tanabata1_4.png" width="150px">-----</a></li>
		<li><a href=''><img src="../menu/tanabata1_1.png" width="150px">-----</a></li>
		</ul>


	<div class="clearLeft"></div>
	<div class="overlay"> <!-- オーバーレイのとこ -->
	<div class="top_img">
	<ul class="bxslider">
		<li><img src="../images/01.jpg" /></li>
		<li><img src="../images/02.jpg" /></li>
		<li><img src="../images/03.jpg"  width="100%"/></li>
		<li><img src="../images/04.jpg" /></li>
		<li><img src="../images/05.png"  width="100%"/></li>
	</ul>

	</div>
	<header>
		<div class="menu">
			<ul>
				<li><a href="./images.php?sean=gym"><img src="../menu/gym_off.png" ></a></li>
				<li><a href="./images.php?sean=home"><img src="../menu/home_off.png" ></a></li>
				<li><a href="./images.php?sean=hospital"><img src="../menu/hospital_off.png" ></a></li>
				<li><a href="./images.php?sean=school"><img src="../menu/school_off.png" ></a></li>
				<li><a href="./images.php?sean=pool"><img src="../menu/pool_off.png" ></a></li>
				<li><a href=""><img class="rotate" src="../img/osukuwagata.png" ></a></li>
			</ul>
		</div>
	</header>
	<img src="../img/zeri.png" width="100%">
<?php
	$file = file("makingmemos/makingmemo.html");
?> 
	<div class="textspace">
	<div class="textsblock">
		<div class="block">
			<a href="./memo.php"><p><?php echo $file[1];?></p></a>
		</div>
		<div class="contents">
			<img src="../menu/sample.jpeg" width="100px">
			<p><?php echo $file[2];echo $file[3];echo $file[4];?></p>
			<div class="clearLeft"></div>
		</div>
	</div>
	<div class="textsblock">
		<div class="block">
			<p>タイトル2</p>
		</div>
		<div class="contents">
			<img src="../menu/sample.jpeg" width="100px">
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			<div class="clearLeft"></div>
		</div>
	</div>
	<div class="textsblock">
		<div class="block">
			<p>タイトル３</p>
		</div>
		<div class="contents">
			<img src="../menu/sample.jpeg" width="100px">
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			<div class="clearLeft"></div>
		</div>
	</div>
	<div class="textsblock">
		<div class="block">
			<p>タイトル４</p>
		</div>
		<div class="contents">
			<img src="../menu/sample.jpeg" width="100px">
			<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			<div class="clearLeft"></div>
		</div>
	</div>
	</div>

	<div class="clearLeft"></div>
</div>


</div>
<div class="footer">
	<a href="./mail.php" class="otoiawase"><img src="../menu/mail.png"></a>
	<a href="./login.php" class="text"><img src="../menu/6ac59f87.gif" width="300px"></a>

</div>
</div><!--オーバーレイおわり-->
</body>
</html>

