<?php

session_start();
include 'connexion.php';
//var_dump($_SESSION);
// var_dump($_SESSION);
$task_id= $_GET['id_task'];
var_dump($_GET);
try{
    if ($_POST['state']){
        $state = $_POST['state'];
        var_dump($state);

        try {
            $sql = "UPDATE task SET state=? WHERE task_id=$task_id";
            $stmt = $connexion->prepare($sql);
            $stmt->bind_param("s",$state);
            $stmt->execute();
            $stmt->close();
            $connexion->close();
            header("Location:display_task.php");

        }catch (Exception $exception){
            die('Error' .$exception->getMessage());
        }

    } else {
        header("Location:display_task.php");
    }
}
catch(Exception $exception){
    die('ERROR ' .$exception->getMessage());
}
?>