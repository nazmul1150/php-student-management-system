<?php

session_start();
if (isset($_SESSION['set'])) {
    echo "<script>window.open('admin.php','_self');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>student management</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="login.css">
    <script src="login.js.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>

        <form class="form-signin" method="post" action="login.php">
            <?php
            $conn = mysqli_connect('localhost','root','','st_m');
            if(isset($_POST['submit'])){

                if(empty($_POST['email'])||empty($_POST['password'])){
                    $coll='<p class="text-danger">file is required failed.</p>';
                }
                else{

                    $email=md5($_POST['email']);
                    $password=md5($_POST['password']);

                    $qur="SELECT `id`, `email`, `password` FROM `user_id` WHERE `email`='$email' AND `password`='$password'";

                    $run=mysqli_query($conn,$qur);
                    $row=mysqli_num_rows($run);

                    if($row>0){

                        while ($data=mysqli_fetch_assoc($run)) {

                            $id=$data['id'];
                            $_SESSION['set']=$id;
                            echo "<script>window.open('admin.php','_self');</script>";
                            
                        }

                    }
                    else{
                        $coll2='<p class="text-danger">invalied email or password</p>';
                    }
                }
            }
            ?>
            <?php if(isset($coll)){ echo $coll; } ?>
            <?php if (isset($coll2)){ echo $coll2; } ?>
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->
</body>
</html>