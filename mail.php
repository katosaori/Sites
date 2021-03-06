<!DOCTYOE html>
<html lang="ja">
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=“viewport” content=“initial-scale=1”>
<link rel="stylesheet" href="../sidr/stylesheets/jquery.sidr.light.css">
<link rel="stylesheet" type="text/css" href="./css/header.css" media="all">
<link href="../css/jquery.bxslider.css" rel="stylesheet" />
	</div>

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


.menu li a{
	text-decoration: none;
}
#menu li a{
	text-decoration: none;
}
.menu li img{
	width:300px;
}


.rotate{
	transform:rotate(-45deg);
	width:200px;
}

.clearLeft{
	clear:left;
	font-size:400%;
}

.top_menu{
	width:100%;
	margin:0px;
	height:100px;
	border:solid 1px transparent;
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


.top_img {
	text-align:center;
}

.top_img img{
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
.overlay{
	z-index:1;
}
.main{
	width:100%;
	margin:0px;
}


.lists{
	float:left;
}


#form_space{
	width: 100%;
	border:solid 1px transparent;
	margin:auto;

}
#demo {
	width:100%;
	text-align:center;
}
#demo ul {
	list-style:none;
	margin:0; padding:0;
	width: 1001px;
	margin-left: 100px;
	margin-top: 100px;
}
#demo li {
	list-style:none;
	margin:0; padding:6px;
	clear:both;
}
#demo label {
	display:block;
	font-weight:bold;
	color:#666;
	margin-left:30px;
	width:30%;
	float:left;
	text-align:left;
	font-size:100%;
}
#demo li span {
	width:45%;
	margin:0 5px 0 0; padding:0;
}
#demo li span label {
	color:#999;
	font-weight:normal;
	background-color:#99ccff;
}
#demo input#name{
	width:45%;
	font-size:20px;
	float:left;
}
#demo textarea {
	background:#fff url(/content/img/css/fieldborder.png) repeat-x 0 0;
	border:1px solid #ddd;
	border-top-color:#ccc;
	border-left-color:#ccc;
	padding:3px;
}
#demo textarea {
	width:45%;
	font-size:20px;
	margin-left:-215px;
}

#demo input#email {
	width:45%;
	font-size:20px;
	float:left;
}


#btn_submit {
	width: 200px;
	margin-top:100px;
	padding: 5px;
	background: -webkit-gradient(linear, left top, left bottom, from(#FFAA33), to(#FF8800));	
	border: 1px #F27300 solid;
	color: #FFF;
	-webkit-appearance: none;
	-webkit-border-radius: 10px;
	-webkit-box-shadow: 0 2px 2px #CCC;
	text-shadow: 1px 2px 3px #C45C00;
	height:100px;
	font-size:100%;
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
	var url = location.href;
	parameters = url.split("?");
	param = parameters[1];
});

</script>

<?php
error_reporting(E_ALL);
include "./db.php";
include "./function.php";
if(isset($_GET['sean'])){
	$select_sean=$_GET['sean'];
}else{
	$select_sean='school';
}
$menu_images=get_all();
$images_names=get_komono($select_sean);
$seans_names=seans($select_sean);
$top_images=get_top_image($select_sean);
?>

</head>

<body onLoad="size1()">
<div class="main">
<header>
		<div class="title"><a href="./index.php"><img src="./img/title.png" height="90px"></a></div>
		<a href="./mail.php" class="mail_icon"><img src="./menu/mail.png" width="30px"></a>
		<img src="./menu/6ac59f87.gif" width="30px">
		<div class="clearleft"></div>
</header>

	<div class="clearLeft"></div>
	<div class="overlay"> <!-- オーバーレイのとこ -->
	<div id="form_space">
	<form id="demo" action="./send.php" method="post" >
		<ul>
			<li>
				<label for="name">名前：</label>
				<span>
					<input id="name" name="name" type="text" class="field" value="" maxlength="20" tabindex="1" /><br>
				</span>
				<div class="clearleft"></div>
			</li>
			<li>
				<label for="email">メールアドレス：</label>
				<span>
				<input id="email" name="email" type="text" class="field" value="" maxlength="255" tabindex="3" /><br>
				</span>
				<div class="clearleft"></div>
			</li>
			<li>
				<label for="message">メッセージ：</label>
				<textarea id="message" name="message" rows="10" cols= "5" tabindex="4" /></textarea>
				<div class="clearleft"></div>
			</li>
		</ul>
		<input id="btn_submit" name="btn_submit" value="送信" type="submit" />
	</form>
	</div>

	</div><!--オーバーレイおわり-->
<script type="text/javascript">
$(function(){

	$("form").submit(function(){

		var err = 0;

		if($("input[name='name']").val()==""){
			if($("span#name").css("color") != "red"){
				if($("span#name").text()==""){
					$("input[name='name']").css("border","1px solid red").after("<span id='name'>入力してください</span>");
					$("span#name").css("color","red");
				}
			}
			err = 1;
		}else{
			$("input[name='name']").css("border","1px solid gray");
			$("span#name").text("");
			$("span#name").css("color","gray");
		}

		if($("input[name='email']").val()==""){
			if($("span#email").css("color") != "red"){
				if($("span#email").text()==""){
					$("input[name='email']").css("border","1px solid red").after("<span id='email'>入力してください</span>");
					$("span#email").css("color","red");
				}
			}
			err = 1;
		}else{
			$("input[name='email']").css("border","1px solid gray");
			$("span#email").text("");
			$("span#email").css("color","gray");
		}




		if(err==1){
			return false;
		}

	}); // end of submit

});
</script>
</body>
</html>

