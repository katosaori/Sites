<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="./css/header.css" media="all">
<link rel="stylesheet"href="owl-carousel/owl.carousel.css">
<link rel="stylesheet"href="owl-carousel/owl.theme.css">
<link rel="stylesheet" href="css/jqzoom.css" type="text/css">
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.jqzoom-min.js" type="text/javascript"></script>
<meta charset="UTF-8">
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
		background-attachment:fixed;
		background-size:cover;

}

img {
	border: noen;
}

/************************************************************
header
*************************************************************/

.menu {
	width: 80%;
	opacity:0.7;
	color: #000;
	overflow: hidden;
	margin:0 auto;
}

.main {
	//background-image: url("./gim.jpg");no-repeat center center fixed;
	width:100%;
	margin-bottom:30px;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
.menutitle{border:solid 1px 000;width:79%;}
.list{
	margin-top:100px;}
}
.lists{
	border-radius: 50%;
	width: 100px;
	height: 100px;
	background-color:rgba(0,0,255,0.9);
}

.mainspace{
	width:70%;
}
#menu{
	width:300px;
	position:fixed;
	position:absolute;
	top:50px;
	left:0px;
	height: 100%;
	overflow: auto;
	opacity:0.7; 
	z-index:3;
}

#menu ul li{
	border-bottom:solid 1px #999;
	list-style-type: none; 
}

.yoko {
	margin-top:100px;
	margin-left:500px;
}
.yoko li{
	float:left;
	color:black;
	margin-right:30px;
	border-bottom:solid 2px white;
}



.clearleft{
	clear:left;
	font-size:400%;
}

.demo{
	width:500px;
	height:250px;
	float:left;
	opacity:0.7;
	border-radius: 10px;		/* CSS3草案 */
	-webkit-border-radius: 10px;	/* Safari,Google Chrome用 */
	-moz-border-radius: 10px;	/* Firefox用 */
	background-color:white;
	margin-top:10px;
	margin-left:30px;
}

.not_opacity{
	opacity:1.0;
}

.komonos li {
	float:left;
}

.full_content {
}
.full_content ul li{
	display:block !important;
	cursor: pointer;
	color:#000;
}

.full_content ul li:first-child {
}
.full_content ul {
}
.hover {
	background:#6CC;
	font-weight:bold;
}
.triangle { 
	width:0px;
	height:0px;
	border-left:10px solid transparent; 
	border-right:10px solid transparent;
	border-bottom:30px solid #6CC; 
	left:35px;
	top:-35px;
	position:absolute;
}

.add_left01{left:10px;}
.add_left02{left:137px;}
.add_left03{left:200px;}
.add_left04{left:443px;}
 
 .content {
	width:478px;
	height:210px;
	border:#6CC 5px solid;
	background:#FFF;
	top:180px;
	padding:10px;
	position:absolute;
	z-index:100;
 }

