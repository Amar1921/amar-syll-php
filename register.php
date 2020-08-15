<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration </title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap.css">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" >
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
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
    <div class="row ">
        <div class="col-sm-12 mt-5 d-flex justify-content-center">
            <h2 class="text-dark">Register</h2>
        </div>
        <div class="col-sm-12 d-flex justify-content-center">
            <form method="post" action="check_register.php" class="px-1" style="min-width: 300px ;padding: inherit" >
                <div class="row d-flex flex-column justify-content-center">
                    <div class="col-12">
                        <h6 class="text-danger"><?php

                            if(isset($_GET)){
                                $errorPassword = $_GET['error'];
                                echo $errorPassword;
                            }
                            ?></h6>
                    </div>
                    <div class="col-12">
                        <h6 class="text-danger"><?php

                            if(isset($_GET)){
                                $username = $_GET['user'];
                                echo $username;
                            }
                             ?></h6>
                    </div>
                </div>
                <div class="input-group p-1">
                    <input class="form-control" type="text" name="username" placeholder="username">
                </div>
                <div class="input-group p-1">
                    <input class="form-control" type="password" name="password" placeholder="password">
                </div>
                <div class="input-group p-1">
                    <input class="form-control" type="password" name="password_confirm" placeholder="Confirm password">
                </div>
                <div class="input-group p-1 ">
                    <button type="submit" class="btn btn-outline-dark " name="">Register</button>
                </div>
                <p>
                   <small> Already a member?</small> <a href="login.php">Sign in</a>
                </p>
            </form>
        </div>
    </div>
</div>

<div class="row fixed-bottom">
    <div class="col-12 ">
        <?php include_once 'inc/footer.php' ?>
    </div>
</div>
</body>
</html>