<?php
if (isset($_POST['Continue'])) {
    session_start();
    if (!empty($_POST['contract'])) {
        $sports = $_POST['contract'];
        $alldata = implode(",", $sports);
        $_SESSION['contractor'] = $alldata;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contractors</title>

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
    <form action="W_form_Detail.php" method="POST">
        <section class="check1">
            <div class="tile">
                <input type="checkbox" name="contract[]" id="sport1" value="Labour Contractor">
                <label for="sport1">
                    <img src="img/w1.png" height="70px" width="70px">
                    <h6>Labour Contractor</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="contract[]" id="sport2" value="Contruction Contractor">
                <label for="sport2">
                    <img src="img/worker.png" height="70px" width="70px">
                    <center>
                        <h6>Contruction Contractor</h6>
                    </center>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="contract[]" id="sport3" value="Electrical Contractor">
                <label for="sport3">
                    <img src="img/images.jpeg" height="70px" width="70px">
                    <h6>Electrical Contractor</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="contract[]" id="sport4" value="Painting Contractor">
                <label for="sport4">
                    <img src="img/Painting_c.png" height="70px" width="70px">
                    <h6>Painting Contractor</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="contract[]" id="sport5" value="Plumbing Contractor">
                <label for="sport5">
                    <img src="img/Plumber_c.png" height="100px" width="100px">
                    <h6>Plumbing Contractor</h6>
                </label>
            </div>
            <div class="tile">
                <input type="checkbox" name="contract[]" id="sport6" value="Fabrication Contractor">
                <label for="sport6">
                    <img src="img/Fab_c.png" height="70px" width="70px">
                    <center>
                        <h6>Fabrication Contractor</h6>
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