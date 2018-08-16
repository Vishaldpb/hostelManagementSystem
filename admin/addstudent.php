<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Add Student Details</title>
</head>
<body>
   
   <?php

session_start();

        if(isset($_SESSION['uid']))
        {
            
        echo "";
            
            }

        else{
            
       header('location:../login.php');
            
            }
?>
   
   <?php
    include('header.php');
    ?>
    
    
    
    <form action="addstudent.php" method="post" enctype="multipart/form-data">
        
        <table align="center">
            <tr>
                <td>Rollno</td>
                <td><input type="text" name="rolno" required></td>
            </tr>
            
             <tr>
                <td>Name</td>
                <td><input type="text" name="name" required></td>
            </tr>
            
             <tr>
                <td>City</td>
                <td><input type="text" name="city" required></td>
            </tr>
            
             <tr>
                <td>Parents contact No</td>
                <td><input type="text" name="pcont" required></td>
                
            </tr>
            
             <tr>
                <td>Standard</td>
                <td><input type="number" name="std" required></td>
            </tr>
            
             <tr>
                <td>image</td>
                <td><input type="file" name="simg" required></td>
            </tr>
            
            <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
            
        </table>
        
        
    </form>
<!--
   <?php
    include('../footer.php');
    
    ?>
-->
      
</body>
</html>


<?php

if(isset($_POST['submit'])){
    
    include('../dbcon.php');
    
    $rolno = $_POST['rolno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcont = $_POST['pcont'];
    $std = $_POST['std'];
    $imagename = $_FILES['simg']['name'];   //for storing name 
    $tempimgname = $_FILES['simg']['tmp_name'];   //for storing temporary name 
    
    move_uploaded_file($tempimgname,"../dataimg/$imagename");
    
    $qry ="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `pcont`, `standard` ,`image`) VALUES (NULL,'$rolno','$name','$city','$pcont','$std','$imagename')";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true){
        ?>
        
        <script>alert("data added successfully");</script>
        <?php
        
    }
        
}

?>