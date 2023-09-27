<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
    	 fieldset 
        {
            border: 2px solid black;
            text-align: left;
            padding: 0px 20px 15px;
            width: 500px;
        }
    </style>
</head>
<body>
	<fieldset>
    <legend><h1> Student Registration Form </h1></Legend>
    <form  method="post" action="Submit.php" >
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>
        <hr width="270px" align="left">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>
        <hr width="270px" align="left">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <hr width="270px" align="left">

        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" required><br>
        <hr width="270px" align="left">

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required>
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female" required>
        <label for="female">Female</label>
        <input type="radio" id="other" name="gender" value="Other" required>
        <label for="other">Other</label><br>
        <hr width="270px" align="left">
        <label for="course">Course:</label>
        <select id="course" name="course" required>
            <option value="Computer Science">Computer Science</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Physics">Physics</option>
            <option value="Biology">Biology</option>
            <option value="Chemistry">Chemistry</option>
        </select><br>
        <hr width="270px" align="left">

        <input type="submit" value="Submit">
    </fieldset>
    </form>
</body>
</html>
