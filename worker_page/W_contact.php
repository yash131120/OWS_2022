<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

     <!-- Font Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

     <!-- Google Font -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito:wght@700&family=PT+Serif&family=Playfair+Display&family=Poltawski+Nowy:wght@600&family=Poppins:wght@400;500;600&display=swap">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/W_worker.css?v=<?php echo time(); ?>">

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
         <button class="btn">Login</button> 
     </header>
     <!-- header section ends -->

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


    
</body>
</html>