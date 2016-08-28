<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<link rel="stylesheet" href="../sidr/stylesheets/jquery.sidr.light.css">
<link rel="stylesheet" href="../sidr/stylesheets/jquery.sidr.light.css">
<link href="../css/jquery.bxslider.css" rel="stylesheet" />

<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
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

.gym_menu {
}
.gym_menu.hover{

}
.menu li a{
	text-decoration: none;
}

.menu li img{
	width:300px;
}

.clearLeft{
	clear:left;
	font-size:400%;
}

.top_menu{
	width:100%;
	margin:0px;
	height:100px;
	border:solid 1px #000;
	background-color:#000;
}
.top_menu ul{
	margin-top:0px;
	width:100%;
	text-align:center;
	background-color:#000;
}

.top_menu li {
	background-color:#000;
	width:30%;
	height:100px;
	float:left;
	border-right:solid 1px #000;
	text-align:center;
	color:#FFF;
}
.top_menu p{
	font-size: 4em;
	margin-top:0px;

}
.top_menu a {
	text-decoration: none;
}

p { font-family: 'Arial', 'Tahoma', sans-serif }


.top_img {
	text-align:center;
}

.top_img img{
	width:80%;
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
.main{
	width:100%;
	border:solid 1px #000;
	margin:0px;
	backgroud-color:#F0F;
}
.mainpictures{
	margin-top:60px;
	width:100%;
	text-align:center;
}
.b_mainpic{
	float:left;
}
.s_mainpic{
	width:200px;
	height:350px;
	float:left;

}

.mainpicClass{
	margin-top:20px;
	width:95%;
}
.items{
	background:#ccc;
}

.item{
	background: #fff;
	height: 190px;
	width: 190px;
	border-radius: 50%;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border:solid 1px transparent;
	margin-left:30px;
	margin-top:30px;
	padding-top:30px;
	float:left;
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
	$select_sean='pool';
}
$menu_images=get_all();
$images_names=get_komono($select_sean);
$seans_names=seans($select_sean);
?>

</head>

<body onLoad="size1()">
<div class="main">
	<a href="#" class="page-top"><img src="../menu/oyaki.png"></a>
	<div class="top_menu">
		<ul>
			<li><a href="./index.php"><p>トップ</p></a></li>
			<li><p>パース</p></li>
			<li><a href="./drawing.pho"><p>デッサン</p></a></li>
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
	<div class="top_img">
        <?php if($select_sean=='pool'){
			echo '<img src="../menu/top_drawing_pool.png">';
              }else if($select_sean=='gym'){
                echo '<img src="../menu/top_drawing_taikukan.png">';
              }else if($select_sean=='public'){
                echo '<img src="../menu/top_drawing_house.png">';
              }else if($select_sean=='hospital'){
                echo '<img src="../menu/top_drawing_public.png">';
              }else if($select_sean=='school'){
                echo '<img src="../menu/top_drawing_toilet.png">';
              }else if($select_sean=='home'){
                echo '<img src="../menu/top_drawing_ga.png">';
			  }

         ?>
              
	</div>
	<header>
		<div class="menu">
			<ul>
				<li><a href="images.php?sean=gym"><img src="../menu/gym_off.png" ></a></li>
				<li><a href="images.php?sean=home"><img src="../menu/home_off.png" ></a></li>
				<li><a href="images.php?sean=hospital"><img src="../menu/hospital_off.png" ></a></li>
				<li><a href="images.php?sean=school"><img src="../menu/school_off.png" ></a></li>
				<li><a href="images.php?sean=pool"><img src="../menu/pool_off.png" ></a></li>
			</ul>
		</div>
	</header>

	<div class="mainpictures">
	<?php
		foreach($seans_names as $i){
	?>
	<img class="mainpicClass" src="../images/<?php echo $i['sean']?>" width="100%"  alt="img2_thumb" class="thumb" />
	<?php
	}?>
		<div class="items">
			<?php
				foreach($images_names as $i){
			?>
			<div class="item">
				<img class="lists" src="../img/<?php echo $i['image']?>" style="width:160px;">
			</div>
			<?php
			}
			?>
		</div>
</div>
</body>
</html>

