<?php
$surname="Bamford";

$servername = "104.154.228.66";
$username = "student";
$password = "";
$dbname = "employees";

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT DISTINCT last_name, first_name
                FROM employees
                WHERE last_name='$surname'
                LIMIT 10";
$result = $conn->query ( $sql );
echo "<table border='1' cellpadding='2' cellspacing='2'";
echo "<tr><td>Firstname</td><td>Surname</td></tr>";
if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
                echo "<tr><td> " . $row["first_name"] . "</td><td> " . $row["last_name"] . "</td></tr>";
        }
}
?>
