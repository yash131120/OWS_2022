<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

   <!-- font awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   <!-- Google Font -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito:wght@700&family=PT+Serif&family=Playfair+Display&family=Poltawski+Nowy:wght@600&family=Poppins:wght@400;500;600&display=swap">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/worker.css?v=<?php echo time(); ?>">">
   <link rel="stylesheet" href="css/btn.css?v=<?php echo time(); ?>">">

</head>

<body>

   <!-- header section starts -->

   <header class="header">

      <a href="#" class="logo"> <img src="img/logo.png" alt="" height="50px" width="50px"> OWS </a>

      <nav class="navbar">
         <a href="W_homefirst1.php">Home</a>
         <a href="W_worker.php">Workers</a>
         <a href="W_contractors.php">Contractors</a>
         <a href="W_about.php">About Us</a>
         <a href="W_contact.php">Contact</a>
      </nav>
      <button class="btn" onclick="window.location.href='../user_page/logout.php'">logOut</button>
   </header>
   <!-- header section ends -->

   <!-- home section starts 
      <section class="home" id="home">

         <div class="content">
            <h3>Welcome in <span>Online Workers Service's</span></h3>
            <p><i class="fas fa-arrow-right"></i> Nowadays people have skills to work but can't find work we try to solve this kind of problem using our OWS Platform.</p>
            <p><i class="fas fa-arrow-right"></i> Our project help to both customer and employee the employee finds the work nearest area and customer works are done fastly.</p>
            <p><i class="fas fa-arrow-right"></i> Everyone can work according to their own skills.</p>
            <p><i class="fas fa-arrow-right"></i> We are provide location facility in our project so worker easily find the customer and customer find worker.</p>
         </div>

      </section>
      home section ends -->


   <!--home section design-->
   <section class="home1" id="home">
      <div class="home-content">
         <h3>Hello, Welcome in</h3>
         <h1>Online Workers Service's</h1>
         <h3>And available Workers is <span class="multiple-text">Labours, Farm Labours,</span></h3>
         <br>
         <h3>Create New Profile And Select your Work</h3>

         <button class="cssbuttons-io-button" onclick="window.location.href='W_form_Detail.php'"> Get started
            <div class="icon">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                  <path fill="none" d="M0 0h24v24H0z"></path>
                  <path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
               </svg>
            </div>
         </button>


      </div>

   </section>


   <!--scroll reveal-->
   <script src="https://unpkg.com/scrollreveal"></script>

   <!--typed js-->
   <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

   <!--custom js-->
   <script src="../user_page/js/script.js"></script>


   <!-- footer section starts -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3> <a href="#" class="logo"> <img src="img/logo.png" alt="" height="50px" width="50px"> OWS </a></h3>
            <p>Welcome in <span>Online Workers Service's</span></p>
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <button class="btn" onclick="window.location.href='../user_page/logout.php'">logOut</button>
         </div>

         <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> OWS@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-market-alt"></i> Bhavnagar, India - 364002 </a>
         </div>

         <div class="box">
            <h3>Contact info</h3>
            <a href="W_homefirst1.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="W_worker.php" class="links"> <i class="fas fa-arrow-right"></i> Workers </a>
            <a href="W_contractors.php" class="links"> <i class="fas fa-arrow-right"></i> Contractors </a>
            <a href="W_about.php" class="links"> <i class="fas fa-arrow-right"></i> About Us </a>
            <a href="W_contact.php" class="links"> <i class="fas fa-arrow-right"></i> Contact </a>
         </div>

         <div class="box">
            <h3>Newsletter</h3>
            <p>Subscribe for latest updates</p>
            <input type="email" placeholder="your email" class="email">
            <input type="submit" value="subscribe" class="btn">
            <img src="img/payment.jpg" class="payment-img" alt="">
         </div>

      </div>
      <div class="credit"> &copy; 2023 Property Website. All Rights Reserved.
         <p><span> <a href="#">Privacy Policy</a> | <a href="#"> Terms of Use </a></span>
      </div>
      </p>
   </section>
   <!-- footer section ends -->


</body>

</html>