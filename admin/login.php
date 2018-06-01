<?php
/**
 * Created by PhpStorm.
 * User: X
 * Date: 26.5.2018 г.
 * Time: 15:28
 */
 require_once("includes/init.php");


 //if($session->is_signed_in()){

   //  redirect("index.php");
 //}
$the_message=null;
 if(isset($_POST['submit'])){

     $username=trim($_POST['username']);
     $password=trim($_POST['password']);


     $user_found=user::verify_user($username,$password);



     if($user_found){
         $session->login($user_found);
         redirect("index.php");

     }
     else{
         $the_message="Your password or username are incorrect";
     }


 }


 ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">

    <div class="row">

        <div class="jumbotron">
            <h1 class="display-4">Please login!</h1>
            <hr class="my-4">
           <form action="login.php" method="post">
               <div class="form-group">
                   <label for="username">Enter your email</label>
                   <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
               </div>

               <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
               </div>
               <div class="form-group">
                   <input type="submit" id="submit" value="Submit" name="submit" class="btn btn-primary">
               </div>

           </form>
            <?php
                if($the_message!=null){
                    echo '<p>Wrong username or password</p>';
                }
            ?>
        </div>

    </div>

</div>

</body>

</html>