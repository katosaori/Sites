<!DOCTYOE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="./css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script src="./js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="../sidr/stylesheets/jquery.sidr.light.css">
<link rel="stylesheet" type="text/css" href="example.css">
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

.top_menu li a {
	text-decoration: none;
	color:#FFF;
}

p{
	font-family: 'Arial', 'Tahoma', sans-serif
}

.top_img {
	text-align:center;
}

.top_img img{
	width:80%;
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
	height:100%;
	margin:0px;
	backgroud-color:#F0F;
	border:solid 1px transparent;
}
.enpitsu{
	width:100%;
	padding:30px;
	border:solid 1px transparent;
}

.picture{
	width:20%;
	float:left;
	border:solid 1px transparent;
	margin-left:10px;
}

</style>

<script type="text/javascript" charset="utf-8">
$(function(){
	$(".menu-toggle").on("click", function() {
		$(this).next().slideToggle();
	});
	$("a[rel^='prettyPhoto']").prettyPhoto();
});

</script>

<?php
error_reporting(E_ALL);
include "../db.php";
include "../function.php";
$enpitsu_works=get_all_from_enpitsu();
?>

</head>

<body onLoad="size1()">
<div class="main">
	<div class="top_menu">
		<ul>
			<li><a href="index.php"><p>トップ</p></a></li>
			<li><p>油絵</p></li>
			<li><a href="images.php"><p>パース</p></a></li>
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
	<div class="enpitsu">
	<?php
		$count=0;
		foreach($enpitsu_works as $i){
			if($count%4==0){
	?>
		<div class="clearleft"></div>
		<div class="picture">
			<a href="../enpitsu_s/<?php echo $i['image']?>" rel="prettyPhoto[01]"><img class="enpitsu" src="../enpitsu_s/<?php echo $i['image']?>"  class="thumb" /></a>
		</div>
	<?php
			}else{
	?>
		<div class="picture">
			<a href="../enpitsu_s/<?php echo $i['image']?>" rel="prettyPhoto[01]"><img class="enpitsu" src="../enpitsu_s/<?php echo $i['image']?>"  class="thumb" /></a>
		</div>
	<?php
			}
			$count++;
		}
	?>
	</div>
</div>
</body>
</html>

