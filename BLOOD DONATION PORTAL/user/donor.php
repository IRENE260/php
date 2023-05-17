<?php

$con=mysqli_connect("localhost","root","","project(1)admin");


if(isset($_POST['submit']))
{
    $n=$_POST['name'];
    $e=$_POST['phonenumber'];
    $p=$_POST['bloodgroup'];
    $a=$_POST['age'];
    $d=$_POST['gender'];
    
    $sql="insert into donor (name,phonenumber,bloodgroup,age,gender) values('$n','$e','$p','$a','$d' )";
    mysqli_query($con,$sql);
    echo mysqli_error($con);
    header("Location: profileuserbld.php");
    exit();
} ?>





<!DOCTYPE html>
<html>
<head>
<title>donor</title>
<style>
    body
    {
        text-align:center;
    }
</style>
</head>
<body style="background-color: burlywood">
<h1> DONOR REGISTRATION FROM</h1>
    <form method="post"  action="<?php $_SERVER['PHP_SELF']?>">
    NAME<input type="text" id="name" name="name"   pattern="[a-AZ-Z]" required><br><br>
    
    PHONENUMBER<input type="number"  id="phonenumber" name="phonenumber" v required ><br><br>
    
   
    
   AGE<input type='number' id='age' name='age'  required><br><br>
    
    
    GENDER<input type="radio" name="gender" value="male" >
            MALE
            <input type="radio" name="gender" value="female" >
            FEMALE<br>
    <br>
    BLOOD GROUP<select name='bloodgroup' required>  
                <option value="" name ='bloodgroup'>Select a blood group</option>  
                <option value="A+"   name='bloodgroup'>A</option>  
                <option value="B+"  name='bloodgroup'>B+</option>  
                <option value="O+" name='bloodgroup'>O+</option>  
                <option value="AB+" name='bloodgroup'>AB+</option>  
                <option value="A-" name='bloodgroup'>A-</option>  
                <option value="B--" name='bloodgroup'>A-</option>  
                <option value="O-" name='bloodgroup'>O-</option>  
                </select><br><br>
                <input type="submit"  name="submit" value="Submit"><br>
            </form>
    



</body>
</html>
