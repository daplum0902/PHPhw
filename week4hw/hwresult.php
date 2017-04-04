<?php
	$uname=$_GET["uname"];
	$upwd=$_GET["upwd"];
	$email=$_GET["email"];
	$choice=$_GET["choice"];
	$trans=$_GET["trans"];
	$place=$_GET["place"];
	$color=$_GET["color"];
	


	echo "uname is:".$uname."<br>";
	echo "upwd is:".$upwd."<br>";
	echo "email is:".$email."<br>";
	echo "choice is:";
	if ($choice=="a") {
		echo "易碎物品";
	}
	else{
		echo "不易碎物品";
	}

	echo "<br>你喜歡的宅急便是:";
	foreach ($trans as $data) {
		echo " ".$data;
	}
	
	echo "<br>你想送往的地方:".$place;
	echo "<br>顏色:".$color;
?>