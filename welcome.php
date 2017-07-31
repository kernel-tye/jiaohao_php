<?php
$name=$_POST['name'];
$userSex=$_POST['sex'];
$id=$_POST['xuehao'];
$tel=$_POST['phone'];
$userClass=$_POST['zhuanye'];
$info=$_POST['content'];
/*$ifErr=true;
    $sql="INSERT INTO `qdm113204185_db`.`nicapply` ( `name`, `sex`, `xuehao`, `phone`, `zhuanye`, `content`) VALUES ( '$name', '$userSex', '$id', '$tel', '$userClass', '$info')";
   */
$link = @mysql_connect("qdm113204185.my3w.com","qdm113204185","wlzx89631358") or die("error".mysql_error());
mysql_select_db("qdm113204185_db",$link);
mysql_query("set names utf8",$link);
mysql_query("INSERT INTO `qdm113204185_db`.`nicapply` ( `name`, `sex`, `xuehao`, `phone`, `zhuanye`, `content`) VALUES ( '$name', '$userSex', '$id', '$tel', '$userClass', '$info')");
