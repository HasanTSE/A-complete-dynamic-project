<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$destination=$_POST['destination'];
$sql="insert into regis (name,email,mobile,destination) values('$name','$email','$mobile','$destination')";
$result=mysqli_query($con,$sql);
if($result){
//echo "Data inserted successfully";
header('location:display.php');
}else{
die(mysqli_error($con));
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>DIU Tourist Agency</title>

                         <!-- CSS link html start --> 
                         <link rel="stylesheet" href="css/font-awesome.min.css">    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="icon" href="favicon.ico" type="images/favicon.ico">
                         <!-- CSS link html end -->
</head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top"><!-- sticky-top -->

            <!-- //////// -->
        <div class="container">

            <a class="navbar-brand animate__animated animate__pulse animate__infinite" href="#"><img src="images/logo.png" alt="" height="65px" width="200px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item active">
        <a class="nav-link" href=" index.html #home">Home<span class="sr-only">(current)</span>
        </a>

      </li>
       
      <li class="nav-item"><a class="nav-link" href="index.html #beautiful">Beautiful Places</a></li>
      
       
      <li class="nav-item"><a class="nav-link" href="index.html #visit">Visit Bangladesh</a></li>

       
      <li class="nav-item"><a class="nav-link" href="user.php">Registration</a></li>
   
      <li class="nav-item"><a class="nav-link" href="display.php">Admin</a></li>



        

    </ul>
  </div>
</div>
</nav>
            
            <form method="post">
                
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Please enter your name" name="name" autocomplete="off">
                </div>
                
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Please enter your email" name="email" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label>Mobile No.</label>
                    <input type="text" class="form-control" placeholder="Please enter your mobile number" name="mobile" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label>Destination</label>
                    <input type="destination" class="form-control" placeholder="Please enter your destination" name="destination" autocomplete="off">
                </div>
                
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
        
        
    </body>
</html>