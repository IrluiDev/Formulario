<?php
$user = "example_user";
$password = "password";
$database = "prueba";
$table = "ejemplo";

try {
	$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
	echo "<h2>TODO</h2><ol>";
	foreach($db->query("SELECT contenido from $table") as $row) {
		echo "<li>" . $row['contenido'] . "</li>";
	  }
  echo "</ol>";
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
