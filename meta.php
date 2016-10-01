<?php
function cxa_header($type=false,$url="landing.php"){
	echo '<a id="toplogo" href="'.$url.'">CXA UI</a>';
	if($type){
		echo "&nbsp;&nbsp;".$type;
	}else{
		echo "&nbsp;<i>Live Demo</i>";
	}
}
function cxa_minheader($type=false,$url="landing.php"){
	echo '<a id="minlogo" href="'.$url.'"></a>';
	if($type){
		echo "<h1>$type</h1>";
	}
}
function cxa_footer(){
	echo "&nbsp;CXA UI and Live Demo &copy;2016 James Rowley - <a href=\"mailto:james@jrowley.me\">contact</a>";
}
?>