<?php

include('../dbcon.php');
    
    $rolno = $_POST['rolno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcont = $_POST['pcont'];
    $std = $_POST['std'];
    $id =$_POST['sid'];
    $imagename = $_FILES['simg']['name'];   //for storing name 
    $tempimgname = $_FILES['simg']['tmp_name'];   //for storing temporary name 
    
    move_uploaded_file($tempimgname,"../dataimg/$imagename");
    
    $qry ="UPDATE `student` SET `rollno`='$rolno',`name`='$name',`city`='$city',`pcont`='$pcont',`standard`='$std',`image`='$imagename' WHERE `id`='$id'";
    
    $run = mysqli_query($con, $qry);
    
    if($run==true){
        ?>
        
        
        <script>alert("data added successfully");
               
            window.open('updateform.php?sid=<?php echo $id  ?>' , '_self');
           
</script>
        
        
        <?php
        
    }
        


?>