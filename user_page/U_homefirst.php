<?php
   @include 'config.php';
   session_start();

   if(!isset($_SESSION['user_name'])){
      header('location:U_homefirst.php');
   }
?>

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
            <button class="btn" onclick="window.location.href='logout.php'">logOut</button>



      </header>
      <!-- header section ends -->

      <!-- home section starts -->
      <section class="home" id="home">

         <div class="content">
            <h3>Welcome in <span>Online Workers Service's</span></h3>
            <p><i class="fas fa-arrow-right"></i> Nowadays people have skills to work but can't find work we try to solve this kind of problem using our OWS Platform.</p>
            <p><i class="fas fa-arrow-right"></i> Our project help to both customer and employee the employee finds the work nearest area and customer works are done fastly.</p>
            <p><i class="fas fa-arrow-right"></i> Everyone can work according to their own skills.</p>
            <p><i class="fas fa-arrow-right"></i> We are provide location facility in our project so worker easily find the customer and customer find worker.</p>
         </div>

      </section>
      <!-- home section ends -->

      
      <!-- features section starts -->
      <section class="features" id="Workers">
         <h1 class="heading" > our <span>Workers</span></h1>
         <div class="box-container">
            <div class="box">
               <img src="img_user/w1.jpg" alt="">
               <h3>Labours</h3>
               <p>"By labour is meant the economic work of man, whether with hand or head"</p>
               <a href="U1_labours.php" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w2.jpg" alt="">
               <h3>Farm Labours</h3>
               <p>"The persons who work for the owner of the land in the fields and produce crops."</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w3.jpg" alt="">
               <h3>Electrician</h3>
               <p>Residential |Commercial |Industrial |Maintenance |Installation |Construction |Automotive |Marine</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w4.jpg" alt="">
               <h3>Painter</h3>
               <p>A house painter and decorator is a tradesman responsible for the painting and decorating of buildings, and is also known as a decorator or house painter.</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w5.jpg" alt="">
               <h3>Carpenter</h3>
               <p>Rough carpenter|Trim carpenter|Cabinetmaker|Framer|Roofer|Ship's carpenter|Joister|Green carpenter </p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w6.jpg" alt="">
               <h3>Plumber</h3>
               <p>Service and repair plumber|Residential plumber|Sanitary plumber|Water supply plumber.</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w7.jpg" alt="">
               <h3>Driver</h3>
               <p>Bus driver|ambulance driver|streetcar driver|Pay driver|Racing driver|Taxicab driver</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w13.jpg" alt="">
               <h3>Cameramen</h3>
               <p>A camera operator, or depending on the context cameraman, is a professional operator of a film camera or video camera as part of a film crew.</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w8.jpg" alt="">
               <h3>Mechanic</h3>
               <p>Diesel mechanic|General automotive mechanic|Race car mechanics|Auto glass mechanics|Heavy equipment mechanic.</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w9.jpg" alt="">
               <h3>Cleaner</h3>
               <p>a person who cleans, especially one whose regular occupation is cleaning offices, buildings, equipment, et!</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w10.jpg" alt="">
               <h3>Technicians & Repair Workers</h3>
               <p>A technician is a worker in a field of technology who is proficient in the relevant skill and technique,</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/w11.jpg" alt="">
               <h3>Domestic Workers|Helpers</h3>
               <p> those workers who perform work in or for a private household or households</p>
               <a href="#" class="btn">Read more</a>
            </div>

         </div>  
      </section>

      <section class="features" id="Contractors">
         <h1 class="heading" > our <span>Contractors</span></h1>
         <div class="box-container">
            <div class="box">
               <img src="img_user/c1.jpg" alt="">
               <h3>Labour Contractor</h3>
               <p>They supply the required workers to the organisations especially engaged in manufacturing. </p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/c2.jpg" alt="">
               <h3>Contruction Contractor</h3>
               <p> the person or company responsible for overseeing a construction project.</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/c3.jpg" alt="">
               <h3>Electrical Contractor</h3>
               <p>An electrical contractor is a business person or firm that performs specialized construction work related to the design, installation.</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/c4.jpg" alt="">
               <h3>Painting Contractor</h3>
               <p>a painting professional that you hire to complete painting services for your home.</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/c5.jpg" alt="">
               <h3>Plumbing Contractor</h3>
               <p> A plumbing contractor almost always deals exclusively with new customers, repairs, remodeling, and handling tasks that involve the building's ...</p>
               <a href="#" class="btn">Read more</a>
            </div>

            <div class="box">
               <img src="img_user/c6.jpg" alt="">
               <h3>Fabrication Contractor</h3>
               <p>the process of constructing products by combining typically standardised parts using one or more individual processes</p>
               <a href="#" class="btn">Read more</a>
            </div>


         </div>
      </section>
      <!-- features section ends -->

     

      <!--contact section design-->
      <section class="contact" id="Contact">
         
         <h1 class="heading" > our <span>Contact Me!</span></h1>

         <form action="#">

               <div class="input-box">
                  <input type="text" placeholder="Full Name">
                  <input type="email" placeholder="Email Address">
               </div>
               <div class="input-box">
                  <input type="number" placeholder="Mobile Number">
                  <input type="text" placeholder="Email Subject">
               </div>
               <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>

            <input type="submit" value="Send Message" class="btn">
         </form>
      </section>

      
      
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
                  <button class="btn" onclick="window.location.href='logout.php'">logOut</button> 
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
