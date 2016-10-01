<?php
include('meta.php');
?>
<html>
	<head>
		<title>CXA UI Demo - Landing Page</title>
		<link rel="stylesheet" type="text/css" href="css/cxa-ui.css">
		<link rel="icon" type="image/png" href="./img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=0.5">
		<style>
			h3{
				border-bottom: 1px solid #999;
				padding-bottom: 8px;
			}
		</style>
	</head>
	<body>
		<div id="home">
			<div id="topbar" class="loginbar noselect"><?php cxa_header(false, "index.php") ?></div>
			<div id="content">
				&nbsp;Welcome to the CXA UI Live Demo! <br />
				CXA (CompetiX Architecture) is a lightweight data-oriented full-stack web framework.
				CXA UI is the frontend component of this, but also takes advantage of PHP for filling in headers and footers.
				Check out the many examples (borrowed from Competix itself) included below:<hr />
				<ul>
					<li><a href="landing.php">Menu Page</a></li>
					<li><a href="judging.php">Data Entry - Judging</a></li>
					<li><a href="scoring.php">Data Entry - Scoring</a></li>
					<li><a href="showcontrol.php">Control Panel - Show Control</a></li>
					<li><a href="login.php">Authentication - Login</a></li>
					<li><a href="register.php">Authentication - Register</a></li>
					<li><a href="reg-ok.php">Authentication - Success</a></li>
				</ul>
				<hr />
				Install CXA Auth LW to enable the full functionality of the user management system.<br />
				Install CXA Tables LW to enable data management functionality.<br />
				Install CXA Main to realize the full potential of CXA as a data management framework.<br />
				NB - None of the above are currently published.
			</div>
			<div id="footer"><?php cxa_footer() ?></div>
		</div>
	</body>
</html>