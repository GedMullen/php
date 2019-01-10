<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <title>Starting PHP</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <h1>Forms</h1>
    </div>
    <div class="row">
      <form class="form" action="menu.php" method="post">
        <label>Username</label><input type="text" name="user">
        <label>Password</label><input type="password" name="pass">
        <button class="btn btn-success">Submit</button>
      </form>
      <a href="create.php">Register an account</a>
      <?php
		if($_GET["invalid"] == "true"){
         echo "<label>Invalid Login</label>";
		}
      ?>
    </div>
  </div>
</body>
</html>
