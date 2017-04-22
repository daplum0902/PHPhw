<?php
	$link=@mysqli_connect(
			'localhost',
			'root',
			'Marine1116',
			'php2017');
	if($link){
	echo "DB Connected";
	}else{
	echo "DB Failed";
	}

	mysqli_query($link,"SET NAMES utf-8");

	$name=$_POST["name"];
	$length=$_POST["length"];
	$email=$_POST["email"];
	$category=$_POST["category"];
	$trans=$_POST["trans"];
	$trans= implode(",", $trans);
	
	$sql2="INSERT INTO w9hw(name,length,email,category,trans) VALUES('$name','$length','$email','$category','$trans')";

	$result=mysqli_query($link,$sql2);

	$result=mysqli_query($link,"SELECT * FROM w9hw");
	echo "<table border=1>";
	echo "<td>";
	echo "no";
	echo "</td><td>";
	echo "length";
	echo "</td><td>";
	echo "length";
	echo "</td><td>";
	echo "email";
	echo "</td><td>";
	echo "category";
	echo "</td><td>";
	echo "transport";
	echo "</td>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>";
		echo $row["no"];
		echo "</td><td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["length"];
		echo "</td><td>";
		echo $row["email"];
		echo "</td><td>";
		echo $row["category"];
		echo "</td><td>";
		echo $row["trans"];
		echo "</td>";
		echo "</tr>";
	}
	// echo "</table>";
	// echo "<br>你喜歡的宅急便是:";
	// foreach ($trans as $data) {
	// 	echo " ".$data;
	// }
	mysqli_close($link);
?>