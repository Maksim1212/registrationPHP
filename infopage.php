<?php
session_start();
require "db.php";

if (isset($_SESSION['logged_user'])) {

    // var_dump($_SESSION['logged_user']);

    echo "Hello nice to meet you" . PHP_EOL;


    echo ($_SESSION['logged_user']['name']) . PHP_EOL;

    echo ($_SESSION['logged_user']['surname']) . PHP_EOL;

    echo ($_SESSION['logged_user'] ['registrationDatedate']) . PHP_EOL;

    echo "<a href='logout.php'> Logout </a>";

} else {

    //echo "You are not logged !!!!!";
    header("Location: index.html");
    exit;

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Start page</title>

<body class="start" style="text-align: center">


</head>
</body>
</html>