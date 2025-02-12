<?php 
    if (isset($_COOKIE['username'])) {
        $username = $_COOKIE['username'];
    } else {
        setcookie('username', $_POST['username'], strtotime('+24hours'));
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Granted | Welcome <?php echo $username ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-wrapper">
        <div class="image-side">
            <h1>Welcome <?php echo $username ?></h1>
            <p>On the right side are the details to your mission!</p>
        </div>
        <div class="form-side">
            <h2>Here is your task:</h2>
            <p>Your task is to go and steal a helicopter, then all the gold from the bank of spain. DO not get caught. If you need help your hacking friend will be here. Just send a text message to 123-456-7890</p>
        </div>
    </div>
</body>
</html>