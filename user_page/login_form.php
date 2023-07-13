<?php

   @include 'config.php';

   session_start();
   

   if(isset($_POST['submit'])){

      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $pass = md5($_POST['password']);
      $_SESSION['identify'] = $_POST['email'];

      if($_POST['user_type'] == 'user')
      {
      $select = " SELECT * FROM `user_form` WHERE email = '$email' && password = '$pass' ";
      $result = mysqli_query($conn, $select);
      }

      else
      {
      $select = " SELECT * FROM `worker_form` WHERE email = '$email' && password = '$pass' ";
      $result = mysqli_query($conn, $select);
      }
      
      

      if(mysqli_num_rows($result) > 0){ 

         $row = mysqli_fetch_array($result);

         if($row['user_type'] == 'worker'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:../worker_page/W_homefirst1.php');

         }elseif($row['user_type'] == 'user'){

            $_SESSION['user_name'] = $row['name'];
            header('location:U_homefirst.php');

         }
      
      }else{
         $error[] = 'incorrect email or password!';
      }

   };
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>login form</title>

      <!-- custom css file link  -->
      <link rel="stylesheet" href="css/login.css">

   </head>
   <body>
      
   <div class="form-container">

      <form action="" method="post">
         <h3>login now</h3>
         <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            };
         };
         ?>
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder="enter your password">
         <select name="user_type">
         <option value="user">User</option>
         <option value="worker">Worker</option>
      </select>
         <input type="submit" name="submit" value="login now" class="form-btn">
         <p>don't have an account? <a href="register_form.php">register now</a></p>
      </form>

   </div>

   </body>
</html>