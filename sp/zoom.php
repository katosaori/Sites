<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Example JQZoom - Image Gallery</title>
<link rel="stylesheet" href="css/jqzoom.css" type="text/css">
<style type="text/css">
.jqzoom3 img { border: 3px solid #888; }
.clr{display:block; clear:both;}
div#thumblist{margin-top:3em;}
div#thumblist a{display:inline-block; margin:0 4px; border:1px dashed #888;}
div#thumblist a.zoomThumbActive{ border:2px solid #0001da; }
body {
	margin:0;
	padding: 0;
	background: #f0f0f0;
}
.main{
	width:100%;
	border:solid 1px #000;
	margin:0px;
	backgroud-color:#F0F;
}
header {
	width:100%;
	position: fixed;
	background: #222;
	position: absolute;
	top:0px;
	height: 50px;
	border-bottom: 1px solid #555;
}


.mainpicClass{
	widthi:60%;
	margin-top:200px;
	margin: 0 auto;
}

.body{
	text-align:center;
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

.top_menu li a {
	text-decoration: none;
	color:#FFF;
}
.top_menu p{
	font-size: 4em;
	margin-top:0px;
	color:#FFF;

}
p { font-family: 'Arial', 'Tahoma', sans-serif }

.menu-toggle{
	color: #000;/*MENUの文字色*/
	display: block;
	padding: 5px;
	font-size: 4em;
	margin-top:0px;

}

#menu li a{
	text-decoration: none;
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

</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script src="js/jquery.jqzoom-min.js" type="text/javascript"></script>

<script type="text/javascript">
$(function(){
	$(".menu-toggle").on("click", function() {
		$(this).next().slideToggle();
	});
});

</script>
</head>
<body>
<div class="main">
	<div class="top_menu">
		<ul style="list-style:none;">
			<li><a href="./painting.php"><p>油絵</p></li>
			<li><a href="./images.php"><p>パース</p></li>
			<li><a href="./drawing.php"><p>デッサン</p></a></li>
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

	<div class="mainpicClass">
		<img  src="../zoom/kabin.png" width="80%"  alt=""  />
		<img  src="../zoom/kabin2.png" width="80%"  alt=""  />
		<img  src="../zoom/okimono.png" width="80%"  alt=""  />
		<img  src="../zoom/okimono2.png" width="80%"  alt=""  />
		<img  src="../zoom/pentate1.png" width="80%"  alt=""  />
		<img  src="../zoom/pentate2.png" width="80%"  alt=""  />
		<img  src="../zoom/tsumayouji.png" width="80%"  alt=""  />
	</div>
</div>
</body>
</html>
