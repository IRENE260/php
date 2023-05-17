<?php
$con=mysqli_connect("localhost","root","","project(1)admin");
$today=new DateTime('now');
$today=$today->format('Y-m-d');
if(isset($_POST['submit']))
{
    $n=$_POST['name'];
    $e=$_POST['bloodgroup'];
    $p=$_POST['units'];
    $a=$_POST['hospital'];
    $d=$_POST['date'];
    $sql="insert into request (name,bloodgroup,units,hospital,date) values('$n','$e','$p','$a','$d')";
    mysqli_query($con,$sql);
    echo mysqli_error($con);
    header("Location:bldhome.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head >
    <style>
        body{
            text-align:center;
        }
    </style>
        <title>requestblood</title>
    </head>

    <body style="background-color:burlywood" >
    <h2 >REQUEST FORM </h2>
    <form  method="post" action="<?php $_SERVER['PHP_SELF']?>" ><br><br>
    NAME <input type="text" name="name" required pattern ="[a-AZ-z]"><br><br>
   
    HOSPITAL <input type="text" name="hospital" pattern ="[a-AZ-z]" required><br><br>
    BLOOD GROUP   <select name='bloodgroup' required>  
                <option value="" name ='Course'>Select a blood group</option>  
                <option value="A+"   name='bloodgroup'>A</option>  
                <option value="B+"  name='bloodgroup'>B+</option>  
                <option value="O+" name='bloodgroup'>O+</option>  
                <option value="AB+" name='bloodgroup'>AB+</option>  
                <option value="A-" name='bloodgroup'>A-</option>  
                <option value="B--" name='bloodgroup'>A-</option>  
                <option value="O-" name='bloodgroup'>O-</option>  
                </select><br><br>
    DATE <input type="date" name="date" required><br><br>
    <input type="submit" value="submit" name="submit"><br>

</form>
        
    </body>
</html>
