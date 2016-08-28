<?php
mb_language("ja");
mb_internal_encoding("UTF-8");
$message = 
"名前：".$_POST["name"]."\r\n".
"本文：".$_POST["message"]."\r\n".
"メール:".$_POST["email"];

$message = stripslashes($message);
$message = mb_convert_encoding($message,"UTF-8");
if (!mb_send_mail("alps.sha@i.softbank.jp", $_POST["subject"], $message, "From: " . $_POST["mail"])) {
	  exit("error");
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>send mail</title>
</head>
<body>
<p>メールが送信されました。</p>
<a href="index.php">戻る</a>
</body>
</html>
