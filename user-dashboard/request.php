<?php
ob_start();
session_start();
include_once 'functions.php';
include_once 'connectDB.php';

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
      header("Location:/login-page/index.php");
}



$username = $_SESSION['username'];
$first_name = $_SESSION['first'];
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Members</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><span>Schedule</span>It</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Profile</a></li>
							<li><a href="#">Settings</a></li>
							<li><a href="php/logout.php">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>

		</div>
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<a href="javascript:void(0)" class="closebtn" onclick="closeBar()">&times;</a>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index.php"> Dashboard</a></li>
			<li><a href="calender.php"> Calender</a></li>
			<li class="active"><a href="groups2.php"> Groups</a></li>
			<div class="dropdown">
			    <button class="dropbtn">Settings</button>
			    <div class="dropdown-content">
			      <a href="php/logout.php">Sign Out</a>
			      <a href="#">Change Email</a>
			      <a href="#">Change Password</a>
			    </div>
			  </div>

			<li role="presentation" class="divider"></li>
		</ul>
	</div>
  <?php
    $server = "us-cdbr-iron-east-03.cleardb.net";
    $username = "b93aa055892ff0";
    $password = "a2da8580";
    define('DBNAME', 'heroku_2dba9b3d9ee490e');

    $conn = new mysqli($server, $username, $password, DBNAME);

    if(mysqli_ping($conn) == false){
      echo "Connection did not work";
    }

  ?>
</body>

</html>
