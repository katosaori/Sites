<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="./css/header.css" media="all">
<style type="text/css">
.main{
	margin-top:100px;
}

.right img {
	float:left;
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
	float:left;
	width:600px;
}
.largephoto{
	margin-top:100px;
}


</style>
</head>
<body>
<header>
		<div class="title"><img src="./img/title.png" height="90px"></div>
		<a href="./mail.php" class="mail_icon"><img src="./menu/mail.png" width="30px"></a>
		<img src="./menu/6ac59f87.gif" width="30px">
		<div class="clearleft"></div>
</header>
<div class="main">
<div class="right">
<?php
include 'function.php';
include 'db.php';
$allimages_names = get_all_komono();
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
		<img class="lists"  src="./img/<?php echo $i['allimage']?>" style="width:100px;" >
		</li>
		<?php
			}
		?>
</div>
<div class="left">
	<img class="largephoto" src="./img/cone.png" style="width:600px;">
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
