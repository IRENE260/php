<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","project(1)admin");

if (isset($_GET['id']))
{
  $sqli="SELECT * from request where id='".$id."'";

  $u=mysqli_query($con,$sqli);
  $h=mysqli_fetch_array($u);
}
if(isset($_POST['verify']))
{
   
    $sql="update request set status ='Approved' where id='".$id."'";
    mysqli_query($con,$sql);
    echo mysqli_error($con);
    header("Location: verifyadminbld.php");
    exit();
} ?>




<!DOCTYPE html>
<html>
<head>
<title>DETAILS</title>
<style>
        body{
            text-align:center;
        }
    </style>
</head>
<body style="background-color: LightGray">
<h1>REQUEST FORM</h1>
    <form method="post"  action="<?php $_SERVER['PHP_SELF']?>">
    NAME<input type="text" id="name" name="name"  pattern="[a-AZ-Z]" value=<?php echo $h['name']; ?>required><br><br>
    
   BLOOD GROUP<input type="text"  id="text" name="bloodgroup" value=<?php echo $h['bloodgroup']; ?>  required ><br><br>
    
    UNITS<input type ="number" id='number' name="units"  value=<?php echo $h['units']; ?> required><br><br>
    
   HOSPITAL<input type='text' id='hospital' name='hospital' value=<?php echo $h['hospital']; ?> required><br><br>
    
    DATE<input type="date" id= 'date'  name="date" value=<?php echo $h['date']; ?> ><br><br>
    
                <input type="submit"  name="verify" value="verify"><br>
            </form>
    



