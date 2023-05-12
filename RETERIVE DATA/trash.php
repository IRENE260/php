<?php
    $con=mysqli_connect("localhost","root","","student");
    $sql="SELECT * FROM register";
    $result=mysqli_query($con,$sql);

?>
<html>
<head>


<style>
table,th,td{
    border-collapse:collapse;
    border :1px solid;
}
</style>
</head>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>age</th>
        <th>dateofbirth</th>
        <th>course</th>
        <th>gender</th>.
        <th>email</th>
        <th>password</th>
</tr>
<?php  
while ($file=mysqli_fetch_array($result))
{
    
    ?>
    <tr>
         <td><?php echo $file["id"];?></td>
         <td><?php echo $file["name"];?></td>
         <td><?php echo $file["Age"];?></td>
         <td><?php echo $file["DOB"];?></td>
         <td><?php echo $file["Course"];?></td>
         <td><?php echo $file["gender"];?></td>
         <td><?php echo $file["password"];?></td>
         <td><?php echo $file["email"];?></td>
         <td> <a href="edit.php?id=<?php echo $file["id"];?>">EDIT</a></td>
         <td><a href="delete.php?id=<?php echo $file['id'];?>">DELETE</a></td>
     </tr>  
     <?php  
}
?>
</table>

