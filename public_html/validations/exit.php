<?php  
    setcookie('user', $user['student_card'], time() - 3600, "/");
    header("Location: /")
?>