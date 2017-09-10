<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<link rel="stylesheet" href="../sidr/stylesheets/jquery.sidr.light.css">
<link type="text/css" rel="stylesheet" href="css/lightslider.css" />  
<link href="../css/jquery.bxslider.css" rel="stylesheet" />
<link href="./css/topmenu.css" rel="stylesheet" />
<script src="js/lightslider.js"></script>
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
	list-style-type: none;
}

.gym_menu {
}
.gym_menu.hover{

}
.menu li a{
	text-decoration: none;
}

.menu li img{
	width:280px;
}

.clearLeft{
	clear:left;
	font-size:400%;
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

.showreel{
	width:100%;
	border:solid 1px transparent;
}
.items{

}

.item{

	height: 190px;
	width: 190px;
	float:left;
}

.button {
    text-align:center;
    padding:10px;
    color:#fff;
    background-image: url("../menu/mottomiru.png");
    background-repeat: no-repeat;
    width:300px;
    height: 80px;
    border:solid 1px transparent;
    margin: 0 auto; 
}
.close {
    background:#666;
}

.footer{
	border:solid 1px transparent;
	margin-top:10px;
}

.blankspace{	
	border:solid 1px transparent;
	height:300px;
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

$(function () {
    $('.button').prevAll().hide();
    $('.button').click(function () {
        if ($(this).prevAll().is(':hidden')) {
            $(this).prevAll().slideDown();
            $(this).text('閉じる').addClass('close');
        } else {
            $(this).prevAll().slideUp();
            $(this).text('もっと見る').removeClass('close');
        }
    });
});

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#lightSlider").lightSlider(); 
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
			<li><a href="./index.php"><p><img src="../menu/title_white.png" height="90px"></p></a></li>
			<li><p><img src="../menu/sp_pasu.png" height="90px"></p></li>
			<li><a href="./drawing.php"><p><img src="../menu/sp_enpitu_mokutan.png" height="90px"></p></a></li>
		</ul>
	</div>

		<span class="menu-toggle"><i class="blogicon-reorder lg"></i>≡</span>
		<ul id='menu'>
		<li><a href='./zoom.php'><img src="../menu/tanabata1_1.png" width="150px"><img src="../zoom/kabin.png" width="200px">かびん　おきもの</a></li>
		<li><a href=''><img src="../menu/tanabata1_2.png" width="150px">-----</a></li>
		<li><a href=''><img src="../menu/tanabata1_3.png" width="150px">-----</a></li>
		<li><a href=''><img src="../menu/tanabata1_4.png" width="150px">-----</a></li>
		<li><a href=''><img src="../menu/tanabata1_1.png" width="150px">-----</a></li>
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
				<li><a href="images.php?sean=gym"><img src="../menu/imagepagebutton_gym.png"  ></a></li>
				<li><a href="images.php?sean=home"><img src="../menu/imagepagebutton_home.png"  ></a></li>
				<li><a href="images.php?sean=hospital"><img src="../menu/imagepagebutton_hos.png"  ></a></li>
				<li><a href="images.php?sean=school"><img src="../menu/imagepagebutton_school.png"  ></a></li>
				<li><a href="images.php?sean=pool"><img src="../menu/imagepagebutton_pool.png" ></a></li>
			</ul>
		</div>
	</header>

	<div class="mainpictures">
		
			<?php
				
				
				$images_count = 0;
				$seans_name_count = count($seans_names);
				foreach($seans_names as $i){
					if ($images_count == 0){					
					?>
					<img class="mainpicClass" src="../images/<?php echo $i['sean']?>" width="100%"  alt="img2_thumb" class="thumb" />
					 
					<?php
					 $images_count++;
					}
					else if($images_count == 1){
					?>
					<div class="content">
					<img class="mainpicClass" src="../images/<?php echo $i['sean']?>" width="100%"  alt="img2_thumb" class="thumb" />
					<?php
					$images_count++;
					 }
					else if($images_count == 3){
					?>
					<img class="mainpicClass" src="../images/<?php echo $i['sean']?>" width="100%"  alt="img2_thumb" class="thumb" />
					<p class="button">もっと見る1</p>
					<?php
					$images_count++;
					}
					elseif($images_count == 2){
					 ?>
					<img class="mainpicClass" src="../images/<?php echo $i['sean']?>" width="100%"  alt="img2_thumb" class="thumb" />
					<?php
					$images_count++;
					}
				}
				 ?>
			
		</div>
        <?php if($select_sean=='pool'){
			echo '<div class="showreel" ><img src="../menu/thumbnail_pool.png" width="100%">
			<p>プールの水で純氷をつくる話</p>
			<p>〜モデリング(※一部のぞく)•ライティング•アニメーション•コンポジット</p>
			<p>制作期間:9ヶ月ほど</p>
			<p>使用ソフト:3dsmax aftereffects premire photoshop</p>
			<a name="clip"><iframe width="560" height="315" src="https://www.youtube.com/embed/cJI7sYx8dZk" frameborder="0" allowfullscreen></iframe></a>';
			}
		?>
		
				
			</div>
		<div class="items">
			<ul id="lightSlider">
			<?php
				foreach($images_names as $i){
			?>
			
  				<li>
					<div class="item">
						<img class="lists" src="../img/<?php echo $i['image']?>" style="width:160px;">
					</div>
			</li>
			<?php
			}
			?>
		</ul>
		</div>
			<div class="footer">
				<a href="./mail.php" class="otoiawase"><img src="../menu/mail.png"></a>
				<a href="./login.php" class="text"><img src="../menu/6ac59f87.gif" width="300px"></a>

			</div>
		<div class ="blankspace">
		</div>
</div>
</body>
</html>

