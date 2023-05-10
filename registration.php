<link rel="stylesheet" href="./css/style.css">
<?php
$con=mysqli_connect("localhost","root","","student");
$today = new DateTime('now'); 
$today = $today->format('Y-m-d');
 if(isset($_POST["submit"]))
 //print_r("ok");die;
{
    $n=$_POST['name'];
    $v=$_POST['age'];
    $e=$_POST['dateofbirth'];
    $t=$_POST['gender'];
    $y=$_POST['Course'];
     $h=$_POST['email'];
     $r=$_POST['password'];
    $sql="insert into register(name, Age,DOB,email,password,gender,Course) values('$n','$v','$e','$h','$r'$t','$y')";
    mysqli_query($con,$sql);
    echo mysqli_error($con);    
}




?>
<!DOCTYPE html>
<html> 
    <head> 
        <title>DETAILS</title>
    </head>
    <body>
   
<html>
    <head>
        <title>REGIS FORM</title>
    </head>
    <body style="background-color: aquamarine;">
        <form method="POST" action ="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
             <h1>REGISTRATION FORM</h1>
            
             
            NAME<input type="text" name="name" pattern="[A-Za-z]{1,32}" required><br><br>
            
            
            
          D.O.B<input type="date" max="<?php echo $today; ?>" name="dateofbirth" pattern><br><br>
           
            AGE<input type="number"  maxlength =2 name="age" value="age" required><br><br>
           
            email<input type ="email" id=email name=email required><br><br>
            
            PASSWORD<input type ="password" id=pwd name=password><br><br>
            

            
            <label>Gender:</label>
            <input type="radio" name="gender" value="male" checked>
            MALE
            <input type="radio" name="gender" value="female" >
            FEMALE<br><br>
            <label>Course </label>   
                <select name='Course' required>  
                <option value="" name ='Course'>Select a course</option>  
                <option value="BA" name='Course'>BA</option>  
                <option value="MA" name='Course'>MA</option>  
                <option value="B.Tech" name='Course'>B.Tech</option>  
                <option value="MSc" name='Course'>MSc</option>  
                <option value="M.Tech" name='Course'>M.Tech</option>  
                </select><br><br>
            
            <input type="submit" name="submit" value="Submit"><br>




        </form>
             



    </body>
</html>


