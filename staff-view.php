<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "ddwa_assignment1";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
  else{ //continued within body tag
  
?>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4></h4>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Home</a></li>
        <li><a href="#section2">Friends</a></li>
        <li><a href="#section3">Family</a></li>
        <li><a href="login.php">LogOut</a></li>
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>Staff</small></h4>
	  <hr>
	  <!--Show student number-->
      <h2><?php 
        $sql = "SELECT staff_id "; //Remember spacing! If not SQL string will be stuck tog.
        $sql .= "FROM staff "; //Reading from "Mutant" table
        $sql .= "ORDER BY staff_id;"; //Alphabetical order
        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
        // output data of each row
        
        while($row = mysqli_fetch_assoc($result)) {
            echo $row["staff_id"]."<br/>";
        }
    } 	else {
        echo "No results!";
    }

        
	?></h2>
	<hr>
      <h5>
	  <?php 
        $sql = "SELECT name, contact_no, office_location, date_joined, no_of_hours "; //Remember spacing! If not SQL string will be stuck tog.
        $sql .= "FROM staff "; //Reading from "student" table
        $sql .= "ORDER BY name;"; //Alphabetical order
        $result = $connection->query($sql);
        
        if ($result->num_rows > 0) {
        // output data of each row
        //printing student details
        while($row = mysqli_fetch_assoc($result)) {
			echo "<h5><b>Name:</b></h5>". $row["name"] ."<br/>";
			echo "<h5><b>Contact Number:</b></h5>". $row["contact_no"] ."<br/>";
			echo "<h5><b>Year Enrolled:</b></h5>" . $row["office_location"]."<br/>";
      echo "<h5><b>Date :</b></h5>" . $row["date_joined"]."<br/>";
      echo "<h5><b>Number Of Hours Logged:</b></h5>" . $row["no_of_hours"]."<br/>";

        }
    } 	else {
        echo "No results!";
    }
  }

        
	?> 
	  </h5>
	  <hr>
	  <h5>
 
	  </h5>


</body>
</html>
