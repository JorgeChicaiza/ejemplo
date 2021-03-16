<!DOCTYPE html>
<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'base';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());

}

$result = mysqli_query($con,"SELECT * FROM ejemplos");

?>

<html>
<head>
	<title></title>
</head>
<body>
<?php foreach($result as $row){ ?>
<?php echo $row['nombre']; ?>
<?php echo $row['nivel']; ?>

	<?php }?>
</body>
</html>