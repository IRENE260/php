<?php 
$con=mysqli_connect("localhost","root","","project(1)admin");
if(isset($_POST['submit']))

{
     $e=$_POST['email'];
     $p=$_POST['password'];
     $sql="select * from adminlog where email='$e' and password='$p'";
     $p=mysqli_query($con,$sql);
     $value=mysqli_fetch_array($p);
     if($p->num_rows==0)
    {
        
        echo( "Email not found");
    }
    else{

    header("Location: verifyadminbld.php");
    
    exit();
    }
} ?>


<!DOCTYPE html>
<html>
<head>
	<title>login</title>
    <body style="background-color:LightGray">
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



<body >

			 <form  method="post" action="<?php $_SERVER['PHP_SELF']?>"  > 
			
			
				EMAIL: <input type="email"  name="email" required></input><br><br>

				    Password: <input type="password" name="password" required></input><br><br>
				
					<input type="submit" value="Login" onclick="validate()" name='submit'>
					
					
				
		
	
</body>


</html>




