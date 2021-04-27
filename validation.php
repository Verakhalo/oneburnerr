<?php
    session_start();
     
    $con= mysqli_connect('localhost', 'root');

    mysqli_select_db($con, 'oneburner');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $s = " select * from userinfo where email = '$email' && password = '$password' ";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['email'] = $email;
        header('location:home.php');
    }
    else{
        header('location:fourth.php');
    }

   




?>