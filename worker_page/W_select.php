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
    <link rel="stylesheet" href="css/card1.css?v=<?php echo time(); ?>">

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


    <section class="check1">
        <a href="W_worker.php" class="cssbuttons-io-button" name="Continue">

            <div class="card">
                <img src="img/w1.png" height="70px" width="70px">
                <div class="textBox">
                    <p class="text head">Workers</p>
                </div>
            </div>

        </a>



        <a href="W_contractors.php" class="cssbuttons-io-button" name="Continue">
            <div class="card">
                <img src="img/w1.png" height="70px" width="70px">
                <div class="textBox">
                    <p class="text head">Contractors</p>
                </div>
            </div>
        </a>
    </section>

</body>

</html>