<?php
session_start();
if(!isset($_SESSION["login"])){
	header("Location: login.php");
	exit;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja">
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
		<a href="index.php" class="brand">投稿一覧ページへ>></a>
	</div>
	<h4>編集内容が投稿されました</h4>
</div>
</div>
</div>
<!--メインここまで-->

<!-- フッター -->
<div id="footer_box">
<div id="footer_box01">
<div class="footer_l">
<img src="../images/iai-rogo.gif" alt="アイ・エー・アイロゴ" width="57" height="54" class="f_l" />
<p>株式会社アイ・エー・アイ<br />
〒101-0065 東京都千代田区西神田2-3-4　パレスピアビル3階<br />
TEL　03-3222-7571　　FAX　03-3261-0251 </p></div>
<div id="linkbox" class="footer_r">｜<a href="../index.html">ホーム</a>｜<a href="../business/index.html">事業内容</a>｜<a href="../result/index.html">開発実績</a>｜<a href="index.html">リクルート</a>｜<a href="../company/index.html">会社案内</a>｜<a href="https://reg26.smp.ne.jp/regist/is?SMPFORM=qat-laram-9c0acb1d0af3951bd1dc3322b6a50b12">お問い合わせ</a>｜<a href="../sitemap.html">サイトマップ</a>｜<a href="../privacypolicy.html">個人情報保護方針</a>｜</div>
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
