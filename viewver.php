<?php

include('connect.php');
$query="select * from student";
$show=mysqli_query($connect,$_query);
while($showdata=  mysqli_fetch_assoc($show)){

    echo $showData['id']." ".$showData['name']." ".$showData['email']." ".$showData['age']."<br>";
}



?>