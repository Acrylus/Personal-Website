<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, ">
	<title>
		Cruz - Personal Website  
	</title><!-- Website Title -->

	<link rel="stylesheet" type="text/css" href="cruz.css"> <!-- CSS -->

	<link rel="icon" type="image/x-icon" href="images/icon.ico"> <!-- Fav -->

</head>
<body>
	<div class="banner">
		<nav>
			<header>
				<img src="images/test.png" width="100" alt="Arylus Logo">
				<h1>
					Acrylus
				</h1>
			</header>

		
			<ul>
				<li>
					<a href="cruz.php">
					Home</a>
				</li>
				
				<li>
					<a href="address.php">
					Address</a>
				</li>
				
				<li>
					<a href="hobby.php">
					Hobby</a>
				</li>

				<li>
					<a href="skill.php">
					Skills</a>
				</li>

				<li>
					<a href="contact.php">
					Contacts</a>
				</li>

				<li>
					<a href="dashboard.php">
					Dashboard</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="form-container">
<main>
	<form method="post">  
		<h1>Nurse Register</h1>
  
<label for = "nurseName"> Nurse Name </label>         
<input type="text" id = "nurseName" name="nurseName" size="15"/> <br> <br>  
<label for = "nursePosition"> Position: </label>     
<input type="text" id = "nursePosition" name="nursePosition" size="15"/> <br> <br>  
<label for = "nurseRoom"> Room: </label>         
<input type="text" id = "nurseRoom" name="nurseRoom" size="15"/> <br> <br>  
<label for = "nurseFloor"> Floor: </label>         
<input type="text" id = "nurseFloor" name="nurseFloor" size="15"/> <br> <br>  
  
<input type = "submit" name = "submit" value = "submit" > 

</form>

<?php
        $mysqli = new mysqli('localhost', 'root','','dbg6cruz') or die (mysqli_error($mysqli));

        if(isset($_POST['submit'])) {

            $nurseName = $_POST['nurseName'];
            $nursePosition = $_POST['nursePosition'];
            $nurseRoom = $_POST['nurseRoom'];
            $nurseFloor = $_POST['nurseFloor'];

            $resultset = $mysqli->query("INSERT INTO tblnurse (nurseName, nursePosition, nurseRoom, nurseFloor)VALUES ('$nurseName', '$nursePosition', '$nurseRoom', '$nurseFloor')") or die($mysqli->error);

        }


?> 

<form method="post">  
		<h1>Patient Register</h1>
  
<label for = "patientName"> Patient Name </label>         
<input type = "text" id = "patientName" name = "patientName" size="15"/> <br> <br>  
<label for = "patientNurseID"> Nurse Name: </label>     
<input type = "text" id = "patientNurseID" name = "patientNurseID" size="15"/> <br> <br>  
<label for = "patientBirth"> Birth(YYYY-MM-DD): </label>         
<input type = "date" id = "patientBirth" name = "patientBirth" size="15"/> <br> <br>  
<label for = "patientAddress"> Address: </label>         
<input type = "text" id = "patientAddress" name = "patientAddress" size="15"/> <br> <br> 
<label for = "patientPhone"> Phone Number: </label>         
<input type = "text" id = "patientPhone" name = "patientPhone" size="15"/> <br> <br>  
<label for = "patientMedHistory"> Medical History: </label>         
<input type = "text" id = "patientMedHistory" name = "patientMedHistory" size="15"/> <br> <br>  
  
<input type = "submit" name = "go" value = "submit" > 
</form>

<?php
        $mysqli = new mysqli('localhost', 'root','','dbg6cruz') or die (mysqli_error($mysqli));

        if(isset($_POST['go'])) {

            $patientName = $_POST['patientName'];
            $patientNurseID = $_POST['patientNurseID'];
            $patientBirth = $_POST['patientBirth'];
            $patientAddress = $_POST['patientAddress'];
            $patientPhone = $_POST['patientPhone'];
            $patientMedHistory = $_POST['patientMedHistory'];

            $resultset = $mysqli->query("INSERT INTO tblpatient (patientName, patientNurseID, patientBirth, patientAddress, patientPhone, patientMedHistory)VALUES ('$patientName', '$patientNurseID', '$patientBirth', '$patientAddress', '$patientPhone', '$patientMedHistory')") or die($mysqli->error);

        }


?>

</main>
</div>
		
		<footer>
			Copyright &copy; 2022 ACRYLUS. Design by Anton Joseph Cruz
		</footer>
</body>
</html>
<?php 

?>