<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$apellido = mysqli_real_escape_string($mysqli, $_POST['apellido']);
	$edad = mysqli_real_escape_string($mysqli, $_POST['edad']);
	$ciudad = mysqli_real_escape_string($mysqli, $_POST['ciudad']);
	$fruta_favorita = mysqli_real_escape_string($mysqli, $_POST['fruta_favorita']);
	$verdura_favorita = mysqli_real_escape_string($mysqli, $_POST['verdura_favorita']);
	$n_personas_viven = mysqli_real_escape_string($mysqli, $_POST['n_personas_viven']);
	
	// checking empty fields
	if(empty($nombre) || empty($apellido) || empty($edad) || empty($ciudad) || empty($fruta_favorita) || empty($verdura_favorita) || empty($n_personas_viven)) {
				
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
	} else {	
		echo "hoal";
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET nombre='$nombre',apellido='$apellido',edad='$edad',ciudad='$ciudad',fruta_favorita='$fruta_favorita',verdura_favorita='$verdura_favorita',n_personas_viven='$n_personas_viven' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
	$name = $res['name'];
	$age = $res['age'];
	$email = $res['email'];
	$name = $res['name'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table>
			<tr> 
				<td>Nombre</td>
				<td><input type="text" name="nombre"></td>
			</tr>
			<tr> 
				<td>Apellido</td>
				<td><input type="text" name="apellido"></td>
			</tr>
			<tr> 
				<td>Edad</td>
				<td><input type="text" name="edad"></td>
			</tr>
			<tr> 
				<td>Ciudad</td>
				<td><input type="text" name="ciudad"></td>
			</tr>
			<tr> 
				<td>Fruta Favorita</td>
				<td><input type="text" name="fruta_favorita"></td>
			</tr>
			<tr> 
				<td>Verdura Favorita</td>
				<td><input type="text" name="verdura_favorita"></td>
			</tr>
			<tr> 
				<td>Numero de personas que viven contigo</td>
				<td><input type="text" name="n_personas_viven"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
