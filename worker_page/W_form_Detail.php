


<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Registration Form in HTML CSS</title>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito:wght@700&family=PT+Serif&family=Playfair+Display&family=Poltawski+Nowy:wght@600&family=Poppins:wght@400;500;600&display=swap">

  <!---Custom CSS File--->
  <link rel="stylesheet" href="css/W_form_Detail.css?v=<?php echo time(); ?>">
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




  <section class="container">
    <header>Enter Your Detail's</header>
    <form action="" class="form" method="post">
      <div class="input-box">
        <i class="fas fa-user icon"></i>
        <label>Full Name</label>
        <input type="text" placeholder="Enter full name" name="fname" required>
      </div>

      <div class="input-box">
        <i class="fa-solid fa-envelope icon"></i>
        <label>Email Address</label>
        <input type="text" placeholder="Enter email address" name="mail" value="<?php session_start(); if(isset($_SESSION['identify'])){echo $_SESSION['identify'];}?>" disabled/>
      </div>

      <div class="column">
        <div class="input-box">
          <i class="fa-solid fa-mobile icon"></i>
          <label>Phone Number</label>
          <input type="text" placeholder="Enter phone number" name="phone" maxlength="10" required />
        </div>
        <div class="input-box">
          <i class="fa-solid fa-calendar-days icon"></i>
          <label>Birth Date</label>
          <input type="date" placeholder="Enter birth date" name="date" required />
        </div>
      </div>
      <div class="gender-box">
        <h3><i class="fa-solid fa-person-half-dress icon"></i> Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="check-male" name="gender" value="male" checked />
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input type="radio" id="check-female" name="gender" value="female"/>
            <label for="check-female">Female</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <i class="fa-solid fa-location-dot icon"></i>
        <label>Address</label>
        <input type="text" placeholder="Enter street address" name="address" required />
        <div class="column">
          <div class="select-box">
            <select name="state">
              <option hidden>State</option>
              <option>Gujarat</option>
              <option>Maharashtra</option>
              <option>Rajasthan</option>
              <option>Madhya Pradesh</option>
            </select>
          </div>
          <input type="text" placeholder="Enter your city" name="city" required />
        </div>
      </div>
      <button class="btn" onclick="window.location.href='W_select.php'" name="submit">Submit</button>

    </form>
  </section>

</body>

</html>