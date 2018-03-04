<?php
	// header("Content-Type:text/html,charset=UTF-8");
	header("Content-Type:text/html;charset=UTF-8");
	if(!isset($_COOKIE["visittime"])){
		setcookie("visittime",date("y-m-d H:i:s"));
		echo("欢迎您第一次访问这个页面");
		echo "<br>";
	}else{
		setcookie("visittime",date("y-m-d H:i:s"),time()+60);
		echo("您上一次访问网站的时间为：".$_COOKIE["visittime"]);
		echo "<br>";
	}
	echo("您本次的访问时间为：".date("y-m-d H:i:s"));
?>