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
	<div class="titel_links">
		<h2>新規投稿確認画面</h2>
		<a href="kanri.php" class="links">過去に投稿したメッセージ一覧へ>></a>
	</div>
	<p>投稿するメッセージはこれでよろしいですか?</p>
	<form method="POST" action="./kanri.php" name="contents">
		<table class="insert_table" width="600">
			<tr class="tm">
				<td>
					タイトル :
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $title; ?>
				</td>
			<tr class="tm">
				<td>
					メッセージ :
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $message; ?>
				</td>
			</tr>
		</table>
		<div class="create_btn">
			<input type="hidden" name="title" value="<?php echo $title;?>">
			<input type="hidden" name="message" value="<?php echo $message; ?>">
			<input type="submit" class="btn_back" name ="new" value="戻る" src="../images/btn.png" onClick="form.action='kanri.php';return true">
			<input type="submit" class="toukou_btn" name ="create" value="投稿" src="../images/btn.png" onClick="from.action='./insert_done.php';return true"/>
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
