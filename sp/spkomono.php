<!DOCTYOE html>
<html lang="ja">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
p {
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
	border:solid 1px #000;
	margin:0px;
	backgroud-color:#F0F;
}
.enpitsu{
	width:100%;
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

<script>
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
$enpitsu_works=get_all_from_enpitsu();
$allimages_names = get_all_komono();
?>

</head>
<script src="../js/jquery-1.11.0.min.js"></script>
<script src="../js/lightbox.js"></script>
<link href="../css/lightbox.css" rel="stylesheet">

<body onLoad="size1()">
<div class="main">
	<div class="top_menu">
		<ul>
			<li><p>ペインティング</p></li>
			<li><p>パース</p></li>
			<li><p>デッサン</p></li>
		</ul>
	</div>
		<span class="menu-toggle"><i class="blogicon-reorder lg"></i>≡</span>
		<ul id='menu'>
		<li><a href=''><img src="../img/kabuto.png" width="300px"><img src="../img/mesukuwagata.png" width="300px"><img src="../img/osukuwagata.png" width="300px">かびん　おきもの</a></li>
		<li><a href=''><img src="../img/kabuto.png" width="300px"><img src="../img/mesukuwagata.png" width="300px">でっさん</a></li>
		<li><a href=''><img src="../img/kabuto.png" width="300px"><img src="../img/mesukuwagata.png" width="300px">しゃしん</a></li>
		<li><a href=''><img src="../img/kabuto.png" width="300px"><img src="../img/mesukuwagata.png" width="300px">しゃしん２</a></li>
		<li><a href=''><img src="../img/kabuto.png" width="300px"><img src="../img/mesukuwagata.png" width="300px">しゃしん３</a></li>
		</ul>


	<div class="clearLeft"></div>
	<header>
	</header>
	<div class="bigimages">
		<img src="../img/ハムスター小屋.jpg" width="100%">
		<img src="../img/虫小屋.jpg" width="100%">
		<img src="../img/水槽.jpg" width="100%">
	</div>
<?php
$count = 0;
foreach($allimages_names as $i){
	$count++;
	if($count%5 == 0){
					echo "<div class='clearleft'></div>";
					echo "<li>";
				}else{
					echo "<li>";
				}
		?>
		<a href="../img/<?php echo $i['allimage']?>" data-lightbox="group2" data-title="My caption" ><img class="lists" src="../img/<?php echo $i['allimage']?>" style="width:500px;" ></a>
		</li>
		<?php
			}
		?>



</div>
</body>
</html>

