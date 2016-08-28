<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<link rel="stylesheet"href="owl-carousel/owl.carousel.css">
<link rel="stylesheet"href="owl-carousel/owl.theme.css">
<script src="js/jquery-1.11.0.min.js"></script>

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
		background-image:url(./pool_re.jpg);
		background-position:center center;
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-size:cover;
		background-color:#464646;

}

img {
	border: noen;
}

/************************************************************
header
*************************************************************/
header {
	width:100%;
	position: fixed;
	background: #222;
	position: absolute;
	top:0px;
	height: 50px;
	border-bottom: 1px solid #555;
}

header img {
	float:left;
	margin-left:20px;
}
.title {
	float: left;
	height: 5px;
	line-height: 50px;
	width: 100%;
	text-align: center;
}

.title h1 {
	margin: 0;
	font-size: 20px;
}

.title h1 a {
	color: #aaa;
	text-decoration: none;
}


.menu {
	width: 80%;
	opacity:0.7;
	color: #000;
	overflow: hidden;
	margin:0 auto;
}

.top_drawing {
	margin-left:300px;
	width:200px;
	background-color:white;
	border:solid 1px transparent;
	float:left;
}

.top_drawing img {
	width:180px;
	margin:10px;
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
	color:white;
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

.add_left01{left:10px;}
.add_left02{left:137px;}
.add_left03{left:200px;}
.add_left04{left:443px;}
 
 .content {
	width:478px;
	height:210px;
	border:#6CC 5px solid;
	background:#FFF;
	top:150px;
	padding:10px;
	position:absolute;
	z-index:100;
 }
.enpitsu_space{
	margin-left:310px;
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
		<div class="title"><h1><a href="">****</a></h1></div>
		<img src="./menu/mail.png" width="30px">
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
				<li><img src="./menu/list_thumb/hall_s.jpg" width="100"></li>
				<li><img src="./menu/list_thumb/hospital_s.png" width="100"></li>
				<li><img src="./menu/list_thumb/kyousitu0719_s.jpg" width="100"></li>
				<li><img src="./menu/list_thumb/pool01_s.jpg" width="100"></li>
				<li><img src="./menu/list_thumb/zashiki_s.png" width="100"></li>
			</ul>
			</div>
		<li class="liposition02">弟の置物</li>
			<div class="content">
				<div class="triangle add_left02"></div>
				<ul>
					<li><img src="./zoom/thmb/kabin_thmb.png" width="100"></li>
					<li><img src="./zoom/thmb/kabin2_thmb.png" width="100"></li>
					<li><img src="./zoom/thmb/okimono_thmb.png" width="100"></li>
					<li><img src="./zoom/thmb/pentate1_thmb.png" width="100"></li>
					<li><img src="./zoom/thmb/tsumayouji_thmb.png" width="100"></li>
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

