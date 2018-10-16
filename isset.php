<?php

session_start();

require "db.php";

$data = $_POST;

if( isset($_SESSION['logged_user']))

    ?>