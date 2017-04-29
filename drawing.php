<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<link rel="stylesheet"href="owl-carousel/owl.carousel.css">
<link rel="stylesheet"href="owl-carousel/owl.theme.css">
<link rel="stylesheet" type="text/css" href="./css/header.css" media="all">
<script src="js/jquery-1.11.0.min.js"></script>

<meta charset="UTF-8">
<style type="text/css">
/************************************************************
html body area
*************************************************************/

//master test
html {
	font-family:'Lucida Grande','Hiragino Kaku Gothic ProN',
	Meiryo, sans-serif;
}

body {
		margin:0;
		padding: 0;
		background-position:center center;
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-size:cover;
		background-color:#fff;
}

img {
	border: noen;
}

.top_drawing {
	float:left;
	width:900px;
	margin-left:100px;
	background-color:white;
	border:solid 1px transparent;
	float:left;
}

.top_drawing img {
	width:700px;
	margin:10px;
}

.pasu_box{
	width:200px;
	float:left;
}
.pasu_box img{
	width: 200px;
	border-radius: 200px;
	-webkit-border-radius: 200px;
	-moz-border-radius: 200px;
}

a.pasu_boxa:hover img{
	cursor:pointer;
	filter: alpha(opacity=60);        /* ie lt 8 */
	-ms-filter: "alpha(opacity=60)";  /* ie 8 */
	-moz-opacity:0.6;                 /* FF lt 1.5, Netscape */
	-khtml-opacity: 0.6;              /* Safari 1.x */
	opacity:0.6;
	zoom:1;
}
.main {
	//background-image: url("./gim.jpg");no-repeat center center fixed;
	width:1400px;
	margin-bottom:30px;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	overflow: hidden;
}
.menutitle{border:solid 1px 000;width:79%;}

.list{
	margin-top:100px;
}

.lists{
	border-radius: 50%;
	width: 100px;
	height: 100px;
	background-color:rgba(0,0,255,0.9);
	margin-left:30px;
	float:left;
}

.mainspace{
	width:70%;
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
	color:#000;
	margin-right:30px;
	border-bottom:solid 2px white;
}

.yoko li a {
	text-decoration:none;
}


.clearleft{
	clear:left;
	font-size:400%;
}

.center{
	float:left;
}
.demo{
	width:100%;
	float:left;
	opacity:1;
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

.full_content ul li{
	display:block !important;
	cursor: pointer;
	color:#FFF;
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

.add_left01{left:10px;top:-10px;}
.add_left02{left:137px;top:-10px;}
.add_left03{left:200px;top:-10px;}
.add_left04{left:443px;top:-10px;}
 
 .content {
	width:700px;
	height:210px;
	border:#6CC 5px solid;
	background:#FFF;
	top:170px;
	padding:10px;
	position:absolute;
	z-index:100;
 }
.textspace {
	width:100%;
	color:#000;
	overflow: hidden;
	margin-left:100px;
}

.textsblock{
	margin-left:30px;
	width:200px;
	float:left;
}
.textsblock:hover {
	cursor:pointer;
	filter: alpha(opacity=60);        /* ie lt 8 */
	-ms-filter: "alpha(opacity=60)";  /* ie 8 */
	-moz-opacity:0.6;                 /* FF lt 1.5, Netscape */
	-khtml-opacity: 0.6;              /* Safari 1.x */
	opacity:0.6;
	zoom:1;
}


.enpitsu_space{
	width:100%;
}

.enpitsu {
	width:50%;
	margin-left:10px;
}

.picture{
	padding:30px;
	background:#fff;
	border:solid 1px #000;
	width:40%;
	margin-left:20px;
	margin-top:20px;
	border-radius: 10px;        /* CSS3草案 */  
	-webkit-border-radius: 10px;    /* Safari,Google Chrome用 */  
	-moz-border-radius: 10px; 
	float:left;
}


</style>

<script type="text/javascript">
$ (function(){
	$ (".content").hide();
	$("li").mouseout(function(){  
		$ (".content").fadeOut("slow");
		$ ("li").removeClass("hover");
	}); 
	$ ("li").mouseover(function(){
		var cla = $(this).attr('class');
		var Left = $(this).offset().left+"px";
		$ (this).addClass("hover");
		$ ("li.hover + .content").fadeIn("slow");
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
$enpitsu_works=get_all_from_enpitsu();
?>

</head>

<body onLoad="size1()">
<div class="main">
	<header>
		<div class="title"><img src="./img/title.png" height="90px"></div>
		<a href="./mail.php" class="mail_icon"><img src="./menu/mail.png" width="30px"></a>
		<img src="./menu/6ac59f87.gif" width="30px">
		<div class="clearleft"></div>
	</header>
	<ul class="yoko full_content">
		<li class="liposition01">パース作品</li>
			<div class="content">
			<div class="triangle add_left01"></div>
			<ul>
				<li><a href="./images.php?sean=pool"><img src="./menu/list_thumb/hall_s.jpg" width="100"></a></li>
				<li><a href="./images.php?sean=pool"><img src="./menu/list_thumb/hospital_s.png" width="100"></a></li>
				<li><a href="./images.php?sean=pool"><img src="./menu/list_thumb/kyousitu0719_s.jpg" width="100"></a></li>
				<li><a href="./images.php?sean=pool"><img src="./menu/list_thumb/pool01_s.jpg" width="100"></a></li>
				<li><a href="./images.php?sean=pool"><img src="./menu/list_thumb/zashiki_s.png" width="100"></a></li>
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

	<div class="enpitsu_space">
	<?php
		$count=0;
		foreach($enpitsu_works as $i){
			if($count%2==0){
	?>
		<div class="clearleft"></div>
		<div class="picture">
			<img class="enpitsu" src="../enpitsu/<?php echo $i['image']?>"  class="thumb" />
		</div>
	<?php
			}else{
	?>
		<div class="picture">
			<img class="enpitsu" src="../enpitsu/<?php echo $i['image']?>"  class="thumb" />
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

