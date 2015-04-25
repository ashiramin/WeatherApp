<?php
require_once('auth.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Weather App</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sigin.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<style type="text/css">
    h4 {
        margin-top: 25px;
    }
    .row {
        margin-bottom: 20px;
    }
    .row .row {
        margin-top: 10px;
        margin-bottom: 0;
    }
    [class*="col-"] {
        padding-top: 15px;
        padding-bottom: 15px;
        background-color: #eee;
        background-color: rgba(86,61,124,.15);
        border: 1px solid #ddd;
        border: 1px solid rgba(86,61,124,.2);
        margin-bottom: 10px;
    }

    hr {
        margin-top: 40px;
        margin-bottom: 40px;
    }</style>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home.php">Weather App</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="<?php echo($pagename== 'Home') ? 'active' : '';?>"><a href="home.php">Home</a></li>
                <li class="<?php echo($pagename== 'Addcity') ? 'active' : '';?>" ><a  href="addcity.php">Add City</a></li>
                <li class="<?php echo($pagename== 'Viewcity') ? 'active' : '';?>"><a href="viewcities.php">View Cities</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
