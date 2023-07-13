<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


 <?php
//  include "property_page.php";
    $server = 'localhost';
    $user = 'root';
    $pass = "";
    $db = "w_db";
    
    $conn = mysqli_connect($server,$user,$pass,$db);
    if (!$conn)
    {
        echo "Connection Unsuccessful"."<br>";
    }
    echo "Connected with Server"."<br>";

    if ($conn)
    {
            $stmt3 = "SELECT * FROM `w_form`";
            $result3 = mysqli_query($conn,$stmt3);
            if(mysqli_num_rows($result3)>0)
            {
                
                while($row = mysqli_fetch_array($result3)){

                    // echo $row['username'];
                    echo $row['username']."</br>";
                    // echo $row['EMail'];

                
                    
              

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