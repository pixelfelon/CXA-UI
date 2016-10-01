<?php
include('meta.php');
?>
<html>
	<head>
		<title>CXA UI Demo - Show Control</title>
		<link rel="stylesheet" type="text/css" href="css/cxa-ui.css">
		<link rel="icon" type="image/png" href="./img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="main" style="min-height: 385px;">
			<div id="topbar" class="loginbar noselect">
				<?php cxa_header() ?>
				<div id="refresher" style="margin-left: 8px;"></div>
			</div>
			<div class="welcomebar">
			Show Control<br/>
			</div>
			<div id="login" style="height: 210px; padding: 4px 15px; width: 270px;">
				<select id="teamlist" class="registertext" style="width: 270px; margin-bottom: 0px;">
					<option>Thing A</option>
					<option>Thing B</option>
					<option>Thing C</option>
				</select>
				<br/>
				<button id="goscoreboard" class="registertext loginbutton" style="font-weight: normal; width: 270px; height: 30px; margin-bottom: 0px;">Display Scoreboard</button>
				<button id="gomatch" class="registertext loginbutton" style="font-weight: normal; width: 270px; height: 30px; margin-bottom: 0px;">Display Match</button>
				<button id="rprevmatch" class="scorebutton" style="font-weight: normal; margin-left: 0; width: 48%; height: 30px;">Prev Match</button><!--
			 --><button id="rnextmatch" class="scorebutton" style="font-weight: normal; margin-right: 0; width: 48%; height: 30px;">Next Match</button>
				<button id="gobracket" class="registertext loginbutton" style="font-weight: normal; width: 270px; height: 30px; margin-bottom: 0px;">Display Bracket</button>
				<button id="gocallout" class="registertext loginbutton" style="font-weight: normal; width: 270px; height: 30px; margin-bottom: 0px;">Display Team Callout</button>
				<button id="starttimer" class="scorebutton" style="font-weight: normal; margin-left: 0; width: 32%; height: 30px;">Start Timer</button><!--
			 --><button id="canceltimer" class="scorebutton" style="font-weight: normal; width: 32%; height: 30px;">Cancel ""</button><!--
			 --><button id="endtimer" class="scorebutton" style="font-weight: normal; margin-right: 0; width: 32%; height: 30px;">End Timer</button>
				<button id="refresh" class="registertext loginbutton" style="font-weight: normal; width: 270px; height: 30px;">Refresh Bigscreen</button>
				<br/>
			</div>
			<div id="footer" class="loginbar"><?php cxa_footer() ?></div>
		</div>
	</body>
</html>