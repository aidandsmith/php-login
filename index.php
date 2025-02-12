<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="image-side">
            <h1>Welcome to your Account</h1>
            <p>Enter your details to access your account</p>
        </div>
        <div class="form-side">
            <h2>Sign In</h2>
            <form method="POST" action="access.php">
                <?php 
                    if(isset($_COOKIE['username'])) {
                        echo '<h1>Welcome back '.$_COOKIE['username'].'!</h1>';
                        echo '<p>You are already logged in, and have access. If you need to log out click the button below.</p>';
                        echo '<a href="access.php">Continue</a>';
                    }else{
                        echo '<label for="username">Username</label>';
                        echo '<input name="username" id="username" type="text" placeholder="Enter your username" required>';
                        echo '<label for="password">Password</label>';
                        echo '<input name="password" id="password" type="password" placeholder="Enter your password" required>';
                        echo '<input class="submit-input" value="Login" type="submit">';
                    }   
                ?>
                <!--
                <label for="username">Username</label>
                <input name="username" id="username" type="text" placeholder="Enter your username" required>
                <label for="password">Password</label>
                <input name="password" id="password" type="password" placeholder="Enter your password" required>
                <input class="submit-input" value="Login" type="submit">
                -->
            </form>
        </div>
    </div>
</body>
</html>