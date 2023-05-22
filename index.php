<?php

@include 'config.php';

session_start();

if (isset($_POST['register'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);

    $select = " SELECT * FROM gainz_users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $error1[] = 'user already exist!';
    } else {

        if ($pass != $cpass) {
            $error1[] = 'password not matched!';
        } else {
            $insert = "INSERT INTO gainz_users(name, email, password) VALUES('$name','$email','$pass')";
            mysqli_query($conn, $insert);
            $error1[] = 'Registraton Success!';
        }
    }
};

if (isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);

    $select = " SELECT * FROM gainz_users WHERE email = '$email' && password = '$pass' ";

    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        $_SESSION['user_name'] = $row['name'];
        $_SESSION['user_id'] = $row['id'];
        header('location:main_page.php');
    } else {
        $error[] = 'incorrect email or password!';
    }
};
