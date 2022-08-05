<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file

$mysqli = include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
	$edad = mysqli_real_escape_string($mysqli, $_POST['edad']);
	$ciudad = mysqli_real_escape_string($mysqli, $_POST['ciudad']);
	$fruta_favorita = mysqli_real_escape_string($mysqli, $_POST['fruta_favorita']);
	$verdura_favorita = mysqli_real_escape_string($mysqli, $_POST['verdura_favorita']);
	$n_personas_viven = mysqli_real_escape_string($mysqli, $_POST['n_personas_viven']);
		
	// checking empty fields
	if(empty($nombre) || empty($apellido) || empty($edad) || empty($ciudad) || empty($fruta_favorita) || empty($verdura_favorita) || empty($n_personas_viven)) {
		
		echo "paso el if";
		if(empty($nombre)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($apellido)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($edad)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($ciudad)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($fruta_favorita)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($verdura_favorita)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($n_personas_viven)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		// if all the fields are filled (not empty) 

		$sql = "INSERT INTO users (nombre, apellido, edad, ciudad, fruta_favorita, verdura_favorita, n_personas_viven) VALUES ('$nombre', '$apellido', '$edad', '$ciudad', '$fruta_favorita', '$verdura_favorita', '$n_personas_viven')";
		echo ($sql);

		if ($mysqli->query($sql) === TRUE) {
			echo "New record created successfully";
		  } else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		  }

		$mysqli->close();
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
