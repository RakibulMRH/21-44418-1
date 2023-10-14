<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "darussalam";
$conn = new mysqli($servername, $username, $pass, $dbname);
$sql = "SELECT * FROM `donators`";
$result = $conn->query($sql);

if (isset($_POST['edit'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $amount = $_POST['amount'];
    $region = $_POST['region'];
    $sql2 = "UPDATE `donators` SET `Name`='$name', `Region`='$region', `Amount`='$amount' WHERE Email = '$email'";

    if ($conn->query($sql2) === TRUE) {
        header("Location: Connect.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
if(isset($_POST['delete']))
{
	$email = $_POST['email'];
	$sql3 = "DELETE FROM `donators` WHERE Email = '$email'";
	if ($conn->query($sql3) === TRUE) {
		header("Location: Connect.php");
	} else {
		echo "Error deleting record: " . $conn->error;
	}
}

if(isset($_POST['insert']))
{
	$name2 = $_POST['name2'];
	$email2 = $_POST['email2'];
	$amount2 = $_POST['amount2'];
	$region2 = $_POST['region2'];
	$sql4 = "INSERT INTO `donators`(`Email`, `Name`, `Region`, `Amount`) VALUES ('$email2','$name2','$region2','$amount2')";
	if ($conn->query($sql4) === TRUE) {
		header("Location: Connect.php");
	} else {
		echo "Error inserting record: " . $conn->error;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>MySQL</title>
</head>
<body>
	<form method="POST" action="Connect.php">
		<label for="email2">Email</label>
		<input type="text" name="email2" value=""> <br>
	<label for="name2">Name</label>
	<input type="text" name="name2" value=""><br>
	<label for="region2">Region</label>
	<input type="text" name="region2" value=""><br>
	<label for="amount2">Amount</label>
	<input type="text" name="amount2" value=""><br>
	<input type="submit" name="insert" value="Insert">
	</form>

    <table border="2">
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Region</th>
            <th>Amount</th>
            <th colspan="2">Option</th>
        </tr>
        <?php while ($r = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $r["Email"]; ?></td>
                <td><?php echo $r["Name"]; ?></td>
                <td><?php echo $r["Region"]; ?></td>
                <td><?php echo $r["Amount"]; ?></td>
                <td>
                    <form method="POST" action="Connect.php">
                        <input type="hidden" name="email" value="<?php echo $r['Email']; ?>">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo $r['Name']; ?>">
                        <label for="">Region</label>
                        <input type="text" name="region" value="<?php echo $r['Region'];?>">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" value="<?php echo $r['Amount'];?>">
                        <input type="submit" name="edit" value="Edit">
                    </form>
                </td>
                <td>
                    <form method="POST" action="Connect.php">
                        <input type="hidden" name="email" value="<?php echo $r['Email']; ?>">
                        <input type="submit" name="delete" value="Delete">
                    </form>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
