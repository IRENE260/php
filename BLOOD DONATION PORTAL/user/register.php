<?php
$con=mysqli_connect("localhost","root","","project(1)admin");
if(isset($_POST['submit']))

{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $d=$_POST['gender'];
    // $filename = $_FILES["upload"]["name"];
    // $tempname = $_FILES["upload"]["tmp_name"];
    // $folder = "./image/" . $filename;
    $target_dir="image/";
    $target_file=$target_dir.basename($_FILES["upload"]["name"]); 
    move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file);
    $h=$_POST['phonenumber'];
    $g=$_POST['password'];
    $b=$_POST['conpass'];

    $sql="insert into admin (name,email,gender,password,conpass,filename) values('$n','$e','$d','$g','$b','$target_file')";
    mysqli_query($con,$sql);
    echo mysqli_error($con);
    move_uploaded_file($tempname, $folder);
    header('Location:loginbld.php');
}
?>
<DOCTYPE html>
<html>
    <head>
    <title>register</title>
    
    <style>
        body{
            text-align:center;
        }
    </style>

    </head>
    <body style="background-color:burlywood">
    
        <h1>REGISTRATION FORM</h1>
        <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>">

        NAME    <input type="text"  name='name' required><br><br>

        EMAIL     <input type="email"   name='email' required><br><br>
       PHONE NUMBER    <input type="number"  name='phonenumber'  required><br><br> 
       GENDER     <input type="radio" name="gender"  value="male">
            MALE
            <input type="radio" name="gender" value="female"  >
            FEMALE<br><br>
            
                PASSWORD    <input type="password"  name='password' required><br><br>
                CONFIRM PASSWORD    <input type="password"  name='conpass' required><br><br>
                SELECT IMAGE TO UPLOAD  <input type="file" name="upload" ><br><br>

                <input type="submit"  name="submit" value="submit"><br><br>
            </form>

                </select><br><br>
        </form>
    </body>
    

</html>

