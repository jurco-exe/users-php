<?php
require '../db/connection.php';

if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['phone']) && isset($_POST['gender']) && isset($_POST['role'])) {

        if (empty($_POST['username'])) {
            header("Location:../php/addUser.php?error=Username field is empty");
            exit();
        } else if (empty($_POST['email'])) {
            header("Location:../php/addUser.php?error=Email field is empty");
            exit();
        } else if (empty($_POST['password'])) {
            header("Location:../php/addUser.php?error=Password field is empty");
            exit();
        } else if (empty($_POST['age'])) {
            header("Location:../php/addUser.php?error=Age field is empty");
            exit();
        } else if (empty($_POST['phone'])) {
            header("Location:../php/addUser.php?error=Phone field is empty");
            exit();
        } else if (empty($_POST['gender'])) {
            header("Location:../php/addUser.php?error=Gender field is empty");
            exit();
        } else if (empty($_POST['role'])) {
            header("Location:../php/addUser.php?error=Role field is empty");
            exit();
        } else {

            include "../db/connection.php";

            $username = mysqli_real_escape_string($DBconnection, $_POST['username']);
            $age = mysqli_real_escape_string($DBconnection, $_POST['age']);
            $email = mysqli_real_escape_string($DBconnection, $_POST['email']);
            $password = mysqli_real_escape_string($DBconnection, $_POST['password']);
            $phone = mysqli_real_escape_string($DBconnection, $_POST['phone']);
            $gender = mysqli_real_escape_string($DBconnection, $_POST['gender']);
            $role = mysqli_real_escape_string($DBconnection, $_POST['role']);

            $SQL_select = "SELECT * FROM users WHERE username = '$username'";
            $RESULT_select = mysqli_query($DBconnection, $SQL_select);

            if (mysqli_num_rows($RESULT_select) > 0) {
                header("Location:../addUser.php?error=User already exists");
                exit();
            } else {
                $SQL_insert = "INSERT INTO users(username, email, password, age, phone, gender, role) VALUES('$username','$email','$password','$age','$phone','$gender', '$role')";
                // die('wdawdaw');
                $RESULT_insert = mysqli_query($DBconnection, $SQL_insert);

                if ($RESULT_insert) {
                    header("Location:../index.php?succ=User was created");
                    exit();
                } else {
                    echo "data is incorrect";
                }
            }
        }
    } else {
        header("Loacation:../php/addUser.php");
        exit();
    }
};
