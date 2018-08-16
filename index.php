<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

	<title>Homepage</title>

	<!--  -->

	<style>

	</style>

</head>

<body>

    <?php
    include('navbar.php');
    
    ?>

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    
    <div class="item active">
     <img src="images/hostel1.jpg" alt="">
      <div class="carousel-caption">
        <h1>Welcome to ABC Hostels Service</h1>
      </div>
    </div>
    
    <div class="item">
      <img src="images/hostel2.jpg" alt="">
      
      <div class="carousel-caption">
        
      </div>
    </div>
    
    <div class="item">
     <img src="images/hostel5.jpg" alt="">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
     <div class="item">
     <img src="images/hostel6.jpg" alt="">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    
    
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
     <h2 align="center"><i>Search Your Ward</i> </h2>
  
  <h3 align="right"><a href="demologin.php" >Admin Login</a></h3>
  
  <form action="index.php" method="post">
  <table class="tab" border ="3" align="center" style="width : 40%;"  >
     
      <tr>
         <th colspan="2" align="center" >Student Information</th>
      </tr>
      <tr>
        <td>Standard   : </td>
         <td><input type="number" name="standard"></td>
      </tr>
      
    <tr>
        <td>enter Rollno   : </td>
        <td><input type="text" name="rollno"></td>
    </tr>
     
     <tr >
         <td colspan="2" align="center"><input type="submit" value="show Info" name="submit" ></td>
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

if(isset($_POST['submit'])){

    include('dbcon.php');
    
     $rollno  = $_POST['rollno'];
    $standard = $_POST['standard'];
    
    $qry = "SELECT * FROM `student` WHERE `standard` ='$standard' AND `rollno` = '$rollno'";
    $run = mysqli_query($con, $qry);
    
    
    if(mysqli_num_rows($run)<1){

        
         ?>
        <script> alert("Match not found !!"); </script>
        
        
        <?php
        
       
        
    }else{
        
         $data = mysqli_fetch_assoc($run);
        ?>
          
          <table border = "2" width ="60%" align="center" style="margin-top: 30px;">
              
              <tr>
                  <th colspan="3"> Student details </th>
              </tr>
              <tr>
                  <td rowspan="5"><img src="dataimg/<?php echo $data['image'];  ?> " style="max-width : 230px; max-height : 200px;" ></td>
                      
                         <th>Roll no</th>
                         <td><?php echo $data['rollno'];  ?></td>
                </tr> 
                         
                <tr>
                
                         <th>Name</th>
                         <td><?php echo $data['name'];  ?></td>
                </tr>     
                         
                 <tr>
                
                         <th>City</th>
                         <td><?php echo $data['city'];  ?></td>
                </tr>     
                         
                           
                 <tr>
                
                         <th>Standard</th>
                         <td><?php echo $data['standard'];  ?></td>
                </tr>       
                          
                          
                          
                 <tr>
                
                         <th>Parents contact Number</th>
                         <td><?php echo $data['pcont'];  ?></td>
                </tr>     
                          
                          
                      
                  
              
              
          </table>
          
          
          <?php
           
       
    }
    
    
    
}

?>


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
 
