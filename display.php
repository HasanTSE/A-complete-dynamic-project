<?php
include 'connect.php';
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
			
			<table class="table">
				<button class="btn btn-primary my-5"><a href="user.php" class="text-light">Registration Form</a>
				</button>
				
				<thead>
					<tr>
						<th scope="col">Sl no</th>
						<th scope="col">Name</th>
						<th scope="col">Email</th>
						<th scope="col">Mobile</th>
						<th scope="col">Destination</th>
						<th scope="col">Operations</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql="Select * from regis";
					$result=mysqli_query($con,$sql);
					if($result)
					{
						while($row=mysqli_fetch_assoc($result))
						{
							$id=$row['id'];
							$name=$row['name'];
							$email=$row['email'];
							$mobile=$row['mobile'];
							$destination=$row['destination'];
							echo ' <tr>
						<th scope="row">'.$id.'</th>
						<td>'.$name.'</td>
						<td>'.$email.'</td>
						<td>'.$mobile.'</td>
						<td>'.$destination.'</td>
						<td>
								<button class="btn btn-primary"><a href="update.php? updateid='.$id.'"class="text-light">Update</a></button>
								<button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'"class="text-light">Delete</a></button>
						</td>
						
					</tr>';
					
						}
					}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>