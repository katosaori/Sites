<?php
include "db.php";
function get_all(){
	global $dbh;
	$stmt_all = $dbh -> prepare("select * from seans order by id desc");
	$stmt_all -> execute();
	$stmt_all -> bind_result($id,$title,$texts,$image,$group);
	$record=array();
	while($stmt_all->fetch()){
		$record[] = array(
		'id' => $id,
		'title'=>$title,
		'texts' =>$texts,
		'image' =>$image,
		'group'=>$group
		);
		}
		$stmt_all->close();
		return $record;
}
function get_by_group(){
	global $dbh;
	$stmt_group = $dbh -> prepare("select image, max(id) as maxid, gname, title from seans group by gname ");
	$stmt_group -> execute();
	$stmt_group -> bind_result($image,$id,$group,$title);
	$record=array();
	while($stmt_group->fetch()){
		$record[] = array(
		'image' => $image,
		'id'=>$id,
		'group'=>$group,
		'title'=>$title
		);
		}
		$stmt_group->close();
		return $record;
}
function get_all_from_enpitsu(){
	global $dbh;
	$stmt_all_enpitsu = $dbh -> prepare("select * from enpitsu order by id desc");
	$stmt_all_enpitsu -> execute();
	$stmt_all_enpitsu -> bind_result($id,$image,$title);
	$record=array();
	while($stmt_all_enpitsu->fetch()){
		$record[] = array(
		'id' => $id,
		'image' =>$image,
		'title'=>$title
		);
		}
		$stmt_all_enpitsu->close();
		return $record;
}
function get_komono($sean){
	global $dbh;
	$stmt_images = $dbh -> prepare("select image from modeling where gnames=?");
	$stmt_images -> bind_param('s',$sean);
	$stmt_images -> execute();
	$stmt_images -> bind_result($image);
	$images_name=array();
	while($stmt_images->fetch()){
		$images_name[] = array(
			'image' =>$image
		);
	}
	$stmt_images->close();
	return $images_name;
}

function get_all_komono(){
	global $dbh;
	$stmt_allimages = $dbh -> prepare("select image from modeling");
	$stmt_allimages -> execute();
	$stmt_allimages ->bind_result($allimage);
	$allimages_name=array();
	while($stmt_allimages->fetch()){
		$allimages_name[]= array(
			'allimage' => $allimage
			);
	}
	$stmt_allimages->close();
	return $allimages_name;
}

function seans($sean){
	global $dbh;
	$stmt_seans = $dbh -> prepare("select image from seans where gname=?");
	$stmt_seans -> bind_param('s',$sean);
	$stmt_seans -> execute();
	$stmt_seans -> bind_result($seans);
	$seans_name=array();
	while($stmt_seans->fetch()){
		$seans_name[] = array(
			'sean'=>$seans
		);
	}
	$stmt_seans->close();
	return $seans_name;
}

function get_top_image($sean){
	global $dbh;
	$stmt_top = $dbh -> prepare("select image from drawing where gname=?");
	$stmt_top -> bind_param('s',$sean);
	$stmt_top -> execute();
	$stmt_top -> bind_result($top);
	$seans_top=array();
	while($stmt_top->fetch()){
		$seans_top[] = array(
			'top'=>$top
		);
	}
	$stmt_top->close();
	return $seans_top;
}

function get_texts(){
	global $dbh;
	$stmt_all = $dbh->prepare("select * from message order by id");
	$stmt_all->execute();
	$all = array();
	$stmt_all->bind_result($id,$title,$message,$created_by,$created_at);
	$record = array();
	while($stmt_all->fetch()){
		$record[] = array(
		'id' => $id,
		'title' => $title,
		'message' => $message,
		'created_by' => $created_by,
		'created_at' => $created_at);
	}
	$stmt_all->close();
	return $record;
}

function get_by_id($edit_id){
	global $dbh;
	$stmt_by_id = $dbh->prepare("select * from message where id=?");
	$stmt_by_id->bind_param('s',$edit_id);
	$r = $stmt_by_id->execute();
	$stmt_by_id->bind_result($id,$title,$message,$created_by,$created_at);
	while($stmt_by_id->fetch()){
		$edit_content = array(
		'id' => $id,
		'title' => $title,
		'message' => $message,
		'created_at' => $created_at,
		'created_by' => $created_by);
	}
	$stmt_by_id ->close();
	return $edit_content;
}

function insert($title,$message,$created_by,$created_at){
	global $dbh;
echo $title, $message, $created_by ,$created_at;
	$stmt_url = $dbh->prepare("insert into message (title,message,created_by,created_at) values(?,?,?,?)");
	$stmt_url->bind_param('ssss',$title,$message,$created_by,$created_at);
	$r = $stmt_url ->execute();
	$stmt_url->close();
	if($r){
		return true;
	}
	else{
		return false;
	}
}

function update($id,$title,$message,$created_by,$created_at){
	global $dbh;
	$stmt_alter = $dbh->prepare("update message set title=?,message=?,created_by=?,created_at=? where id=?");
	$stmt_alter->bind_param('ssssi',$title,$message,$created_by,$created_at,$id);
	$r = $stmt_alter->execute();
	$stmt_alter->close();
	if($r){
		return true;
	}
	else{
		return false;
	}
}

function delete($title){
	global $dbh;
	$stmt_delete = $dbh -> prepare("delete from message where title =?");
	$stmt_delete ->bind_param('s',$title);
	$r = $stmt_delete ->execute();
	$stmt_delete ->close();
	return $r;
}

function checkinsert($title,$message){
		return true;
}

