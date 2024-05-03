<?php
    $student_card = trim($_POST['card_in']);
    $student_pass = trim($_POST['pswd_in']);
    $student_pass = md5($student_pass."jdsnfjd13dz");

    $hostname = "127.0.0.1:3308";
    $username = "ipaisjev";
    $password = "Thebrain2851@";
    $db_name = 'ipaisjev';

    $conn = new mysqli($hostname, $username, $password, $db_name);

    $result = $conn->query("SELECT * FROM users WHERE student_card = '$student_card' AND student_pass = '$student_pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0){
        echo "Not found user";
        exit();
    }

    setcookie('user', $user['student_card'], time() + 3600, "/");
    

    $conn->close();

    header('Location: /lk/index.php');

?>