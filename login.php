<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="Description" content="Welcome to eGripers.com. Let your voice be heard!" />
    <meta name="Keywords" content="eGripers" />
    <meta name="rating" content="General" />
    <title>Login | eGripers.com | Let your voice be heard!</title>
    <link type="image/x-icon" rel="icon" href="images/favicon.ico" />
    <link rel="shortcut icon" href=images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/booostrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body role="document">
    <!-- Header -->
    <?php include'includes/header.php' ?>
    <!-- /Header -->

    <!-- Main Body -->
    <div class="container" id="mainBody">
        <div class="col-sm-3"></div>
        <div class="col-sm-6" id="loginForm">
            <h3>Sign In</h3>
            <form>
                <div class="form-group">
                    <label for="loginEmail">Email:</label>
                    <input class="form-control" id="loginEmail" type="email" required />
                </div>
                <div class="form-group">
                    <label for="loginPass">Password:</label>
                    <input class="form-control" id="loginPass" type="password" required />
                </div>
                <div class="form-group form-inline">
                    <input class="form-control" id="loginCheckbox" type="checkbox" />
                    <label for="loginCheckbox">Remember me!</label>
                    <a class="pull-right" href="#">Register for eGripers</a>
                </div>
                <input class="btn btn-default" id="loginButton" value="Login" />
            </form><br />
        </div>
        <div class="col-sm-3"></div>     
    </div>
    <!-- /Main Body -->

    <!-- Footer -->
    <?php include'includes/footer.php' ?>
    <!-- /Footer -->
    <!-- #######     Core Javascript    ########
        ========================================
        Placed at the end so page loads faster-->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/npm.js"></script>
    <script src="assets/js/essential.js"></script>
</body>
</html>
