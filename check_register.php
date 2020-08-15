<?php
if (!empty($_POST['username']) || !empty($_POST['password'])){
    if ((!empty($_POST['username']) && !empty($_POST['password'])) && ($_POST['password'] == $_POST['password_confirm'])
        && ($_POST['username']!=""))
    {
        include_once 'connexion.php';
        $username =$_POST['username'];
        $password =$_POST['password'];

        $hashed = password_hash($password, PASSWORD_DEFAULT);
        $statement = "SELECT * FROM user WHERE username=?";
        $stmt= $connexion->prepare($statement);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows>=1){
            $value= "user exist ? Please choose another username !";
            header("Location:register.php?user=$value");
        }
        else{
            $state= "INSERT INTO user(username, password) VALUES (?, ?)";
            $stm=$connexion->prepare($state);
            $stm->bind_param("ss", $username, $hashed);
            $stm->execute();
            $value='successful Registered ! Login';
            // header("Location:display_task.php?user=$username?value=$value");
            header("Location:login.php?value=$value");
        }

        $connexion->close();
    }
    else{
        $errorPassword = 'Check your data please !!';

        header("Location:register.php?error=$errorPassword");
    }
}

else{
    header("Location:register.php");
}