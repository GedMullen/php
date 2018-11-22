
<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<h2>Employees Hired in 1980s with a last name of Alpin</h2>

<table>
  <tr>
    <th>Firstname</th>
    <th>Surname</th>
    <th>Hire Date</th>
  </tr>
<?php
$surname="Alpin";

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

//Construct and SQL string
$sql = "SELECT first_name, last_name, hire_date 
		FROM employees
		WHERE gender='M' 
		AND hire_date LIKE '%198%'
		AND last_name = '$surname' 
		ORDER BY hire_date ASC
		LIMIT 10";

//Log the contents of the SQL to the web server log
error_log($sql);

//Run SQL on MySQL
$result = $conn->query ( $sql );

//if there are rows then..
if ($result->num_rows > 0) {

	// output data of each row
        while ($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td> " . $row["first_name"] . "</td>"; 
		echo "<td> " . $row["last_name"] . "</td>"; 
		echo "<td> " . $row["hire_date"] . "</td>"; 
		echo "</tr>";
        }
}
?>
</table>

</body>
</html>
