<?php
session_start();
require  "db.php";
if(isset($_SESSION['logged_user'])) {
   // var_dump($_SESSION['logged_user']);
    echo "Hello nice to meet you" . PHP_EOL;


    echo ($_SESSION['logged_user']['name']) . PHP_EOL;
    echo ($_SESSION['logged_user']['surname']) . PHP_EOL;
    echo ($_SESSION['logged_user'] ['registrationDatedate']) . PHP_EOL;

    echo "<a href='logout.php'> Выход </a>";
}

else echo "You not logged !!!!!";

?>