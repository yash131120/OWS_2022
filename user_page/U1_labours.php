<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dongle:wght@700&family=Nunito:wght@700&family=PT+Serif&family=Playfair+Display&family=Poltawski+Nowy:wght@600&family=Poppins:wght@400;500;600&display=swap">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/U1_labours.css?v=<?php echo time(); ?>">
</head>
<body>
    

<?php
 $server = 'localhost';
 $user = 'root';
 $pass = "";
 $db = "w_db";
 
 $conn = mysqli_connect($server,$user,$pass,$db);
 if (!$conn)
 {
     echo "Connection Unsuccessful"."<br>";
 }
 //echo "Connected with Server"."<br>";
 if ($conn)
 {
         $stmt3 = "SELECT * FROM `worker`";
         $result3 = mysqli_query($conn,$stmt3);
         if(mysqli_num_rows($result3)>0)
         {
            while($row = mysqli_fetch_array($result3)){
?>
<div class="card">
  <div class="content">
   
    <div class="description">
        
      <p class="title">
        <strong><i class="fas fa-user icon"></i><?php echo $row['name'];?></strong>
      </p>
      <p class="info">
        <strong><i class="fa-solid fa-mobile icon "></i><?php echo $row['number'];?></strong>
      </p>
      <p class="info">
        <strong><i class="fa-solid fa-location-dot icon "></i><?php echo $row['address'];?></strong>
      </p>
      <p class="price"><i class="fa-solid fa-city icon"></i>
        <?php echo $row['city'];?>
        <p class="price"><i class="fa-solid fa-globe icon"></i>
        <?php echo $row['state'];?>
            </p>
      </p>
    </div>
  </div>
</div>


<?php
    }
            
}
else
{
    echo "Table is Empty";
}
}
mysqli_close($conn);


?>
</body>
</html>