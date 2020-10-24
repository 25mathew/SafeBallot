<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mini.css/3.0.1/mini-default.min.css" />
    <link rel="stylesheet" href="css/core.css" />
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--<body id="flagBackground" class="verticalContent">

    <div id="centerPanel" class="CenterContent">
        <h3 id="whiteText" class="contentPanelH1 title">Vote</h3>
        <form action="functions/vote.php" method="post" style="display:block">
            <label for="username">Username</label><br>
            <input type="text" id="tinput" name="username"><br>

            <label for="password">Password</label><br>
            <input type="password" id="tinput" name="password"> <br>

            <a href="ballot.html" class="button">Submit</a>
			<input type="submit" value="Submit" class="button">
            <a href="new-password.html" class="button">Lost your password?</a>
        </form>
    </div>
</body>-->

<body>
    <div div class="panel" id="leftPanel">
        <h4 class="leftPanelH4">SafeBallot</h4>
        <h1 class:"leftPanelH1">Login</h1>
    </div>

    <div class="panel" id="contentPanel">
        <div class="CenterContent">
            <h1 class="contentPanel" style="text-align:center">Log in</h1>

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

    <div class="panel" id="rightPanel">

    </div>
</body>
</html>