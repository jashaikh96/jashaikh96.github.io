<html>
<head>
<title>Help</title>
<link rel="stylesheet" href="style.css" type="text/css">
<meta charset="UTF-8">
</head>
<body>
<header>
<h1>No need to fear help is here!</h1>
<nav id="navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="help.php">Help</a></li>
                </ul>
            </nav>
</header>
<img src="images/superhero.png" alt="Superhero">
<p>If you need help, please visit one of the following websites:</p>
<ul>
<li><a href="https://www.youtube.com/watch?v=tKrkoxrY2wc">Helpful Video</a></li>
<li><a href="https://www.drivereasy.com/knowledge/solved-windows-10-freezes-locks-up-randomly-easily/">Computer Freezing?</a></li>
<li><a href="https://support.google.com/accounts/answer/32050?hl=en&co=GENIE.Platform%3DDesktop">Clear Cache</a></li>
<li><a href="https://www.crucial.com/articles/pc-users/how-to-fix-a-slow-computer">Slow Computer?</a></li>
</ul>
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
