<?php 
// Include the php file that handles calendar here
include "php-scripts/handle-calendar.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
        <title>Date in History Analyzer</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/grid.css">
        <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Roboto:400,400i,700" rel="stylesheet">
        <link rel="stylesheet" href="css/main.css?version=1">
    </head>

    <body>
        <!-- CREATE HEADER -->
        <header>
            <!-- CREATE NAVBAR -->
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <!-- CREATE MASTHEAD -->
            <div class="mast-head"> 
                <div class="tagline">Know More About Disney</div>
            </div>
        </header>
        <!-- CREATE MAIN CONTENT -->
        <form>
            <fieldset>
                <legend>The Walt Disney Company</legend>
                <?php 
                        // Print drop-downs here 
                        printCalendar();
                    ?>
                    <div class="form-box">
                        <input type="submit" name="send" id="send" value="Send"> </div>
            </fieldset>
        </form>
        <?php 
                // Print errors/feedback/dynamic contentThe Walt Disney Company
                evaluate();
            ?>
            <footer>
                <ul class="social-media">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.twitter.com/"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.plus.google.com/"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                </ul>
                <ul class="info">
                    <li>Ottawa XXX Institution</li>
                    <li>XX, XXX Ave, Ottawa, Canada</li>
                    <li>K1G XXX</li>
                    <li>+1-(613)-xxx-xxxx</li>
                </ul>
                <section>Shiyu Zhuang &copy; 2017</section>
            </footer>
            <!-- CREATE FOOTER -->
    </body>

</html>