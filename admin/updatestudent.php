<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
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
    
    include('header.php');
    
    ?>
     
    
    <h2 align="center">Update Student Profile</h2>
    
    <form action="updatestudent.php" method="post" >
        
        <table align="center">
            <tr >
                <td> Standard : <input type="number" name="standard"></td>
                <td> Name : <input type="text" name="name"></td><br>
                <td><input type="submit" name="submit" value="Search"></td>
                
            </tr>
            
        </table>
        
    </form>
    
   
</body>
</html>

<table border="2" align="center" style="width:80%; margin-top=40px;">
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>Edit</th>
    </tr>
    


<?php

if(isset($_POST['submit'])){
    include('../dbcon.php');
    
    $name = $_POST['name'];
    $standard = $_POST['standard'];
    
    $qry = "SELECT * FROM `student` WHERE `standard` ='$standard' AND `name` LIKE '%$name%'";
    $run = mysqli_query($con, $qry);
    
    if(mysqli_num_rows($run)<1){
        ?>
        <script>alert("Match not found !!")</script>
        
        <?php
        
    }else{
        $a =1;
        while($data=mysqli_fetch_assoc($run)){
            ?>
           
            <tr>
                    <td><?php echo "$a";  $a++;?></td>
                    
                    <td><img src="../dataimg/<?php echo $data['image'] ?>" style="max-width:100px;" alt=""></td>
                    <td><?php echo $data['name'] ?></td>
                    <td><?php echo $data['rollno'] ?></td>
                    <td><a href="updateform.php?sid=<?php echo $data['id']; ?>">Edit</a></td>
                    
            </tr>
            
            
    
            <?php
                
        }
        
    }
    
}


?>
</table>


 <footer class="page-footer font-small unique-color-dark pt-0 " style=" 
   margin-top:10px;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #c0c6c5;
    color: white;
    text-align: center;">

    <div style="background-color:#3A5796; position: fixed;">
        
           
            <!--Grid row-->
            <div class="row py-4 huh d-flex align-items-right">

                <!--Grid column-->
                
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-12">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-lg-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-lg-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-lg-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-lg-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4 "></i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    

    <!--Footer Links-->
    <div class=" mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                <h3 class="text-uppercase font-weight-bold">
                    <strong >ABC Hostel Management</strong>
                
                </h3>
<!--                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">-->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id cupiditate perspiciatis impedit nostrum perferendis atque eligendi repellendus aut ipsam corporis architecto asperiores deserunt excepturi sit laborum illo nobis explicabo  nostrum obcaecati aut sed earum quibusdam nemo quasi perspiciatis dolorum. Itaque perferendis dolor omnis architecto accusantium, voluptas nisi officia.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <h4 class="text-uppercase font-weight-bold">
                    <strong>Facilities</strong>
                </h4>
                
<!--                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">-->
                <p>
                    <a href="#!">Transport</a>
                </p>
                <p>
                    <a href="#!">Accomodation</a>
                </p>
                <p>
                    <a href="#!">Hangout Timings/a>
                </p>
                <p>
                    <a href="#!">Food Courts</a>
                </p>
            </div>
            <!--/.Second column-->

            <!--Third column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h4 class="text-uppercase font-weight-bold">
                    <strong class="fa fa-phone mr-3"> Helplines</strong>
                </h4>
<!--                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">-->
                <p>
                    <a href="#!">Police : <a href="#">100</a></a>
                </p>
                <p>
                    <a href="#!">Fire Brigade : <a href="#">101</a></a>
                </p>
                <p>
                    <a href="#!">Ambulance : <a href="#">102</a></a>
                </p>
                
                <p>
                     <a href="#!" >Womens helpline: <a href="#" > 181</a></a>
                </p>
            </div>
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3">
                <h3 class="text-uppercase font-weight-bold">
                    <strong>Contact Us</strong>
                </h3>
<!--                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">-->
                <p>
                    <i class="fa fa-home mr-3"></i> Pink Lane California</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> info@abchostels.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/">
            <strong> bhardwajdemo.com</strong>
        </a>
    </div>
    <!--/.Copyright -->

</footer>