<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP SQL Login Page test</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.php">
                <img src="" alt="logo">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Zelda</a></li>
            </ul>
            <div>
                <?php
                if (isset($_SESSION['userId'])){
                    echo "<form action=\"includes/logout.inc.php\" method=\"post\">
                          <button type=\"submit\" name=\"logout-submit\">Logout</button>
                          </form>";
                }

                else {
                    echo "<form action=\"includes/login.inc.php\" method=\"post\">
                    <input type=\"text\" name=\"mailuid\" placeholder=\"Username or E-mail\">
                    <input type=\"password\" name=\"pwd\" placeholder=\"Password\">
                    <button type=\"submit\" name=\"login-submit\">Login</button>
                    </form>
                    <a href=\"signup.php\">Signup</a>";
                }
                ?>

            </div>
        </nav>
    </header>
