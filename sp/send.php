<?php

$message = "名前：" . $_POST["name"] . "\n本文：" . $_POST["message"];

$message_=mb_encode_mimeheader($message, 'UTF-8');
if (!mb_send_mail("alps.sha@i.softbank.jp", $_POST["subject"], $message_, "From: " . $_POST["mail"])) {
	  exit("error");
}

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sample</title>
</head>
<body>
<p>メールが送信されました。</p>
</body>
</html>
