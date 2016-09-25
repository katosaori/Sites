<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<style type="text/css">
header {
	width:100%;
	position: fixed;
	position: absolute;
	top:0px;
	height: 100px;
	border-bottom: 1px solid #555;
}

.semi_header{
	width:100%;
	border:solid 1px transparent;
}
.menu{
	height:auto;
	margin-top:100px;
	margin-left:200px;
	list-style-type: none;
}
.menu li{
	float:left;
	font-size: 1em;
}

.main{
	margin-top:100px;
}
.pool{
	text-align:center;
	margin-bottom:30px;
}
.mail_icon{
	margin-left:30px;
}
.title {
	float: left;
	height: 5px;
	line-height: 50px;
	width: 100%;
	text-align: center;
}

.title img{
	text-align:center;
}

.title h1 {
	margin: 0;
	font-size: 20px;
}

.title h1 a {
	color: #aaa;
	text-decoration: none;
}

.right{
	margin-top:100px;
}
.right img {
	float:left;
}

.left{
	margin-top:-180px;
}

.clearleft {
	clear:left;
}
li{
	list-style-type: none
}
li:hover {
	cursor:pointer;
	filter: alpha(opacity=60);        /* ie lt 8 */
	-ms-filter: "alpha(opacity=60)";  /* ie 8 */
	-moz-opacity:0.6;                 /* FF lt 1.5, Netscape */
	-khtml-opacity: 0.6;              /* Safari 1.x */
	opacity:0.6;
	zoom:1;
}

.right{
	margin-left:20px;
	width:600px;
}
.largephoto{
	margin-top:100px;
}


</style>
</head>
<body>
<?php
error_reporting(E_ALL);
header("Content-Type: text/html; charset=UTF-8");
include "./db.php";
include "./function.php";
if(isset($_GET['sean'])){
		$select_sean=$_GET['sean'];
}else{
		$select_sean='pool';
}
$menu_images=get_all();
$images_names=get_komono($select_sean);
$seans_names=seans($select_sean);
$group_array=get_by_group();

?>

<header>
		<div class="title"><a href="./index.php"><img src="./img/title.png" height="90px"></a></div>
		<a href="./mail.php" class="mail_icon"><img src="./menu/mail.png" width="30px"></a>
		<img src="./menu/6ac59f87.gif" width="30px">
		<div class="clearleft"></div>
</header>
<div class="semi_header">
<ul class="menu">
<?php
foreach($group_array as $id => $rec){
?>

 <li><a href="./images.php?sean=<?php echo $rec["group"];?>">
	<?php 
		if($rec["group"]=="pool"){
			echo "プール　";
		}elseif($rec["group"]=="gym"){
			echo "体育館　";
		}elseif($rec["group"]=="camp"){
			echo "キャンプ　";
		}elseif($rec["group"]=="home"){
			echo "いえ　";
		}elseif($rec["group"]=="hospital"){
			echo "病院　";
		}elseif($rec["group"]=="public"){
			echo "公共施設　";
		}elseif($rec["group"]=="school"){
			echo "学校　";
		}
?></a></li>
<?php
}
?>
</ul>

</div>
<div class="clearleft"></div>
<div class="pool">
<?php 
if($select_sean=="pool"){
echo '<img src="./menu/sptop_pool.png" style="width:500px;">';
}
?>
</div>
<div class="main">

<div class="right">

<?php
foreach($seans_names as $i){
	$count++;
	if($count%5 == 0){
		echo "<div class='clearleft'></div>";
		echo "<li>";
		}else{
			echo "<li>";
		}
		?>
		<img class="lists" src="./images/<?php echo $i['sean']?>" style="width:120px; height:80px;">
		</li>
		<?php
			}
		?>

</div>
<div class="left">
	<img class="largephoto" src="./images/<?php echo $seans_names[0]['sean']?>" style="width:600px;">
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('.lists').mouseover(function(){
		src=$(this).attr("src");
		$(".largephoto").attr("src",src);
	});
});
</script>
</div>
</body>
</html>
