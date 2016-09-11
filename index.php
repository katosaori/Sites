<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<link rel="stylesheet"href="owl-carousel/owl.carousel.css">
<link rel="stylesheet"href="owl-carousel/owl.theme.css">
<link rel="stylesheet" type="text/css" href="./css/header.css" media="all">
<link rel="stylesheet" href="css/jquery.flipster.min.css">
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.flipster.min.js"></script>
<meta charset="UTF-8">
<style type="text/css">
/************************************************************
html body area
*************************************************************/
//test
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

</style>

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
$record = get_texts();
$group = get_by_group();
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
	<div class="center">
	<div class="top_drawing">
		<img class="drawing_img" src="./drawing/koi.png">
	</div>
	<div class="pasu_box">
		<a href="" class="pasu_boxa">
			<a href="images.php?sean=pool"><img src="./images/pool01.jpg"></a>
		<p>プール</p>
		</a>
		<a href="" class="pasu_boxa">
			<a href="images.php?sean=gym"><img src="./images/gym24.png"></a>
		<p>体育館</p>
		</a>
		<a href="" class="pasu_boxa">
			<a href="images.php?sean=home"><img src="./images/room.png"></a>
		<p>へや</p>
		</a>


	</div>

<div class="clearleft"></div>
    <div id="coverflow">
        <ul class="flip-items">
            <li data-flip-title="Red">
                <img src="img/424_6.png"width="150px">
            </li>
            <li data-flip-title="Razzmatazz" data-flip-category="Purples">
                <img src="img/424_7.png" width="150px">
             </li>
            <li data-flip-title="Deep Lilac" data-flip-category="Purples">
                <img src="img/424_8.png" width="150px">
            </li>
            <li data-flip-title="Daisy Bush" data-flip-category="Purples">
                <img src="img/424_9.png"width="150px">
            </li>
            <li data-flip-title="Cerulean Blue" data-flip-category="Blues">
                <img src="img/424_10.png"width="150px">
            </li>
            <li data-flip-title="Dodger Blue" data-flip-category="Blues">
                <img src="img/424_11.png"width="150px">
            </li>
            <li data-flip-title="Cyan" data-flip-category="Blues">
                <img src="img/424_12.png"width="150px">
            </li>
        </ul>
    </div>

<script>
    var coverflow = $("#coverflow").flipster();
</script>

	<div class="demo">
		<ul class="komonos" style="list-style:none;">
		<img class="lists" src="./img/tamamushi.png" style="width:100px;" >
		<img class="lists" src="./img/ga.png" style="width:100px;" >
		<?php
			$count=0;
			foreach($images_names as $i){
				$count++;
				if($count%6 == 0){
					echo "<div class='clearleft'></div>";
					echo "<li>";
				}else{
					echo "<li>";
				}
		?>
		<img class="lists" src="./img/<?php echo $i['image']?>" style="width:100px;" >
		</li>
		<?php
			}
		?>
		</ul>
		<p><a href="./komono.php">一覧を見る</a></p>
	</div>
	<div class="clearleft"></div>
	</div>
	<div class="textspace">
		<a href="./blogs/blog1.php">
		<div class="teヒメヤママユ">
			<div class="block">
				<p>ヒメヤママユ蛾の標本</p>
			</div>
			<div class="contents">
				<img src="../blogimg/blog1.jpg" width="100px">
				<p>ヒメヤママユの標本...</p>
			</div>
		</div>
		</a>

	<?php
		$count=0;
		foreach($record as $r){
		if($count%4 == 0){
			echo "<div class='clearleft'></div>";
			echo "<div class='textsblock'>";
			}else{
			echo "<div class='textsblock'>";
			}
	?>
		<div class="block">
			<p>タイトル</p>
		</div>
		<div class="contents">
			<img src="../menu/sample.jpeg" width="100px">
			<p><?php echo $r["message"] ?></p>
		</div>
	</div>
	<?php 
		$count++;
	} ?>
	</div>

</div>
</body>
</html>

