<html>
<head>
<title>Welcome to the Help Desk</title>
<link rel="stylesheet" href="style.css" type="text/css">
<meta charset="UTF-8">
</head>
<body>
<h1>Welcome to the Help Desk</h1>
<header>
<nav id="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="help.php">Help</a></li>
                </ul>
            </nav>
</header>
<img src="images/register.jpeg" alt="Register">
<p>This website is designed to provide you with IT support. Please register by entering your name and email address in the form below. If you have an exisitng account already go to Login.</p>
<form action="register.php" method="POST">
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

