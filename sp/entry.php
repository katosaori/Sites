<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<script type="text/javascript">
function confirm_text(){
	var title = "";
	var message = "";
	var title = document.contents.elements["title"].value;
	var message = document.contents.elements["message"].value;
	if(title==""){
		alert("タイトルが未入力です");
		return false;
	}
	else if(typeof(message)=="undefined"){
		alert("メッセージが未入力です");
		return false;
	}
	else{
	}
}
</script>
<!-- ヘッダー -->
<div id="head">
<div id="head_logo"> <a href="../index.html"><img src="../images/logo.gif" alt="株式会社アイ・エー・アイ" width="297" height="118" border="none" /></a>
</div>
<div id="head_r">

 </div>
 </div>
 <!-- ヘッダー　ここまで -->

<!--メイン-->
<div id="contents_second" class="clearfix">
<div id="contents_l">
<div class="container">
	<div class="title_links">
		<h2>新規投稿画面</h2>
		<a href="kanri.php" class="links">過去に投稿したメッセージ一覧へ>></a>
	</div>
	<form method="POST" action="./kanri.php" name="contents">
		<table class="insert_table" width="600">
			<tr class="tm">
				<td>
					タイトル :　
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" size="70" name="title" value="<?php if(isset($title)){echo $title;}else if(isset($edit_content)){echo $edit_content["title"];}?>"/>
				</td>
			<tr class="tm">
				<td>
					メッセージ :
				</td>
			</tr>
			<tr>
				<td>
					<textarea name="message" rows="6" cols="70" name="message" value="" /><?php if(isset($message)){echo str_replace("<br />","",$message);} else if(isset($edit_content)){echo str_replace("<br />","",$edit_content["message"]);}?></textarea>
				</td>
			</tr>
		</table>
		<div class="create_btn">
			<?php
			if(isset($edit_id)){
				echo "<input type='hidden' name='update_id' value='".$edit_id."'>";
				echo "<input type='submit' class='toukou_btn' name ='edited' value='投稿' src='../images/btn.png' onclick='return confirm_text()'/>";
			}else{
				echo "<input type='submit' class='toukou_btn' name ='confirm' value='確認' src='../images/btn.png' onclick='return confirm_text()'/>";
			}?>
		</div>
	</form>
</div>
</div>
</div>
<!--メインここまで-->
<!-- フッター -->
<div id="footer_box">
<div id="footer_box01">
</div>
</div>

<!-- フッター　ここまで -->

<!-- Google Analytics start-->

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
	var pageTracker = _gat._getTracker("UA-10087896-1");
	pageTracker._trackPageview();
} catch(err) {}</script>

<!-- Google Analytics END-->

</body>
</html>
