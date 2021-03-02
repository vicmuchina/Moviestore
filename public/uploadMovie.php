<!DOCTYPE html>
<html>
<head>
	<title>uploadMovie</title>
 <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
 <link rel="icon" href="favicon.ico" type="image/x-icon">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

 <link rel="stylesheet" type="text/css" href="../css/styles.css">
 <script src="https://kit.fontawesome.com/eb8d7cc040.js" crossorigin="anonymous"></script>

</head>
<body >
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

<div class="container-fluid">
     <a class="navbar-brand" href="#"><img class='logo'src="../images/movieshop.png"></a>

    <button class="navbar-toggler" type="button" data-toggle='collapse' data-target='#navbarcollapsible'>
      <span class='navbar-toggler-icon'>
      </span>
    </button>

  <div class="collapse navbar-collapse" id="navbarcollapsible">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class='nav-link' href="https://www.netflix.com/ke-en/">Home</a>
      </li>
        
      

    </ul>
  </div>
</div>
</nav>
<div class="container-fluid padding">
<div class="row padding">
<div class="alert alert-primary">
  <p><strong>Real & Reel!</strong>buy one get one free</p>
</div>
</div>
</div>
<div class="container-fluid padding">
<div class="row padding">
<div class="col-12">
<a href="../Slicebox/index.html"><button type="button" class="btn btn-primary btn-lg button1">Back to Homepage</button> 
</a>
</div>
</div>
</div>


<div class="container container-fluid">
   <form action="uploadMovie.php" method="post">
     <div class="row">
         <div class="col">
          <div class="form-group">
		    <label for="movie Name">Movie Name:</label><br>
            <input type="text" id="moviename" name="moviename" placeholder="Movie Name" name="moviename" size="60">
			</div>
         </div>
         <div class="col">
         	<div class="form-group">
            <label for="Leader Actor">Leader Actor:</label><br>
            <input type="text" id="Leader Actor" name="leaderactor" placeholder="Leader Actor" size="60">
          
            </div> 
         </div>

     </div>

<form>
</div>
<!-- end tag -->
<div class="container container-fluid">
   <form action="uploadMovie.php" method="post">
     <div class="row">
         <div class="col">
          <div class="form-group">
		      <label for="duration">Duration</label>
	<input list="duration" name="duration"  placeholder="Time in hours" class='form-control'>
               <datalist id="duration" >
                  <option value="1h">1h</option>
                  <option value="1h15">1h15</option>
                  <option value="1h30">1h30</option>
                  <option value="2h">2h</option>
                  <option value="2h30">2h30</option>
                  <option value="2h45">2h45</option>
                  <option value="3h">3h</option>
                   <option value="3h15">3h15</option>
               </datalist>
             
			</div>
         </div>
         <div class="col"> 
         	<div class="form-group">
         		  <label >Movie Poster</label>
                
            	<input type="file" class='form-control' id="files" name="file" multiple >
         	</div>
         	             
         </div>

     </div>

<form>
</div>
<!-- end tag -->

<div class="container container-fluid">
   <form>
     <div class="row">
         <div class="col">
          <div class="form-group">
		   <label for="rating">Rating:</label><br>
            <input type="text" id="moviename" name="rating" placeholder="PG" size="60">
          
			</div>
         </div>
         <div class="col">
            <label for="genre">Genre:</label><br>
            <input type="text" id="Leader Actor" name="genre" placeholder="eg;Action" size="60">
          
             
         </div>

     </div>

<form>
</div>
<!-- end tag -->

<div class="container container-fluid">
   <form>
     <div class="row">
         <div class="col">
          <div class="form-group">
		  <input type="submit" class="btn btn-info btn-block"  name="submit">
          
			</div>
         </div>
         <div class="col">
           <input type="reset" class="btn btn-danger btn-block">
             
         </div>

     </div>

<form>
</div>
<!-- end tag -->


<?php

//define variables as empty tags

$moviename= "";
$leaderactor= "";
$duration= "";
$rating= "";
$genre= "";
 
//isset
if (isset($_POST['submit'])){
#code
  $moviename=$_POST['moviename'];
  $leaderactor=$_POST['leaderactor'];
  $duration=$_POST['duration'];
  $rating=$_POST['rating'];
  $genre=$_POST['genre'];

$servername="localhost";
$username="root";
$password="";
$dbname="movieshop";

$conn=new mysqli($servername,$username,$password,$dbname);
// check connection
if($conn->connect_error){
  die("Connection failed: " . $conn->connect_error);
} else{
  echo "Connection successful<br>";
}

// // create a data base
// $sql='CREATE DATABASE school';
// // check if database has been created
// if ($conn->query($sql)===TRUE){
//   echo "database has been created";}
// else{echo "failed to create database" . $conn->error."<br>";}

// create two tables students and staff
$sql="CREATE TABLE movies_uploaded(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
moviename VARCHAR(30) NOT NULL,
leader_actor VARCHAR(30) NOT NULL,
duration VARCHAR(50),
rating VARCHAR(50),
genre VARCHAR(50) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if($conn->query($sql)===TRUE){

  echo "movies_uploaded table created<br>";
}
else{echo "movies_uploaded not created".$conn->error."<br>";
}
$sql = "INSERT INTO movies_uploaded ( moviename, leader_actor, duration, rating, genre)
VALUES ('$moviename', '$leaderactor', '$duration','$rating','$genre')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


echo"<div class='container container-fluid m '>
       <div class='row'>
          <div class='col'>
             <h3>moviename:$moviename</h3>
          </div>

          <div class='col'>
              <h3>Leader Actor:$leaderactor</h3>
           </div>
       </div>



      </div>

      <div class='container container-fluid'>
       <div class='row'>
          <div class='col'>
             <h3>duration:$duration</h3>
          </div>

          <div class='col'>
              <h3>rating:$rating</h3>
           </div>
       </div>



      </div>

      
      <div class='container container-fluid'>
       <div class='row'>
          <div class='col'>
             <h3>genre:$genre</h3>
          </div>

      </div>"



      ;

}



?>




</div>

<div class="container-fluid padding">
<div class="row text-center padding ">
  <div class="col-12">
    <h2>Connect</h2>
    <hr>
  </div> 
  <div class="col-12 social padding">
    <a href="https://www.facebook.com/SparksUnlimitedMovies/"><i class="fab fa-facebook "></i></a>
    <a href="https://www.instagram.com/moviesshop/?hl=en"><i class="fab fa-instagram "></i></a>
    <a href="https://twitter.com/officialfye?lang=en"><i class="fab fa-twitter "></i></a>
    <a href="https://www.youtube.com/results?search_query=netflix+movies+2020"><i class="fab fa-youtube"></i></a>
  </div>
</div>
</div>

<footer>
  <div class="container-fluid padding">.
  <div class="row text-center">
    <div class="col-md-6">
    <img src="../images/movieshop.png">
    <hr class="light">
    <p>+254797389366</p>
    <p>email@vicmuchina1234@gmail.com</p>
    <p>0100 street name</p>
    <p>0000,city state</p>
  </div>
  
  <div class="col-md-6">
    <hr class="light">
    <h3>Offices</h3>
    <hr class="light">
    <p>Kipro center 3rd floor</p>
     <p>Yaya center 1st floor</p>
      <p>Garden City Mall 2nd floor</p>
       <p>Two Rivers 2nd floor</p>
  </div>

  </div>

</footer>



</body>
</html>