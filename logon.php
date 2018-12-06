<!DOCTYPE html>
<html>
    <head>
        <title>About</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="site.css">
        
    </head>
    <body>
        <div class="navbar">
            <div class="navbarElement centered">
                <a href="index.html" class="sansSerif">Home</a>
            </div>
            <div class="navbarElement centered ">
                <a href="about.html" class="sansSerif">About</a>
            </div>
            <div class="navbarElement centered">
                <a href="current.html" class="sansSerif">Current</a>
            </div>
            <div class="navbarElement centered">
                <a href="logon.php" class="sansSerif">Log on</a>
            </div>
        </div>

        <div class="container">
            <div class="centeredContainer sixtyPercent">
                <h1 class="centered title">Log on</h1>
                <form name="input_form" action="" method="post">
                    <h3>Name:</h3> <input type="text" name="name" id="name_input">
                </form>
                <?php 
                    if ($_POST) {
                        echo "<h3 class=\"sansSerif\"> Welcome, " . $_POST['name'] . "! </h3>"; 
                    } else {
                        echo "<h3 class=\"sansSerif\"> Hi! Please enter your name! </h3>";
                    }
                ?>
            </div>
        </div>

    </body>
</html>
