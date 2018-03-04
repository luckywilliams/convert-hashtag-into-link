<?php
if(isset($_GET["tag"])){
	
	//simple senitize and display system.	
	$tag = preg_replace('#[^a-z0-9_]#i', '', $_GET["tag"]);
	
	//connect hashtag with GET value
	$hashtag = "#".$tag;
	
	// print final result
	echo $hashtag;

}
?>