<?php
session_start();

?><!DOCTYPE html>
<html lang="fr-FR">
<head>
    <title>Informations <?php echo $_SESSION['uid']; ?></title>
    <style>
        @import 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css';
        @import 'https://use.fontawesome.com/releases/v5.6.0/css/all.css';
    </style>
</head>
<body>
    <?php require 'nav.php' ?>
    <?php      
        $data = $_SESSION['userData'];
    ?>
   
   <div class="row justify-content-center">
    <form class="col-md-4 my-3" role="form">

            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"># id</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="<?php echo $data[0]["uidnumber"][0]; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Uid</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="<?php echo $data[0]["uid"][0]; ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                <div class="col-lg-9">
                    <input class="form-control" type="email" value=" <?php echo isset($data[0]["mail"][0]) == true ?  $data[0]["mail"][0] : 'none'  ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Surname</label>
                <div class="col-lg-9">
                    <input class="form-control" type="text" value="<?php echo $data[0]["sn"][0]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Name</label>
                <div class="col-lg-9">
                    <input class="form-control" type="url" value="<?php echo $data[0]["givenname"][0]; ?>">
                </div>
            </div>
    
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Password</label>
                <div class="col-lg-9">
                    <input class="form-control" type="password" value="<?php echo $data[0]["userpassword"][0]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label">Confirm password</label>
                <div class="col-lg-9">
                    <input class="form-control" type="password" value="<?php echo $data[0]["userpassword"][0]; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-lg-3 col-form-label form-control-label"></label>
                <div class="col-lg-9">
                    <input type="button" class="btn btn-primary" value="Save Changes">
                </div>
            </div>
        </form>
    </div>

<body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>        