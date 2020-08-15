<?php
    session_start();
    $id=$_GET['task_id'];
    require 'connexion.php';
    $sql="DELETE FROM task WHERE task_id=?";
    $stmt= $connexion->prepare($sql);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
    $connexion->close();

    header("Location:display_task.php");
    exit();

