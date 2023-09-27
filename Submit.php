<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Form informations!</h1>
	<?php 
	 	$first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $dob = $_POST["dob"];
        $gender = $_POST["gender"];
        $course = $_POST["course"];

        // Display the submitted information
        echo "<p><strong>First Name:</strong> $first_name</p>";
        echo "<p><strong>Last Name:</strong> $last_name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Course:</strong> $course</p>";
	?>
</body>
</html>