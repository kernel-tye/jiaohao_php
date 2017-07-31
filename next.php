<?php
$data = $_POST["next"];
switch ($data) {
	case 'next':
		$check = "next";
		break;
	case 'session':
		$check = "session";
		break;
	case 'give':
		$check = "give";
		break;
	default:	
		$check = "add";
		break;
}
if($check=="next"){
	$link = @mysql_connect("localhost","root","rootroot") or die("error".mysql_error());
	mysql_select_db("smis",$link);
	mysql_query("set names utf8",$link);
	$chec = mysql_query("select * from smis_add where ifstage=0 limit 1",$link);
	$chec = mysql_fetch_array($chec);
	$name = $chec['name'];
	if($name!=""){
		//mysql_query("update smis_show set ifstage=1 where id='$id'",$link);
		//mysql_query("insert into smis_add (name) values ('$name')",$link);
		mysql_query("insert into smis_show (name) values ('$name')",$link);
		mysql_query("delete from smis_add where name='$name'");
		file_put_contents('indexTable.json',"1");
	}else{
		$a = mysql_query("select * from smis_call where ifstage=0 limit 1",$link);
		$a= mysql_fetch_array($a);
		$id = $a['id'];
		$name = $a['name'];
		//$indexTable_json_string=file_get_contents('indexTable.json');
		//$indexTable_array=json_decode($indexTable_json_string,true);
		//$ses = $indexTable_array;
		//$_SESSION['NEW'] = "1";
		if($id!=""){
		mysql_query("update smis_call set ifstage=1 where id='$id'",$link);
		//mysql_query("insert into smis_add (name) values ('$name')",$link);
		mysql_query("insert into smis_show (name) values ('$name')",$link);
		file_put_contents('indexTable.json',"1");
		}
	}
}
if($check=="session"){
//n = $_SESSION['NEW'];
	$indexTable_json_string=file_get_contents('indexTable.json');
	$indexTable_array=json_decode($indexTable_json_string,true);
	$ses = $indexTable_array;
	//$_SESSION['NEW'] = "1";
	echo $ses;
}
if($check=="give"){
	$link = @mysql_connect("localhost","root","rootroot") or die("error".mysql_error());
	mysql_select_db("smis",$link);
	mysql_query("set names utf8",$link);
	$a = mysql_query("select * from smis_show limit 1",$link);
	$a= mysql_fetch_array($a);
	$name = $a['name'];
	if($name!=""){
		//mysql_query("update smis_add set ifstage=1 where name='$name'",$link);
		//mysql_query("insert into smis_show (name) values ('$name')",$link);
		//mysql_query("select * from smis_show limit 1",$link);
		//$giv= mysql_fetch_array($giv);
		//$name = $giv['name'];
		mysql_query("delete from smis_show where name='$name'");
			file_put_contents('indexTable.json',"0");
		echo $name;
	}else{
		file_put_contents('indexTable.json',"0");
		echo $name;
	}
	header('ht.html');
}
if($check=="add"){
	$link = @mysql_connect("localhost","root","rootroot") or die("error".mysql_error());
	mysql_select_db("smis",$link);
	mysql_query("set names utf8",$link);
	$a = mysql_query("select * from smis_call where id='$data'",$link);
	$a= mysql_fetch_array($a);
	$id = $a['id'];
	$name = $a['name'];
	//$_SESSION['NEW'] = "2";
	if($name!=""){
	mysql_query("update smis_call set ifstage=1 where id='$id'",$link);
	mysql_query("insert into smis_add (name,ids) values ('$name','$id')");
}
	echo "1";
}
/*
$link = @mysql_connect("localhost","root","WLZX1358") or die("error".mysql_error());
	mysql_select_db("smis",$link);
	mysql_query("set names utf8",$link);
$name="a";
mysql_query("delete from smis_show where name='$name'");*/