.jqzoom3 img { border: 3px solid #888; }
.clr{display:block; clear:both;}
div#thumblist{margin-top:3em;}
div#thumblist a{display:inline-block; margin:0 4px; border:1px dashed #888;}
div#thumblist a.zoomThumbActive{ border:2px solid #0001da; }

.zoom_space{
	border:solid 1px transparent;
	margin-left:300px;
	margin-top:100px;
	width:800px;
}
</style>

<script type="text/javascript">
$(document).ready(function() {
  $('.jqzoom3').jqzoom({
    zoomType: 'standard',
    preloadImages: false,
    alwaysOn: true,
    title: false
  });
});
</script>
<script type="text/javascript">
$(function(){
	$.fn.eventDelay = function(delay, triger, cancel, callback) {
		return this.each(function() {
			var target = $(this);
			var tid;
			target.bind(triger, function(){
				tid = setTimeout(callback, delay * 1000)
			})
			target.bind(cancel, function(){
				clearTimeout(tid)
			})
		});
	}

	$ (".content").hide();
	$(".yoko > li").eventDelay(2,'mouseover','mouseout',function(){
		if($(".content").mouseout){
			$(".content").fadeOut("slow");
			$("li").removeClass("hover");
		}
	});
	$("*").not(".yoko > li").click(function(){
		$(".content").fadeOut("slow");
	});
	var self;
	$(".yoko > li").mouseover(function(){
		$(this).addClass("hover");
		$("li.hover + .content").fadeIn("slow");
		var arr=[];
		arr = $(".yoko").children("li").not($(this)).next('.content');
		$.each(arr,function(i,value){
		$(value).fadeOut();
		$(value).prev("li").removeClass("hover");
	});

	});
});

</script>


<?php
error_reporting(E_ALL);
include "db.php";
include "function.php";
if(isset($_GET['sean'])){
	$select_sean=$_GET['sean'];
}else{
	$select_sean='pool';
}
$menu_images=get_all();
$images_names=get_komono($select_sean);
$seans_names=seans($select_sean);
?>

</head>

<body onLoad="size1()">
<div class="main">
	<header>
		<div class="title"><a href="./index.php"><img src="./img/title.png" height="90px"></a></div>
		<a href="./mail.php" class="mail_icon"><img src="./menu/mail.png" width="30px"></a>
		<img src="./menu/6ac59f87.gif" width="30px">
		<div class="clearleft"></div>
	</header>
	<div id="menu">
		<ul>
		<?php
			foreach($menu_images as $i){
		?>
		<a href="./chuukan.php?sean=<?php echo $i['group']?>"><li><img class="lists" src="./images/<?php echo $i['image']?>" style="width:100px;"><p><?php echo $i['title']?></p></li></a>
		<?php
		}
		?>
		</ul>
	</div>
	<ul class="yoko full_content">
		<li class="liposition01">パース作品</li>
			<div class="content">
			<div class="triangle add_left01"></div>
			<ul>
				<li><a href="./sp/images.php?sean=pool"><img src="./menu/list_thumb/hall_s.jpg" width="100"></a></li>
				<li><a href="./sp/images.php?sean=pool"><img src="./menu/list_thumb/hospital_s.png" width="100"></a></li>
				<li><a href="./sp/images.php?sean=pool"><img src="./menu/list_thumb/kyousitu0719_s.jpg" width="100"></a></li>
				<li><a href="./sp/images.php?sean=pool"><img src="./menu/list_thumb/pool01_s.jpg" width="100"></a></li>
				<li><a href="./sp/images.php?sean=pool"><img src="./menu/list_thumb/zashiki_s.png" width="100"></a></li>
			</ul>
			</div>
		<li class="liposition02">置物</li>
			<div class="content">
				<div class="triangle add_left02"></div>
				<ul>
					<li><a href="./zoom.php"><img src="./zoom/thmb/kabin_thmb.png" width="100"></a></li>
					<li><a href="./zoom.php"><img src="./zoom/thmb/kabin2_thmb.png" width="100"></a></li>
					<li><a href="./zoom.php"><img src="./zoom/thmb/okimono_thmb.png" width="100"></a></li>
					<li><a href="./zoom.php"><img src="./zoom/thmb/pentate1_thmb.png" width="100"></a></li>
					<li><a href="./zoom.php"><img src="./zoom/thmb/tsumayouji_thmb.png" width="100"></a></li>
				</ul>
			</div>

		<li class="liposition03">デッサン</li>
			<div class="content">
				<div class="triangle add_left03"></div>
				<ul>
				<li><img src="./menu/list_thumb/dessan_1_s.jpg" width="100"></li>
				<li><img src="./menu/list_thumb/dessan_2_s.jpg" width="100"></li>
				<li><img src="./menu/list_thumb/dessan_3_s.jpg" width="100"></li>
				<li><img src="./menu/list_thumb/dessan_4_s.jpg" width="100"></li>
				<li><img src="./menu/list_thumb/dessan_5_s.jpg" width="100"></li>
				</ul>
			</div>
		<li class="liposition04">その他</li>
	</ul>
	<div class="clearleft"></div>
	<div class="zoom_space">
	<div class="zoom">
		<a href="./zoom/kabin.png" class="jqzoom3" rel='gal1' title="JQZoom Gallery">
			<img src="./zoom/kabin.png" alt="JQZoom Gallery" width="300px"/>
		</a>
	</div>
	<br class="clr"/>
	<div id="thumblist">
		<a class="zoomThumbActive" href='#' rel="{gallery: 'gal1', smallimage: './zoom/kabin.png',largeimage: './zoom/kabin.png'}" title="img1 jqzoom gallery"><img src='./zoom/thmb/kabin_thmb.png' alt="img1 jqzoom gallery" width="100px" /></a>
		<a href='#' rel="{gallery: 'gal1', smallimage: './zoom/tsumayouji.png',largeimage: './zoom/tsumayouji.png'}" title="img2 jqzoom gallery"><img src='./zoom/thmb/tsumayouji_thmb.png' alt="img2 jqzoom gallery" width="100px"/></a>
		<a  href='#' rel="{gallery: 'gal1', smallimage: '/zoom/okimono.png',largeimage: './zoom/okimono.png'}" title="img3 jqzoom gallery"><img src='./zoom/thmb/okimono_thmb.png' alt="img3 jqzoom gallery" width="100px" /></a>
		<a  href='#' rel="{gallery: 'gal1', smallimage: '/zoom/onooki2.png',largeimage: './zoom/onooki2.png'}" title="img4 jqzoom gallery"><img src='./zoom/thmb/onooki2_thmb.png' alt="img3 jqzoom gallery" width="100px" /></a>
	<a  href='#' rel="{gallery: 'gal1', smallimage: '/zoom/pentate1.png',largeimage: './zoom/pentate1.png'}" title="img4 jqzoom gallery"><img src='./zoom/thmb/pentate1_thmb.png' alt="img3 jqzoom gallery" width="100px" /></a>
	<a  href='#' rel="{gallery: 'gal1', smallimage: '/zoom/pentate2.png',largeimage: './zoom/pentate2.png'}" title="img4 jqzoom gallery"><img src='./zoom/thmb/pentate2_thmb.png' alt="img3 jqzoom gallery" width="100px" /></a>


	</div>
	</div>



</div>
</body>
</html>

