<?php
session_start();
include 'connexion.php';
if (!empty($_POST['task'])) {
    try {
        var_dump($_POST);
        $task = $_POST['task'];
        $month = $_POST['month'];
        $year = $_POST['year'];
        $day = $_POST['day'];
        $time = $_POST['hour'].'h:'.$_POST['minute'];
        $date = $day.'-'.$month.'-'.$year;
        $task_user_id = $_SESSION['user_id'];
        $state = "waiting";
        $sql = "INSERT INTO task(task_user_id, task,date,time,state) VALUES (?,?,?,?,?)";
        $stmt = $connexion->prepare($sql);
        $stmt->bind_param("issss", $task_user_id, $task, $date, $time,$state);
        $stmt->execute();
        $stmt->close();
        $connexion->close();
        header("Location:display_task.php");
    }catch (Exception $exception){

        die($exception->getMessage());
    }


}else{
    $error= "Set task infos !";
    header("Location:display_task.php?error=$error");
}
