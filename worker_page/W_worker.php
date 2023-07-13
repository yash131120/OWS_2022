<?php
$conn = mysqli_connect("localhost","root","","w_db");

if(isset($_POST['Continue']))
{
    session_start();
    $sports = $_POST['sports'];
    $alldata=implode(",",$sports);
    $_SESSION['worker'] = $alldata;   
    $insert = "INSERT INTO `worker_data`(`worker`) VALUES ('$alldata')"; 
    mysqli_query($conn,$insert);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workers</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito:wght@700&family=PT+Serif&family=Playfair+Display&family=Poltawski+Nowy:wght@600&family=Poppins:wght@400;500;600&display=swap">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/worker.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/btn.css?v=<?php echo time(); ?>">

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

    <!-- Worker checkbox creat -->
    <form action="W_contractors.php" method="POST">
    <section class="check1">
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport1" value="Labours">
                <label for="sport1">
                    <img src="img/w1.png" class="img" height="70px" width="70px">
                    <h6>Labours</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport2" value="Farm Labours">
                <label for="sport2">
                    <img src="img/Farmer Worker.jpg" class="fas" height="80px" width="130px">
                    <h6>Farm Labours</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport3" value="Electrician">
                <label for="sport3">
                    <img src="img/electrician (1).png" height="70px" width="70px">
                    <h6>Electrician</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport4" value="Painter">
                <label for="sport4">
                    <img src="img/painter (2).png" height="70px" width="70px">
                    <h6>Painter</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport5" value="Carpenter">
                <label for="sport5">
                    <img src="img/carpenter (1).png" height="70px" width="70px">
                    <h6>Carpenter</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport6" value="Plumber">
                <label for="sport6">
                    <img src="img/plumber (1).png" height="70px" width="70px">
                    <h6>Plumber</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport7" value="Driver">
                <label for="sport7">
                    <img src="img/seatbelt.png" height="70px" width="70px">
                    <h6>Driver</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport8" value="Cameramen">
                <label for="sport8">
                    <img src="img/cameramen.jpg" height="70px" width="70px">
                    <h6>Cameramen</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport9" value="Mechanic">
                <label for="sport9">
                    <img src="img/mechanic.png" height="70px" width="70px">
                    <h6>Mechanic</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport10" value="Cleaner">
                <label for="sport10">
                    <img src="img/clener.jpg" height="80px" width="100px">
                    <h6>Cleaner</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport12" value="Technicians & Repair Workers">
                <label for="sport12">
                    <img src="img/technician.png" height="70px" width="70px">
                    <center>
                        <h6>Technicians & Repair Workers</h6>
                    </center>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="sports[]" id="sport13" value="Helpers & Domestic Workers">
                <label for="sport13">
                    <img src="img/helpar.jpg" height="70px" width="70px">
                    <center>
                        <h6>Helpers & Domestic Workers</h6>
                    </center>
                </label>
            </div>
            <a href="W_profile.php" class="cssbuttons-io-button" name="Continue">Continue
            <!--<button class="cssbuttons-io-button" onclick="window.location.href='W_form_Detail.php'" name="Continue"> Continue-->
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path fill="currentColor" d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"></path>
                    </svg>
                </div>
            </a>
    </section>
    </form>
    <!-- Worker checkbox ends -->




</body>

</html>