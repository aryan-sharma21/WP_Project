<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>BookMyConcert: Book concerts in seconds!</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/home.css" type="text/css" media="all" />
    <!-- <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" /> -->
    <!-- <link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />--> -->
    <!-- <link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='js/jquery.color-RGBa-patch.js'></script>
    <script src='app.js'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="header">
        <!-- Logo--->
        <div class="navbar-brand">
            <a href="index.php"><img src="images/logo.png" width="118.33" height="25.52" alt="Concert Logo" /></a>
        </div>
        <!--Navbar Menu-->
        <div class="nav-wrap header-menu">
            <div class="navbar-nav ml-auto text-center header-menu" id="example-one">
                <a href="index.php" class="nav-link menu-link is-active">Home</a>
                <a href="movies_events.php" class="nav-link menu-link notify">Concerts</a>
                <?php if(isset($_SESSION['user']))
							{
								$us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
								$user=mysqli_fetch_array($us);
							?>
                <a href="profile.php" class="nav-link menu-link"> <?php echo $user['name']; ?> </a>
                <a href="logout.php" class="nav-link menu-link notify">Logout</a>
                <?php 
							}
							else {
								?>
                <a href="login.php" class="nav-link menu-link">Login</a> <?php }
								?>
            </div>
        </div>
        <!--Search Bar-->
        <div class="two-col">
            <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()">
                <div class="search-bar col-1">
                    <input type="text" placeholder="Search" required id="search111" name="search">
                </div>
                <div class="header-submit-button col-2">
                    <input type="submit" value="Search" id="button111">
                </div>
            </form>
        </div>
    </div>
</body>

<!---Javascript for search-->
<script>
function myFunction() {
    if ($('#hero-demo').val() == "") {
        alert("Please enter movie name...");
        return false;
    } else {
        return true;
    }
}
</script>