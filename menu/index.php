<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<link rel="stylesheet" href="../sidr/stylesheets/jquery.sidr.light.css">

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

.space{
	margin-left:201px;
	margin-top:60px;
	width:70%;
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

.mainspace{
	width:70%;
}

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
.top_menu {
	width:100%;
}
.top_menu li {
	background
	width:30%;
	height:100px;
	float:left;
	border:solid 1px transparent;
}
.top_menu li img{
	width:300px;
}

.top_img {
	text-align:center;
}

.top_img img{
	width:80%;
}
</style>

<script>
(function (){
$( a ).bind( 'touchstart', function(){
	$( '#imagearea').attr( 'src','../menu/gym_on.png' );
  }).bind( 'touchend', function(){
	$( '#imagearea').attr( 'src','../menu/gym_off.png' );
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
$images_names=get_komono();
$seans_names=seans($select_sean);
?>

</head>

<body onLoad="size1()">
<div class="main">
<div class="top_menu">
<ul>
<li><img src="../menu/oyaki.png"></li>
<li><p>top</p></li>
<li><p>drawing</p></li>
</ul>
</div>
<div class="clearLeft"></div>
<img src="../menu/ohagi.png">
</ul>
</div>
<div class="top_img">
<img src="../menu/top_drawing_public.png">
</div>
<header>
	<div class="menu">
		<ul>
			<li class="gym_menu"><a href=""><img id="imagearea" src="../menu/gym_off.png" ></a></li>
			<li><a href=""><img src="../menu/home_off.png" ></a></li>
			<li><a href=""><img src="../menu/hospital_off.png" ></a></li>
			<li><a href=""><img src="../menu/school_off.png" ></a></li>
			<li><a href=""><img src="../menu/pool_off.png" ></a></li>
		</ul>
	</div>
	<img src="../menu/ohagi.png" >
</header>
<div class="top_img">
<img src="../menu/top_drawing_house.png">
</div>

<img src="../images/soup.jpg" width="100%"  alt="img2_thumb" class="thumb" />
<img src="../images/soup_tachikawa.jpg" width="100%"  alt="img2_thumb" class="thumb" />
<img src="../images/theGoal.jpg" width="100%"  alt="img2_thumb" class="thumb" />
<img src="../images/soup_markcity.jpg" width="100%"  alt="img2_thumb" class="thumb" />
<div class="mainpictures">
<?php
foreach($seans_names as $i){
?>
	<img src="../images/<?php echo $i['sean']?>" width="100%"  alt="img2_thumb" class="thumb" />
<?php
}?>

</div>


<div class="space">
<div id="owl-demo" class="owl-carousel owl-theme">

<?php
foreach($images_names as $i){
?>
<div class="item">
	<img class="lists" src="../img/<?php echo $i['image']?>" style="width:180px;">
</div>
<?php
}

?>
</div>
</div>
</div>
</body>
</html>

