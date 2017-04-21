<?php
	date_default_timezone_set("Asia/Taipei");

	$shownow=date("Y年m月d日/H:i:s/l");

	$showend=date("Y年m月d日/H:i:s/l",mktime(0,0,0,12,31,2017));
	$now=date("U");
	$end=mktime(0,0,0,12,31,2017);
	$count=$end-$now;

	echo "現在時間 ".$shownow."<br>";
	echo "世界末日".$showend."<br>";


	$showday=intval($count/60/60/24);
	$showhr=intval($count/60/60%24);
	$showmin=intval($count/60%60);
	$showsec=intval($count%60);

	echo "離世界末日2017年12月31日剩:".$showday."天".$showhr."時".$showmin."分".$showsec."秒";
	
	
	if(date("m")==4){
		echo "<img src='http://1.bp.blogspot.com/-u6QSJJIQCZM/U8XkwJvPXmI/AAAAAAAAi3c/-g1D77EKGKc/s800/tsuki_title04.png'>"."<br>";
	}
	elseif(date("m")==5){
		echo "<img src=http://japan.people.com.cn/NMediaFile/2014/0812/MAIN201408121037000224748235289.gif>"."<br>";
	}
	
	


?>