<?php
$con=mysqli_connect("localhost","root","","project(1)admin");
if(isset($_POST['submit']))
{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $d=$_POST['conpass'];
    
   
    $sql="insert into  adminlog(name,email,password,conpass) values('$n','$e','$p','$d')";
    mysqli_query($con,$sql);
    echo mysqli_error($con);
    header("Location: adminlogbld.php");
    exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>ADMIN LOGIN</title>
        <style>
        body{
            text-align:center;
        }
        </style>

    </head>
    
    <body style="background-color:LightGray">
    <h1> ADMIN LOGIN </h1>
    <form  method=  "post"action="<?php $_SERVER['PHP_SELF']?>">
    NAME <input type="name" name="name"  pattern="[a-AZ-z]"required ><br><br>
    EMAIL <input type="email" name="email" required><br><br>
    PASSWORD<input type="password" name="password"  required><br><br>
    CONFIRM PASSWORD<input type="password" name="password" required><br><br>
    <input type="submit"  name="submit" value="submit">





</form>
    
</body>
</html>
