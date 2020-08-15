<?php
session_start();
$username=$_SESSION['username'];
require 'connexion.php';
if (!$username['username']){
    header("Location:login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>TodoList</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="container">
   <div class="row justify-content-center">
       <?php
           echo '<div class="col-12 bg-light rounded nav d-flex justify-content-between">
                     <nav class="navbar navbar-dark px-1 " style="color: #5a6268">
                         <h1 class="font-weight-bolder text-dark "> 𝕄𝕪 𝕋𝕠𝕕𝕠𝕃𝕚𝕤𝕥  </h1 >
                     </nav>
                     <div class="col-5 text-right">
                        <h2 id="titre" class="ml-2 pt-3">'.ucwords($username) .'</h2>
                      </div>
           </div>';
       ;?>
   </div>
</div>
<div class="row">
    <div class="col-md d-flex justify-content-end my-2 mr-4">
        <a href="logout.php" class="text-right "><input type="button" value="Logout" class="btn btn-outline-dark"></a>
    </div>
</div>
<?php
  include_once 'task.php';
?>
<div class="container-fluid mt-5">
    <div class="row justify-content-center   ">
        <div class="col-8 mt-5">
          <div class="mt-5">
              <hr>
          </div>
        </div>
    </div>
    <div class="row">
        <!--------    DISPLAYING ERROR ADD TASK  ------>
        <div class="col-sm-12 text-left text-danger">
           <p> <?php if (isset($_GET)){
                   $error = $_GET['error'];
                   echo $error;
               }?></p>
        </div>
        <div class="col-md-12 ">
            <form action="add_task.php" method="post" class="form-inline add  d-flex d-inline-flex mx-2 ">
                <input type="text" placeholder="Add task" name="task" class="form-control">
                <label for="" class="mx-2">year</label>
                <select name="year" id="" class="form-control mr-2" >
                    <?php
                    for($x=2020; $x<2025;$x++){
                        echo "<option value='$x'>$x</option>";
                    }
                    ?>
                </select>
                <label for="">Month</label>
                <select id="month" name="month" class="form-control mr-2">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
                <label for="day">day</label>
                <select name="day" id="" class="form-control mr-2">
                    <?php
                    for($i=1; $i<32;$i++){


                        if ($i<10){
                            $j= $i +1;
                            $j= "0".$i;
                        }else{
                            $j=$i;
                        }
                        echo "<option value='$j'>$j</option>";
                    }
                    ?>
                </select>
                <label for="hour">hour</label>
                <select name="hour" id="" class="form-control mr-2">
                    <?php
                    for($i=0; $i<23;$i++){

                        $j= $i +1;
                        if ($i<10){
                            $j= "0".$i;
                        }
                        echo "<option value='$j'>$j</option>";
                    }
                    ?>
                </select>
                <label for="minute">Minute </label>
                <select name="minute" id="" class="form-control mx-2">
                    <?php
                        for($i=0; $i<60;$i++){

                            if ($i<10){
                                $j= $i +1;
                                $j= "0".$i;
                            }else{
                                $j=$i;
                            }
                            echo "<option value='$j'>$j</option>";
                        }
                    ?>
                </select>
                <button type="submit"  class="btn-outline-dark btn m-3" >Add task</button>
            </form>
        </div>
    </div>


<?php include_once 'inc/footer.php';?>