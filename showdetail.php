<?php
	header("Content-Type: application/json; charset=UTF-8");
	$obj = new \stdclass();
	$obj = json_decode($_GET["q"], false);
	echo $obj->name." ";
	echo $obj->Depart." ";
	echo $obj->mess." ";
?>