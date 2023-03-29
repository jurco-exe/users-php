<?php

$DBconnection = mysqli_connect("localhost", "root", "", "users-webapp");

if (!$DBconnection) {
    die('Connection failed.....' . mysqli_connect_error());
}
