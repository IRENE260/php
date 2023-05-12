<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","student");

if (isset($_GET['id']))
{
  $sqli="SELECT * from register where id='".$id."'";

  $u=mysqli_query($con,$sqli);
  $h=mysqli_fetch_array($u);
}
if(isset($_POST['Submit']))
{
    $n=$_POST['name'];
    $e=$_POST['email'];
    $p=$_POST['password'];
    $a=$_POST['age'];
    $d=$_POST['dateofbirth'];
    $c=$_POST['course'];
    $g=$_POST['gender'];
    $sql="insert into register task(name,age,dateofbirth,course,gender,email,password) values('$n','$a','$d','$c','$g','$e','$p')";
    mysqli_query($con,$sql);
    echo mysqli_error($con);
    header("Location: {$_SERVER['PHP_SELF']}");
    exit();
} ?>




<!DOCTYPE html>
<html>
<head>
<title>DETAILS</title>
</head>
<body style="background-color: aquamarine">
<h1>REGISTRATION FROM</h1>
    <form method="post"  action="<?php $_SERVER['PHP_SELF']?>">
    NAME<input type="text" id="name" name="name"  value=<?php echo $h['name'];?> pattern="[a-AZ-Z]" required><br><br>
    
    EMAIL<input type="email"  id="email" name="email" value=<?php echo $h['email'];?> required ><br><br>
    
    PASSWORD<input type ="password" id='password' name=password  value=<?php echo $h['password']; ?> required><br><br>
    
   AGE<input type='number' id='age' name='age' value=<?php echo $h['Age']; ?> required><br><br>
    
    D.O.B<input type="date" id= 'dateofbirth' value=<?php echo $h['DOB'];?> name="dateofbirth" ><br><br>
    GENDER<input type="radio" name="gender" value="male" <?php echo ($h['gender']=="male")?'checked':'';?>>
            MALE
            <input type="radio" name="gender" value="female" <?php echo ($h['gender']=="female")?'checked':'';?> >
            FEMALE<br>
    <br>
    COURSE<select name='Course' required>  
                <option value="" name ='Course'>Select a course</option>  
                <option value="BA" <?php echo ($h['Course']=="BA")?'selected':'';?>  name='Course'>BA</option>  
                <option value="MA" <?php echo ($h['Course']=="MA")?'selected':'';?> name='Course'>MA</option>  
                <option value="B.Tech" <?php echo ($h['Course']=="B.Tech")?'selected':'';?> name='Course'>B.Tech</option>  
                <option value="MSc" <?php echo ($h['Course']=="MSc")?'selected':'';?> name='Course'>MSc</option>  
                <option value="M.Tech" <?php echo ($h['Course']=="M.Tech")?'selected':'';?> name='Course'>M.Tech</option>  
                </select><br><br>
                <input type="submit" onclick=" fun()" name="submit" value="Submit"><br>
            </form>
    



</body>
<script>
function fun() {
    var name = document.getElementById("name").value;
    if(!name) {
        alert("Please enter a Name");
    } else {
        if(name.match("[A-Za-z]{3,38}")) {
            var email=document.getElementById("email").value;
            if(!email){
                alert("Please enter a Email");
            }
            else{
                var password=document.getElementById("password").value;
                if(!password){
                    alert("Please enter a Password");
                }
                else{
                    if(password.match(".{4,100}")){
                        var age = document.getElementById("age").value;
                        if(!age){
                            alert("Please enter a Age");
                        }else{
                            if(age.match("[0-9]") && age < 100){
                                console.log("Successful");
                                
                            }
                            
                            else{
                                alert("Please enter a valid Age");
                            }
                        }
                    }
                    else{
                        alert("Enter a valid Password");
                    }
                }
            }
        } else {
            alert("please enter a valid name");
        }
    }
}
</script>
</html>
<!--  -->
