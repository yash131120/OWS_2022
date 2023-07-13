<?php
$conn = mysqli_connect('localhost','root','','w_db');
session_start();
$mail = $_SESSION['identify'];
$result = mysqli_query($conn,"SELECT * FROM `worker` where email = '$mail' ");

?>

<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito:wght@700&family=PT+Serif&family=Playfair+Display&family=Poltawski+Nowy:wght@600&family=Poppins:wght@400;500;600&display=swap">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/W_profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/W_profile1.css?v=<?php echo time(); ?>">
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Admin Dashboard Panel</title>
</head>

<body>

    <!-- profile Index strats -->
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="img/logo.png" alt="">
            </div>

            <span class="logo_name">OWS</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="#profile">
                        <i class="uil uil-user"></i>
                        <span class="link-name">Profile</span>
                    </a>
                </li>
                <li><a href="#dahsboard">
                        <i class="uil uil-estate"></i>
                        <span class="link-name">Dahsboard</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-files-landscapes"></i>
                        <span class="link-name">Content</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-chart"></i>
                        <span class="link-name">Analytics</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-history"></i>
                        <span class="link-name">history</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-comments"></i>
                        <span class="link-name">Comment</span>
                    </a></li>
                <li><a href="#">
                        <i class="uil uil-share"></i>
                        <span class="link-name">Share</span>
                    </a></li>
            </ul>

            <ul class="logout-mode">
                <li><a href="#">
                        <i class="uil uil-signout"></i>
                        <span onclick="window.location.href='../user_page/logout.php'" class="link-name">Logout</span>
                    </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                        <span class="link-name">Dark Mode</span>
                    </a>

                    <div class="mode-toggle">
                        <span class="switch"></span>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- profile Index ends -->

    <!--contact section design start-->
    <section class="container">
    <form action="#" class="form">
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
            <div class="input-box">
                <i class="fas fa-user icon"></i>
                <label>Full Name</label>
                <input type="text" value="<?php  echo $row['name']?>" disabled>
            </div>

            <div class="input-box">
                <i class="fa-solid fa-envelope icon"></i>
                <label>Email Address</label>
                <input type="text" value="<?php echo $row['email']?>" disabled>
            </div>

            <div class="column">
                <div class="input-box">
                    <i class="fa-solid fa-mobile icon"></i>
                    <label>Phone Number</label>
                    <input type="text" value="<?php echo $row['number']?>" disabled/>
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-calendar-days icon"></i>
                    <label>Birth Date</label>
                    <input type="text" value="<?php echo $row['bdate']?>" disabled/>
                </div>
            </div>
            <div class="input-box">
                <i class="fa-solid fa-person-half-dress icon"></i>
                <label>Gender</label>
                <input type="text" value="<?php echo $row['gender'] ?>" disabled>

            </div>
            </div>
            <div class="input-box address">
                <i class="fa-solid fa-location-dot icon"></i>
                <label>Address</label>
                <input type="text" value="<?php echo $row['address']?>" disabled/>

                <div class="column">
                    <i class="fa-solid fa-globe icon"></i>
                        <label>state</label>
                        <div class="select-box">
                            <input class="select" type="text" value="<?php echo $row['state']?>" disabled/>
                            
                        </div>
                    <i class="fa-solid fa-city icon"></i>
                        <label>city</label>
                        <div class="select-box">
                            <input class="select" type="text" value="<?php echo $row['city']?>" disabled/>
                        </div>
                </div>
            </div>
            <?php
            $i++;
            }
            ?>
        </form>
    </section>
    <!--contact section design end-->

    <section class="dashboard" id="dahsboard">

        <!--worker section card start-->
        <div class="title">
            <i class="uil uil-tachometer-fast-alt"></i>
            <span class="text">work</span>
        </div>

        

        <section class="check1">
            <div class="tile">
                <label for="sport1">
                    <img src="img/w1.png" class="img" height="70px" width="70px">
                    <h6>Labours</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport2">
                    <img src="img/Farmer Worker.jpg" class="fas" height="80px" width="130px">
                    <h6>Farm Labours</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport3">
                    <img src="img/electrician (1).png" height="70px" width="70px">
                    <h6>Electrician</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport4">
                    <img src="img/painter (2).png" height="70px" width="70px">
                    <h6>Painter</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport5">
                    <img src="img/carpenter (1).png" height="70px" width="70px">
                    <h6>Carpenter</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport6">
                    <img src="img/plumber (1).png" height="70px" width="70px">
                    <h6>Plumber</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport7">
                    <img src="img/seatbelt.png" height="70px" width="70px">
                    <h6>Driver</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport8">
                    <img src="img/cameramen.jpg" height="70px" width="70px">
                    <h6>Cameramen</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport9">
                    <img src="img/mechanic.png" height="70px" width="70px">
                    <h6>Mechanic</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport10">
                    <img src="img/clener.jpg" height="80px" width="100px">
                    <h6>Cleaner</h6>
                </label>
            </div>
            <div class="tile">
                <label for="sport12">
                    <img src="img/technician.png" height="70px" width="70px">
                    <center>
                        <h6>Technicians & Repair Workers</h6>
                    </center>
                </label>
            </div>
            <div class="tile">
                <label for="sport13">
                    <img src="img/helpar.jpg" height="70px" width="70px">
                    <center>
                        <h6>Helpers & Domestic Workers</h6>
                    </center>
                </label>
            </div>
    </section>

        <!--worker section card end-->




        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <img src="img/p.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-thumbs-up"></i>
                        <span class="text">Total Likes</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-comments"></i>
                        <span class="text">Comments</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-share"></i>
                        <span class="text">Total Share</span>
                        <span class="number">10,120</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Prem Shahi</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/W_profile.js"></script>
</body>

</html>