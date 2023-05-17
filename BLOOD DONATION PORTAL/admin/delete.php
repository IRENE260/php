<?php
    $con=mysqli_connect("localhost","root","","student");
    if(isset($_GET['id']))
    {
        $id=$_GET["id"];
        mysqli_query($con,"DELETE FROM register WHERE id= $id");
        header ('location:trash.php');

    }
?>





