<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Update </title>
    <link rel="stylesheet" href="style2.css">
    
    </head>
<body class="upd">
    
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
    include('../navbar.php');
    
    ?>
   
    <?php
    
    include('header.php');
    include('../dbcon.php');
    $sid = $_GET['sid'];
    
    $qry ="SELECT * FROM `student` WHERE `id`='$sid'";
    
    $run = mysqli_query($con, $qry);
    
    $data = mysqli_fetch_assoc($run);

    ?>
       <h1 align ="center">Updation form Re-...</h1>
       
    <form action="updatedata.php" method="post" enctype="multipart/form-data">
        
        <table align="center">
            <tr>
                <td>Rollno</td>
                <td><input type="text" name="rolno" value=<?php echo $data['rollno'] ?> required></td>
            </tr>
            
             <tr>
                <td>Name</td>
                <td><input type="text" name="name" value=<?php echo $data['name'] ?> required></td>
            </tr>
            
             <tr>
                <td>City</td>
                <td><input type="text" name="city" value=<?php echo $data['city'] ?> required></td>
            </tr>
            
             <tr>
                <td>pcont</td>
                <td><input type="text" name="pcont" value=<?php echo $data['pcont'] ?> required></td>
                
            </tr>
            
             <tr>
                <td>Standard</td>
                <td><input type="number" name="std" value=<?php echo $data['standard'] ?> required></td>
            </tr>
            
             <tr>
                <td>image</td>
                <td><input type="file" name="simg" required></td>
            </tr>
            <tr>
                <input type="hidden" name="sid" value=<?php echo $data['id'] ?> >
            </tr>
            
            <tr><td colspan="2" align="center"><input type="submit" value="submit" name="submit"></td></tr>
            
        </table>
        
        
    </form>   
    <?php
    include('../footer.php');
    
    ?>    

</body>
</html>