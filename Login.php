<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .center-container 
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        fieldset 
        {
            border: 2px solid black;
            display: block;
            text-align: center;
        }

        input[type="button"] 
        {
            display: block;
            margin: auto;
        }

        legend  { padding: 0px 10px; }

        .input-box 
        {
            display: flex;
            align-items: center;
            padding: 0px 20px;
        }

        .input-box img 
        {
            position: relative;
            bottom: -2.5px;
            left: -25px;
            width: 20px;
            cursor: pointer;
        }

    </style>
</head>
<body>

<div class="center-container">
    <fieldset>
        <legend><h1>Login Page</h1></legend>
        <?php
        if(isset($_POST['login'])) { 

            $username = $_POST['username'];
            $password = $_POST['password'];

            if(!empty($username) && !empty($password)) 
            {
                if($username == $password) 
                {
                    $message = "Login successful!";
                } 
                else if ($username != $password)
                {
                    $message = "Wrong information!";
                }
            } 
            else {
                $message = "Username and password are required!";
            }

        }
        ?>
        <?php
        if(isset($message)) 
        {
            echo "<p>$message</p>";
            if($message == "Login successful!")
            {
                header("Location: logged.php");
                exit; 
            }
        }
        ?>
        <form method="post">
            <h2>Username: <input type="text" placeholder="username" name="username" id="uname" size="30"></h2>
            <hr>
            <div class="input-box">
                <h2>Password: <input type="password" placeholder="password" name="password" id="password" size="33"></h2>
                <img src="eye-close.png" id="eyeicon">
            </div>
            <hr>
            <input type="submit" name="login" value="Login">
        </form>
        <form method="post" action="Registration.php">
            <input type="submit" value="Registration">
        </form>
    </fieldset>
</div>
<br>

<script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");
    eyeicon.onclick = function() 
    {
        if(password.type == "password") 
        { 
            eyeicon.src = "eye-open.png";
            password.type = "text";
        } 
        else 
        {
            password.type = "password";
            eyeicon.src = "eye-close.png";
        }
    }
</script>
</body>
</html>
