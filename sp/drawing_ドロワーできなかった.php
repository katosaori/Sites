<!DOCTYOE html>
<html lang="ja">
<head>
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

.menu li{
	width:50%;
	height:200px;
	font-size:200%;
	color:#000;
	text-align:center;
	float:left;
}

.menu li a{
	text-decoration: none;
}
.clearLeft{
	clear:left;
	font-size:400%;
}
</style>
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

<script src="../drawer-master/dist/js/jquery.min.js"></script>
<script src="http://cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.1/dropdown.min.js"></script>
<script src="../drawer-master/dist/js/jquery.drawer.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$(".drawer").drawer();
});
</script> 

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="../drawer-master/dist/css/drawer.min.css">
</head>


<body class="drawer">

<button  class="drawer-toggle drawer-hamberger">
	<span class="sr-only">toggle navigation</span> 
	<span class="drawer-hamberger-icon"></span>
</button>


<div class="drawer-main drawer-default">
<nav class="drawer-nav" role="navigation">
<ul class="nav drawer-nav-list">
<li><a href="#">リスト1</a></li>
<li><a href="#">リスト2</a></li>
<li><a href="#">リスト3</a></li>
</ul>
</nav>
</div>

<section class="drawer-overlay">
<header>
	<div class="menu">
		<ul>
			<li><a href=""><img src="../images/oekaki.jpg" width="200px"></a></li>
			<li><a href="">picture</a></li>
			<li><a href="">blog</a></li>
			<li><a href="">tips</a></li>
		</ul>
	</div>
</header>
<div class="mainpictures">
	<img src="../crokky/mori2.jpg" width="100%"  alt="img2_thumb" class="thumb" />
	<img src="../crokky/gaT.jpg" width="100%"  alt="img2_thumb" class="thumb" />
	<img src="../crokky/_MG_9104.jpg" width="100%"  alt="img2_thumb" class="thumb" />
	<img src="../crokky/_MG_9107.jpg" width="100%"  alt="img2_thumb" class="thumb" />
	<img src="../crokky/_MG_9114.jpg" width="100%"  alt="img2_thumb" class="thumb" />
	<img src="../crokky/_MG_9116.jpg" width="100%"  alt="img2_thumb" class="thumb" />

</div>


<div class="space">
<div id="" class="">

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
</section>

</body>
</html>

