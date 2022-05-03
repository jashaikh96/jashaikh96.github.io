<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css" type="text/css">
<meta charset="UTF-8">
</head>
<body>
<header>
<h1>Hello existing users, please login here.</h1>
<nav id="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="help.php">Help</a></li>
                </ul>
            </nav>
</header>
<img src="images/itlock.jpeg" alt="IT login">
<form action="login.php" method="POST">
Name: <input type="text" name="name"><br>
Email: <input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$random_number = rand();
echo $random_number;
?>
<?php
session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['email'] = $_POST['email'];
setcookie('name', $_POST['name'], time()+3600);
setcookie('email', $_POST['email'], time()+3600);
?>

<?php
date_default_timezone_set("America/New_York");
echo date("l, F j, Y, g:i a");
?>

