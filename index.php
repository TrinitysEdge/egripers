<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="Description" content="Welcome to eGripers.com. Let your voice be heard!" />
    <meta name="Keywords" content="eGripers" />
    <meta name="rating" content="General" />
    <title>Home | eGripers.com | Let your voice be heard!</title>
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
        <!-- Left Column -->
        <div class="col-sm-1"></div>
        <div class="col-xs-12 col-sm-4" id="mainBodyLeft">
            <h1>R<img id="registerLogo" src="images/eGlogo.png" />ister Now!</h1>
            <form class="form">
                <div class="form-group">
                    <label for="indexName">Name:</label>
                    <input type="text" class="form-control" id="indexName" placeholder="ex. John Doe" required />
                </div>
                <div class="form-group">
                    <label for="indexEmail">Email:</label>
                    <input type="email" class="form-control" id="indexEmail" placeholder="ex. john.doe@example.com" required />
                </div>
                <div id="indexPassField" class="form-group">
                    <label for="indexPassword">Password:</label>
                    <input type="password" class="form-control" id="indexPassword" placeholder="Enter password" required />
                    <input onkeyup="checkPass();" style="padding-top:5px;" type="password" class="form-control" id="indexPasswordConf" placeholder="Confirm Password" required />
                </div>
                <div class="form-group">
                    <label>Date of Birth:</label><br />
                    <select id="monthSelect">
                        <option>-- Month --</option>
                        <option disabled>-----------</option>
                        <option>January</option>
                    </select>
                    <select id="daySelect">
                        <option>-- Day --</option>
                        <option disabled>---------</option>
                    </select>
                    <select id="yearSelect">
                        <option>-- Year --</option>
                        <option disabled>----------</option>
                    </select>
                </div>
                <input style="color:black;" type="submit" class="btn" value="Sign Up!">
            </form><br />
        </div>
        <!-- /Left Column -->
        <div class="col-sm-1"></div>
        <!-- Right Column -->
        <div class="col-xs-12 col-sm-6" id="mainBodyRight">
            <div class="squareImage" id="indexPicture">
                <div id="indexFlavour">
                    <h4>GG A place dedicated to giving you a voice. With that voice, you can change your situation, your environment, and even the world! eGripers is created with your voice in mind.</h4>
                </div>
            </div>
        </div>
        <!-- /Right Column -->
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
