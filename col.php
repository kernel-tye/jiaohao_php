<?php
session_start();
	//file_put_contents('indexTable.json',"0");
	$indexTable_json_string=file_get_contents('indexTable.json');
	$indexTable_array=json_decode($indexTable_json_string,true);
	echo $indexTable_array;
	//$newTable_json=json_encode($newTable);
//

//$_SESSION['qaz'] = 0;

?>