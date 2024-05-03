<?php
    $hostname = "127.0.0.1:3308";
    $username = "ipaisjev";
    $password = "Thebrain2851@";
    $db_name = 'ipaisjev';

    $group_student = trim($_POST['group']);
    $student_card = trim($_POST['card']);
    $student_pass = trim($_POST['pswd']);
    $student_pass = md5($student_pass."jdsnfjd13dz");

    $conn = new mysqli($hostname, $username, $password, $db_name);

    if ($conn->connect_error){
        die("Connection error :". $conn->connect_error);
    }
    else
        {
            $chek_user = $conn->query("SELECT * FROM users WHERE student_card = '$student_card'");
            $unic_user = $chek_user->fetch_assoc();
            if(count($unic_user) == 0){
                $sql = "INSERT INTO users (student_card, student_group, student_pass)
                    VALUES('$student_card', '$group_student', '$student_pass')";
                if ($conn->query($sql) === true){
                    echo "Record success";
                    header("Location: /");
                }
                else{
                    echo "FAILD!!!";
                }
            }
            else{
                echo "Извините, такой пользователь уже существует!";
            }
        } 

   
    $conn->close();

?>




