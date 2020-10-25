<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css">
    <link rel="stylesheet" href="css/core.css" />

    <!--Hamburger menu on the next three scripts-->
    <link rel="stylesheet" href="css/hamburgerMenu.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!--jquery -->
    <script src="scripts/hamburgerMenu.js"></script>
</head>
    <body>
        <div class="panel" id="leftPanel">
            <a href="index.html"><h4 href="index.html" class="leftPanelH4">SafeBallot</h4></a>
            <h1 class="leftPanelH4">Issue Username</h1>
        </div>

        <div class="panel" id="contentPanel">
			<div class="CenterContent">
				<h1 class="contentPanel" style="text-align:center">Write this down:</h1>

				<!--THIS IS WHERE YOU WILL INSERT THE USERNAME-->
				<?php
					if(isset($_SESSION['webcode']){
						echo '<h4 id="userAccountField" name="usernameField">' . $_SESSION['webcode'] . '</h4>';
					}
				?>
				

				<p class="contentPanelH4" style="text-align:center">If you lose this username, you will be unable to vote online due to election integrity. Iif you lose it, you can still vote in person.</p>

				<p class="contentPanelH4" style="text-align:center"><b>Your passwords should arrive in the mail within two days.</b></p>

				<!--THIS IS WHERE YOU WILL INSERT THE PASSWORD-->
				<?php
					if(isset($_SESSION['mailcode']){
						echo '<h4 id="userAccountField" name="passwordField">' . $_SESSION['mailcode'] . '</h4>';
					}
				?>
				
				<p class="contentPanelH4" style="text-align:center">As a part of this demo, your password is shown here</p>



			</div>
        </div>

        <div class="panel sidebar" id="rightPanel">
			<!--Hamburger Menu-->
			<div class="CenterTop">
				<div class="open" padding="100px">
					<span class="cls" padding="100px"></span>
					<span padding="100px">
						<ul class="sub-menu ">
							<li>
								<a href="index.html" title="home">Home</a>
							</li>
							<li>
								<a href="howto.html" title="howto">How to vote online</a>
							</li>
							<li>
								<a href="registerToVote.html" title="register">Register</a>
							</li>
							<li>
								<a href="voteLogin.php" title="vote">Vote</a>
							</li>
							<li>
								<a href="covidInfo.html" title="covidInfo">Covid-19</a>
							</li>
						</ul>
					</span>
					<span class="cls"></span>
				</div>
			</div>
        </div>
    </body>
</html>