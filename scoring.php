<!--
scoring.php - Example page for CXA UI web data framework demo.
Copyright (c) 2016 James Rowley

This file is part of CXA UI, which is licensed under the Creative Commons Attribution-NonCommercial-ShareAlike 3.0 United States License.
You should have received a copy of this license with CXA UI.
If not, to view a copy of the license, visit https://creativecommons.org/licenses/by-nc-sa/3.0/us/legalcode
-->

<?php
include('meta.php');
?>
<html>
	<head>
		<title>CXA UI Demo - Scoring</title>
		<link rel="stylesheet" type="text/css" href="css/cxa-ui.css">
		<link rel="icon" type="image/png" href="./img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<div id="main" style="min-height: 460px;">
			<div id="topbar" class="loginbar noselect">
				<?php cxa_header() ?>
				<div id="refresher" style="margin-left: 8px;"></div>
			</div>
			<div class="welcomebar">
			Scoring Mode<br/>
			</div>
			<div id="login" style="height: 312px; width: 270px; padding: 15px;">
				&nbsp;Match:<br/>
				<select id="matchlist" class="registertext" style="width: 270px;">
					<option>Thing A</option>
					<option>Thing B</option>
					<option>Thing C</option>
				</select>
				<br/>
				<div class="scol"><!--
				 --><div class="sifbar" style="background:#44f">
						Blue Score<br/>
						<div class="stlabel">1</div><input id="score1-1-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">2</div><input id="score1-2-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">3</div><input id="score1-3-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">4</div><input id="score1-4-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">5</div><input id="score1-5-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">6</div><input id="score1-6-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">P</div><input id="score1-p-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">T</div><input id="score1-i" type="number" class="scoretext" pattern="[0-9]*"/><br/>
					</div><div class="sifbar" style="background:#f44">
						Red Score<br/>
						<div class="stlabel">1</div><input id="score2-1-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">2</div><input id="score2-2-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">3</div><input id="score2-3-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">4</div><input id="score2-4-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">5</div><input id="score2-5-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">6</div><input id="score2-6-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">P</div><input id="score2-p-i" type="number" class="scoretext updatescore" pattern="[0-9]*"/><br/>
						<div class="stlabel">T</div><input id="score2-i" type="number" class="scoretext" pattern="[0-9]*"/><br/>
					</div><button id="gomatch" class="scorebutton">
						Disp Match
					</button><button id="starttimer" class="scorebutton">
						Start Timer
					</button><button id="endtimer" class="scorebutton">
						End Timer
					</button><!--
			 --></div>
			</div>
			<div>
				<div id="prevmatch" class="bottombutton tri-left noselect" onclick="prevMatch();">Prev</div>
				<div id="savematch" class="bottombutton tri-center noselect" onclick="postCurrentMatch();">Save</div>
				<div id="nextmatch" class="bottombutton tri-right noselect" onclick="nextMatch();">Next</div>
			</div>
			<div id="footer" class="loginbar"><?php cxa_footer() ?></div>
		</div>
	</body>
</html>