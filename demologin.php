<?php
session_start();

if(isset($_SESSION['uid'])){
    header('location:admin/admindash.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
	<style>
    body{background-color: antiquewhite;}
    p{
     font-size: 1.5em;color: brown;font-family: cursive;}

</style>

	<title>Warden Login</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

	<?php
    include('navbar.php');
    
    ?>
    
    
    
     <h1 align ="center">Warden Login</h1>
     <h1 align ="center">Warden Login</h1>
   <form action="demologin.php" method="post">
   <table class="tab" border="3" align="center" style="font-size:20px;" >
       <tr>
           <td>Username : </td>
           <td><input type="text" name="uname" placeholder="uname" required></td>
           
       </tr>
         <tr>
       <td>Password : </td>
           <td><input type="password" name="pass" placeholder="password" required></td>
       </tr>
       
       <tr>
           <td colspan="2" ><input type="submit" name="login" value="Login" class= "bt" align="center"></td>
       </tr>
       
   </table>
   </form>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<script>
	</script>
	
	

</body>

</html>

<?php

include('dbcon.php');

if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $password = $_POST['pass'];
    
    $qry = "SELECT * FROM `admin` WHERE `username` ='$username' AND `password` = '$password'";
    
    $run = mysqli_query($con,$qry);
    
    $row = mysqli_num_rows($run);
    
    if($row <1){
        
        ?>
        <script>alert('username or passwor not matched !!');
            window.open('demologin.php','_self');    
            </script>
        <?php
        
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        
//        echo "$id";
        
        
        
        $_SESSION['uid']= $id;
        header('location:admin/admindash.php');
    }
}

?>
