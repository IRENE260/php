<?php
$con=mysqli_connect("localhost","root","","student");
$today=new DateTime('now');
$today=$today->format('Y-m-d');
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
    NAME<input type="text" id="name" name="name" pattern="[a-AZ-Z]" required><br><br>
    
    EMAIL<input type="email"  id="email" name="email" required ><br><br>
    
    PASSWORD<input type ="password" id='password' name=password required><br><br>
    
   AGE<input type='number' id='age' name='age' required><br><br>
    
    D.O.B<input type="date" max="<?php echo $today; ?>" id= 'dateofbirth' name="dateofbirth" pattern><br><br>
    GENDER<input type="radio" name="gender" value="male" checked>
            MALE
            <input type="radio" name="gender" value="female" >
            FEMALE<br>
    <br>
    COURSE<select name='Course' required>  
                <option value="" name ='Course'>Select a course</option>  
                <option value="BA" name='Course'>BA</option>  
                <option value="MA" name='Course'>MA</option>  
                <option value="B.Tech" name='Course'>B.Tech</option>  
                <option value="MSc" name='Course'>MSc</option>  
                <option value="M.Tech" name='Course'>M.Tech</option>  
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
