<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php include "header.inc";  ?>

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
	<div class="links">
		<a href="entry.php?new=1" class="brand">✎づけて投稿する>></a>
		<br />
		<a href="index.php" class="brand">投稿一覧ページへ>></a>
	</div>
	<h4>投稿されました</h4>
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
