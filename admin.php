<?php

include ('connect.php');

if (isset($_POST['Submit'])){

    $name=$_POST['name'];
    $email=$_POST['emil'];
    $pasword=$_POST['pasword'];

    $query="insert into student(name,email.pasword) value('$name','$email','$pasword')";
    $insert=mysqli_query($connect,$query),
    if($insert){

        echo"<script>
        alert (Database is Connected!!)
        window.location.href='index.php';
        </script>";

    }

    else{
        echo"<script>
        alert('Database is Not Connected!')       
        </script>"
    }












}



?>
