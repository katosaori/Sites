<?php
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
error_reporting(E_ALL);
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript">
function check(){
	var str = "";
	$('input[name="record[]"]:checked').each(function(){
		str += $(this).val()+"\n";
	});
	if(str){
		return confirm(str+"を本当に削除しますか");
	}
	else{
		alert("何もチェックしてません");
		return false;
	}
}
</script>

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
	<div class="title_links">
		<h2>投稿済み一覧</h2>
		<a href="kanri.php?new=1" class="links">✎新規投稿ページへ>></a>
	</div>
	<form action="kanri.php" method="POST">
		<input type="submit" class="btn_danger"   value="✓を削除" onclick="return check()">
			<div class="tables">
			<?php 
				foreach($record as $r){ ?>
				<a href="kanri.php?edit_id=<?php echo $r['id']?>" class="edit_link"/>編集</a>
				<table width="600" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td class="space_up">
							<input type="checkbox" name="record[]" value=<?php echo $r["title"] ?>>
						</td>
						<td class="msg_date" colspan="2">
							<?php echo "投稿者:".str_replace("-","/",$r["created_by"])."　　　"; ?>
							<?php echo "投稿日時:".str_replace("-","/",$r["created_at"]); ?>
						</td>
					</tr>
					<tr>
						<td class="msg_mt">タイトル:</td>
						<td class="msg_title" colspan="2">
							<?php echo $r["title"]; ?>
						</td>
					</tr>
					<tr>
						<td class="msg_mm">メッセージ:</td>
						<td class="msg_message">
							<div class="msg_message_i">
								<?php echo "<p>".$r["message"]."</p>"; ?>
							</div>
						</td>
						</tr>
					<tr>
						<td class="space">
							<br>
						</td>
					</tr>
				</table>
				<?php } ?>
			</div>
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


