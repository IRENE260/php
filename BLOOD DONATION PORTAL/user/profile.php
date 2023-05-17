<?php
$con=mysqli_connect("localhost","root","","project(1)admin");

// $value;

if(isset($_GET['id']))
{
    $Id=$_GET['id'];
    $sql="select * from request where id='".$Id."'";
    $result1=mysqli_query($con,$sql);
    $sql1="select * from admin where id='".$Id."'";
    $result=mysqli_query($con,$sql1);
    $value=mysqli_fetch_assoc($result);
}
if(isset($_POST['request']))
{
    header("location: reqbld.php");
    exit();
}   
if(isset($_POST['donor'])) 
{
    header("location: donorbld.php?id=".$value['id']);
    exit();
}
 if(isset ($_POST['check']))
 {
     header("location: checkbld.php?id=".$value['id']);
     exit();
 }
    
?>
<!DOCTYPE html>

<head>
<style>
        body{
            text-align:center;
        }
    </style>

<body style="background-color: burlywood">
  <br>
  <h2>HELLO </h2>
  <img height="250px" width="250px" src="<?php echo $value['filename']; ?>" >
         <form method="post" action="<?php $_SERVER['PHP_SELF']?>" >

        <button class="nav"  name="request" value="request"> REQUEST FOR BLOOD</button><br><br>
        <button class="nav"  name="donor" value="donor"> BE A DONOR</button><br><br>
        <button class="nav"  name="check" value="check">CHECK STATUS FOR BLOOD YOU REQUESTED</button> <br><br>
       
            
                

                
</html>
