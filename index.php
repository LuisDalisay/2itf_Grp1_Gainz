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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gainz Tracker</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style-index.css">
</head>

<body>

    <video autoplay loop muted plays-inline class="back-video">
        <source src="./images/workout.mp4" type="video/mp4">
    </video>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="post">
                <h1>Sign in</h1>
                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    };
                };
                ?>
                <div class="infield">
                    <input type="email" name="email" required placeholder="enter your email">
                    <label></label>
                </div>
                <div class="infield">
                    <input type="password" name="password" required placeholder="enter your password">
                    <label></label>
                </div>
                <input type="submit" name="submit" value="login now" class="form-btn">
            </form>
        </div>

    </div>



</body>

</html>