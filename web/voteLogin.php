<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css" />
    <link rel="stylesheet" href="css/core.css" />
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Hamburger menu on the next three scripts-->
	<link rel="stylesheet" href="css/hamburgerMenu.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!--jquery -->
	<script src="scripts/hamburgerMenu.js"></script>
</head>

<body>
    <div div class="panel" id="leftPanel">
        <a href="index.html"><h4 class="leftPanelH4">SafeBallot</h4></a>
        <h1 class="leftPanelH1">Login</h1>
    </div>

    <div class="panel" id="contentPanel">
        <div class="CenterContent">
            <h1 class="contentPanel" style="text-align:center">Login</h1>

            <form action="functions/vote.php" method="post" style="display:block;">
                <label for="username">Username</label><br>
                <input type="text" id="tinput" name="username"><br>

                <label for="password">Password</label><br>
                <input type="password" id="tinput" name="password"> <br>

                <!--<a href="ballot.html" class="button">Submit</a>-->
                <input type="submit" value="Submit" class="button">
                <a href="issueNewPassword.html" class="button">Lost your password?</a>
            </form>
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