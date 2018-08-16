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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin DashBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    body{background-color: antiquewhite;}
    p{
     font-size: 1.5em;color: brown;font-family: cursive;}

</style>
<body>
   
   
    
    <h1  align ="center">Admin Dashboard</h1>
     <h2><a href="../logout.php" style="float : right ; color : blue;">Logout</a></h2>
      <div class="dashboard" >
    <table  border="6" align="center"  style = " width : 30%; font-size: 25px; margin-top:80px; ">
      
            <tr>
            <td><a href="addstudent.php">Add Student</a></td>
        </tr>
        <tr>
            <td><a href="deletestudent.php">Delete Student</a></td>
        </tr>
        <tr>
            <td><a href="updatestudent.php">Update Student</a></td>
        </tr>
        
       
    </table>
     </div>
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
<!--
    <?php
    include('../footer.php');
    
    ?>
-->
    
</body>
</html>


