<?php
include('meta.php');
if(!isset($loginerror)){
	$loginerror='';
}
?>
<html>
	<head>
		<title>CXA UI Demo - Login</title>
		<link rel="stylesheet" type="text/css" href="css/cxa-ui.css">
		<link rel="icon" type="image/png" href="./img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<form action="login.php" method="post" id="main">
			<div id="topbar" class="loginbar noselect"><?php cxa_header() ?></div>
			<div id="login">
					&nbsp;Username:<br/>
					<input type="text" name="username" class="logintext"/><br/>
					&nbsp;Password:<br/>
					<input type="password" name="password" class="logintext"/><br/>
					&nbsp;<input type="checkbox" name="rememberme" />Remember Me<br/>
					<input  type="submit" style="position: absolute; height: 0px; width: 0px; border: none; padding: 0px;" hidefocus="true" tabindex="-1"/>
					<?php
					if($loginerror){
						echo "<div id=\"loginerror\">".$loginerror."</div>";
					}
					?>
					<span class="logincenter">- or -</span>
					<div class="loginbutton" onclick="window.location.assign('./kiosk-menu.php')">
						Scoreboard Mode
					</div>
					<div class="loginbutton" onclick="window.location.assign('./register.php')">
						Request Access
					</div>
			</div>
			<div id="bottombar" class="loginbar noselect" onclick="document.getElementById('main').submit(); return false;">Login&nbsp;&nbsp;</div>
			<div id="footer" class="loginbar" ><?php cxa_footer() ?></div>
		</form>
	</body>
</html>