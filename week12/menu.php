<?php

  //The username and password are passed in via the HTML form
  //$_POST contains the array of request parameters
  $username = $_POST["user"];
  $password = $_POST["pass"];
  
  //Chaneg XXX to the correct number
  $con = mysqli_connect("104.154.228.65", "student", "", "yourdatabasename");

  if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_error();
  } else {
    echo "Invalid Login"; //If the user is not redirected

    //Get all the usernames
    $sql = "SELECT * FROM users WHERE name='$username'";
    $res = mysqli_query($con, $sql);
    $numrows = mysqli_num_rows($res);
    error_log($sql); 
    if ($numrows > 0) {
      while ($row = mysqli_fetch_array($res)) {
	//IF username is admin then redirect to the admin menu      
	if ($row["name"] == "admin") {
          header("Location: adminMenu.php");
	} else {
	  //otherwise redirect to the user menu
          header("Location: userMenu.php");
        }
      }
    }
  }
?>
