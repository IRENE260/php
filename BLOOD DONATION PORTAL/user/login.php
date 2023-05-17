<?php 
$con=mysqli_connect("localhost","root","","project(1)admin");
if(isset($_POST['submit']))
{
    $r=$_POST['email'];
	$e=$_POST['password'];
	$sql="select * from admin where email='$r' and password='$e'";
	$w=mysqli_query($con,$sql);
     $value=mysqli_fetch_array($w);
     if($w->num_rows==0)
    {
        
        echo( "Email not found");
    }
    else{
		header("Location: profileuserbld.php?id=".$value['id']);
    exit();

    
   
    }
    
} ?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<body style ="background-color:burlywood">
	<h2>LOGIN</h2>
		
	</body>
	<script>
    function validate()
    {
    var username = document.login.email.value;
    var password = document.login.password.value;
 
    if (email==null || email=="")
    {
      alert("Email can't be blank");
      return false;
    }
    else if (password==null || password=="")
    {
      alert("password can't be blank");
      return false;
    }
    }
</script>
<style>
        body{
            text-align:center;
        }
    </style>
</head>

<body>
<div>
			<form  method="post" action="<?php $_SERVER['PHP_SELF']?>"  >
			
			
				EMAIL: <input type="email"  name="email" required></input><br><br>

				    PASSWORD: <input type="password" name="password" required></input><br><br>
				
					<input type="submit" value="Login" onclick="validate()" name='submit'>
					<!-- <input type="reset" /> -->
					
				
		
	</div>
</body>


</html>
