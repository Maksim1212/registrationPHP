<?php
session_start();

require  "db.php";
echo  "Hello nice to meet you".PHP_EOL;
// Если посетитель "вошёл" - приветствуем его
//if (isset($_SESSION['logged_user'] ))
//{

       echo($_SESSION['logged_user'] );
        var_dump($_SESSION['logged_user'] );
//var_dump($_SESSION['logged_user'] = $_POST['email']);
   // $_SESSION['logged_user']=$_POST['email'];
//$_SESSION['logged_user'] = $_POST['email'];
   // echo $_SESSION['logged_user'];


    echo "<a href='logout.php'> Выход </a>";

//}
//else
//{
  //  echo "<a href='login.php'> вход </a> ;";
//}
?>