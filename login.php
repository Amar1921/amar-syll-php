<?php
        if (isset($_GET['user'])){

            $errorUsername =$_GET['user'] ;
        }
        if (isset($_GET['password'])){

            $errorPassword = $_GET['password'];
        }
        if (isset($_GET['value'])){

            $value =$_GET['value'];
        }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/style.css">

</head>
<style>
    body{
        /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#a7c7dc+0,85b2d3+100;Blue+Grey+3D */
        background: #a7c7dc; /* Old browsers */
        background: -moz-linear-gradient(45deg,  #a7c7dc 0%, #85b2d3 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(45deg,  #a7c7dc 0%,#85b2d3 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(45deg,  #a7c7dc 0%,#85b2d3 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a7c7dc', endColorstr='#85b2d3',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */


    }

</style>
<body>
<div class="container">
    <div class="row">
        <?php
        require 'inc/navbar.php';
        ?>
    </div>
</div>
<div class="container mt-5">
    <div class="row  d-flex justify-content-center">
        <div class="col-4 mt-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12  " style="min-width: 320px">
                    <div class=" col-12 d-flex justify-content-center" >
                        <h2 class=" text-center">Login</h2>
                    </div>
                    <div class="col-12 justify-content-center">
                        <small class="text-success text-center"><?php echo $value;?></small>
                    </div>
                </div>
                <div class="col-md-12  " style="min-width: 320px">
                    <form class="" method="post" action="check_login.php" style="min-width: 300px">
                        <p class="text-center text-danger"> <?php echo $errorUsername?></p>
                        <div class="input-group my-3">
                            <input type="text" class="form-control" name="username" placeholder="username" >
                        </div>

                        <div class="input-group my-3">
                            <input type="password"  class="form-control" name="password" placeholder="password" >
                        </div>
                        <div class="input-group ">
                            <p class="text-danger"> <?php echo $errorPassword?></p>
                        </div>
                        <div class="input-group ">
                            <button type="submit" class="btn btn-outline-dark" name="check_login.php">Login</button>
                        </div>
                        <p>
                            <small>  Not yet a member?</small> <a href="register.php">Register</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
<!--        <div class="col-sm-4 bg-success" style="min-height: 300px">-->
<!--            <img src="img/todo-list.png" alt="img-todo" class="img-fluid">-->
<!--        </div>-->
    </div>

</div>
<div class="row fixed-bottom">
    <div class="col-12 ">
        <?php include_once 'inc/footer.php' ?>
    </div>
</div>
</body>
</html>