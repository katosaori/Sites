<?php
session_start();
$_SESSION["account_id"] = "";
$_SESSION["password"] = "";
$_SESSION["login"] = 0;
$error = "";
$account_id = "";
$password = "";
if(isset($_POST["login"])){
	if($_POST["account_id"]=="message_kanri" && $_POST["password"]=="message_kanri"){
		session_regenerate_id(TRUE);
		$accont_id = htmlspecialchars($_POST["account_id"], ENT_QUOTES);
		$password = htmlspecialchars($_POST["password"], ENT_QUOTES);
		$_SESSION["account_id"] = $account_id;
		$_SESSION["password"] = $password;
		$_SESSION["login"] = 1;
		header("Location: kanri.php");
		exit;
	}else{
		$error = "ユーザIDあるいはパスワードに誤りがあります。";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php include "header.inc"; 
error_reporting(E_ALL);?>
<body>
<!-- ヘッダー -->
<div id="head">
</div>

<div id="head_r">

 </div>
 </div>
 <!-- ヘッダー　ここまで -->
<!--メイン-->
<div id="contents_second" class="clearfix">
<div id="contents_l">
<div class="container">

	<form id="loginForm" name="loginForm" action="<?php print($_SERVER['PHP_SELF']) ?>" method="POST">
			<legend>ログインフォーム</legend>

<a href="130.jpg">130.jpg</a>


			<div><?php if(isset($error)){echo $error;} ?></div>
			<label for="account_id">アカウントID</label><input type="text" id="account_id" name="account_id" value="">
			<br>
			<label for="password">パスワード</label><input type="password" id="password" name="password" value="">
			<br>
			<label></label><input type="submit" id="login" name="login" value="ログイン">
	</form>
</div>
</div>
</div>
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

