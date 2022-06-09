<?php
     $conn = mysqli_connect("localhost","root","root","shop");

     if($conn == false){
        die("Беда с подключением к базе" . mysqli_connect_error());
     }

    $user_email = $_POST['email'];
    $user_comment = $_POST['comment'];
    $user_wish1 = $_POST['check_1'];
    $user_wish2 = $_POST['check_2'];
    $user_wish3 = $_POST['check_3'];
    $user_who = $_POST['radio_b'];

     $sql = "INSERT INTO `form` VALUES (DEFAULT, '$user_email','$user_comment','$user_wish1','$user_wish2','$user_wish3','$user_who')";

     if(mysqli_query($conn, $sql)){
          echo "Good";
     } else{
          echo "Bad";
     }

    mysqli_close($conn);
?>



