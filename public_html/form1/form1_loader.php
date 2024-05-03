<?php
    if (!isset($_COOKIE['user'])){
        exit(header("Location: /"));
    }

    $hostname = "127.0.0.1:3308";
    $username = "ipaisjev";
    $password = "Thebrain2851@";
    $db_name = 'ipaisjev';

    $loader = new mysqli($hostname, $username, $password, $db_name);

    if ($loader->connect_error){
        die("Connect error".$loader->connect_error);
    }
    else{
        $a1 = trim($_POST['answer1']);
        $a2 = trim($_POST['answer2']);
        $a3 = trim($_POST['answer3']);
        $a4 = trim($_POST['answer4']);
        $a5 = trim($_POST['answer5']);
        $a6 = trim($_POST['answer6']);
        $a7 = trim($_POST['answer7']);
        $a8 = trim($_POST['answer8']);
        $stud_card = $_COOKIE['user'];



        $response = "INSERT INTO questionnaire (student_card, ans1, ans2, ans3, ans4, ans5, ans6, ans7, ans8)
                    VALUES('$stud_card', '$a1', '$a2', '$a3', '$a4', '$a5', '$a6', '$a7', '$a8')";
        if ($loader->query($response) === true){
            header("Location: /lk/");
        }
        else{
            echo "FAIL!!!";
        }
    }
    $loader->close();
?>