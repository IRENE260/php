<?php
$con=mysqli_connect("localhost","root","","student");
if(isset($_POST['submit']))
{
    $e=$_POST['email'];
    $p=$_POST['password'];
    $sql="select id from register where email='$e' and password='$p'";
    $r=mysqli_query($con,$sql);
    if($r->num_rows==0)
    {
        echo "Email not found";
    }
    else {
        echo " $e found";
    }
    echo mysqli_error($con);

} 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h4>Login</h4><br><br>
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
            Email:<input type="email" name="email"><br><br>
            Password:<input type="password" name="password"><br>
            <input type="submit" name="submit">
        </form>
    </body>
</html>
