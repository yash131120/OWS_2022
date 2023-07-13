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
      <link rel="stylesheet" href="css/user.css">

   </head>

   <body>
      
      <!-- header section starts -->

      <header class="header">
        
         <a href="#" class="logo"> <img src="img_user/logo.png" alt="" height="50px" width="50px"> OWS </a>

         <nav class="navbar">
            <a href="#home">Home</a>    
            <a href="#Workers">Workers</a>    
            <a href="#Contractors">Contractors</a>     
            <a href="U_about.html">About Us</a>    
            <a href="#Contact">Contact</a> 
            
         </nav>
            <button class="btn" onclick="window.location.href='login_form.php'">Login</button>

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
            <p>We Are Provide Location Facility In Our Project So Worker Easily Find The Customer And Customer Find Worker.<br>Everyone Can Work According To Their Own Skills.</p>
               <div class="social-media">
                  <a href="#"><i class='bx bxl-facebook'></i></a>
                  <a href="#"><i class='bx bxl-twitter'></i></a>
                  <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                  <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
        </div>
    </section>


   <!--scroll reveal-->
   <script src="https://unpkg.com/scrollreveal"></script>

   <!--typed js-->
   <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

   <!--custom js-->
   <script src="js/script.js"></script>

      
      <!-- footer section starts -->
      <section class="footer">
         <div class="box-container">
            <div class="box">
               <h3> OWS <i class="fas fa-user"> </i> </h3>
               <p>Welcome in <span>Online Workers Service's</span></p>
               <div class="share">
                     <a href="#" class="fab fa-facebook-f"></a>
                     <a href="#" class="fab fa-twitter"></a>
                     <a href="#" class="fab fa-instagram"></a>
                     <a href="#" class="fab fa-linkedin"></a>
                  </div>
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
               <a href="#home" class="links"> <i class="fas fa-arrow-right"></i> home </a>
               <a href="#Workers" class="links"> <i class="fas fa-arrow-right"></i> Workers </a>
               <a href="#Contractors" class="links"> <i class="fas fa-arrow-right"></i> Contractors </a>
               <a href="U_about.html" class="links"> <i class="fas fa-arrow-right"></i> About Us </a>
               <a href="#Contact" class="links"> <i class="fas fa-arrow-right"></i> Contact </a>
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
            <p><span> <a href="#">Privacy Policy</a> | <a href="#"> Terms of Use </a></span> </div></p>
      </section>
      <!-- footer section ends -->


   </body>
</html>

