<?php
date_default_timezone_set('Asia/Tokyo');
require_once "../db.php";
require_once "../function.php";

if($_POST["create"]){
	$a="";
	$title = $_POST["title"];
	$message = $_POST["message"];
	if(checkinsert($title,$message)){
		$today = date("Y-m-d H:i:s");
		$id=1;
		$login_user = "user";
		if($a=insert($id,$title,$message,$login_user,$today)){
			include "insert_done.php";
			exit;
		}
		else{
			echo "id=".$id."title=".$title."message=".$message."user=".$user."day=".$today;
			echo "insert failed test";
		}
	}
}

else if($_POST["confirm"]) {
	if(checkinsert($title,$message)){
		$title = $_POST["title"];
		$message = nl2br($_POST["message"]);
		$today = date("Y-m-d H:i:s");
		$login_user = "login_user";
		include "confirm.php";
		exit;
	}
	else{
		echo "confirm failed";
	}
}

else if($_GET["new"]){
	if(isset($_POST["title"])){
		$title = $_POST["title"];
	}
	if(isset($_POST["message"])){
		$message = $_POST["message"];
	}
	include 'entry.php';
}

else if($_GET["edit_id"]){
	$edit_id = $_GET["edit_id"];
	$edit_content = get_by_id($edit_id);
	include 'entry.php';
}

else if($_POST["update_id"]){
	$id = $_POST["update_id"];
	$update_record = get_by_id($id);
	$title = $_POST["title"];
	$message = nl2br($_POST["message"]);
	$created_by = $update_record["created_by"];
	$created_at = $update_record["created_at"];
	if($a=update($id,$title,$message,$created_by,$created_at)){
		include "update_done.php";
		exit;
	}
	else{
		echo "update failed";
	}
}

else if($_POST["record"]){
	foreach($_POST["record"] as $r){
		if(!delete($r)){
			echo "失敗";
			exit;
		}
	}
	include 'delete_done.php';
}

else{
	$record = get_texts();
	include 'show_delete.php';
}
