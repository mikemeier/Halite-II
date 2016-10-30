<html lang="en">
<head>
    <?php include 'includes/header.php'; ?>

    <title>Hello, Halite! (part 1)</title>

    <link href="lib/bootstrap.min.css" rel="stylesheet">
    <link href="style/general.css" rel="stylesheet">
    <link href="style/learn.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include 'includes/navbar.php'; ?>
        <div class="row">
            <?php include 'includes/learn_sidebar.php'; ?>
            <div class="col-sm-9">
                <h1>Hello, Halite! (part 1)</h1>

                <p>In this short tutorial, we will explain how to submit your first bot and get your name on the Halite leaderboard.</p>
                
                <h3>Register using Github</h3>

                <p>You will need a Github account in order to participate in the Halite tournament. If you don't have a Github account or don't want to use your existing one, please create a new account <a href="https://github.com/join"> here</a>.</p>

                <p>Then sign up for Halite by clicking "Login with Github" at the top right of this page.</p>

                <h3>Download a Starter Package</h3>

                <p>Download a starter package for your language of choice from <a href="downloads.php">Downloads page</a>.</p>
                
                <p>Each starter package consists of a zip file that includes: (a) one code template for your your first bot (the MyBot file), (b) one code sample for a random bot (the RandomBot file), (c) some support libraries for the bot and (d) some tools to test your bot locally (the runGame.sh and runGame.bat files). More on these in later tutorials.</p> 

                <h3>Getting on the Leaderboard</h3>

                <p>To get on the leaderboard, you need to submit a bot to the Halite tournament.</p>
                <p>In general, you need to package your submission as a zip file that contains everything needed to run your bot (your bot’s source code, any supplemental libraries, etc.). For your first submission, you can simply use the zipped starter package that you just downloaded.</p>
                <p>Click the "Submit" button in the navigation bar. You will receive an email notification that your submission has been received.</p>
                <p>The Halite servers will compile the source code of your submission and continuously play your bot against other contestants, which will generate your leaderboard ranking. If the compilation of your source code fails, we will email you.</p>
                <p>To track your bot's progress, navigate to your <a href="user.php">homepage</a>.</p>

                <h3>Next Steps</h3>
                <p>Congratulations. You are now an official contestant!</p>
                <p>It may take up to <b>10 minutes</b> has played a few games. In the meantime, move onto <a href="basics_intro_halite">Hello Halite (part 2)</a>.</p>

                <h3>Need Help? Have Feedback?</h3>
                <p>Please post on <a href="http://forums.halite.io">the forums</a>.</p>
            </div>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="script/backend.js"></script>
    <script src="script/general.js"></script>
</body>
</html>
