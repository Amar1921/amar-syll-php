<?php
session_start();
if (!empty($_POST['username']) || !empty($_POST['password'])){

    include_once 'connexion.php';

    $username = $_POST['username'];
    $statement = "SELECT * FROM user WHERE username=?";
    $stmt = $connexion->prepare($statement);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows==1){
        $row=$result->fetch_assoc();
        $hash = $row['password'] ;
        $user_id=$row['user_id'];
        if (password_verify($_POST['password'], $hash)){

            $_SESSION['username']= $row['username'];
            $_SESSION['user_id']=$row['user_id'];
            $user=$_SESSION['username'];
            $task_user_id=$row['user_id'];
            header("Location:display_task.php");
            var_dump($_SESSION);
        }
        else{
            $errorPass = 'wrong password';
            header("Location:login.php?password=$errorPass");
        }
    }
    else{
        $user = "user not exist";
        header("Location:login.php?user=$user");
    }
}else{
    header("Location:login.php");
}
