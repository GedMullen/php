<!DOCTYPE html>
<html>
<head>
  <!-- Use Bootstrap CSS framework -->
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
      <!-- Use HTML forms to submit what the user enters to the menu page -->
      <form class="form" action="menu.php" method="post">
        <label>Username</label><input type="text" name="user">
        <label>Password</label><input type="password" name="pass">
        <button class="btn btn-success">Submit</button>
      </form>
      <!-- Link to the register page -->
      <a href="register.php">Register an account</a>
    </div>
  </div>
</body>
</html>
