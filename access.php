<?php 
    if (isset($_COOKIE['username'])) {
        
    } else {
        if ($_POST['username'] === 'agent' && $_POST['password'] === 'password123') {
            setcookie('username', $_POST['username'], strtotime('+24hours'));
        } else {
            header('Location: index.php?invalid');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Granted | Welcome Agent</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="image-side">
            <h1>Welcome Agent!</h1>
            <p>On the right side are the details to your mission!</p>
        </div>
        <div class="form-side">
            <h2>Here is your task:</h2>
            <p>Your task is to go and steal a helicopter, then all the gold from the bank of spain. DO not get caught. If you need help your hacking friend will be here. Just send a text message to 123-456-7890</p>
            <a href="destroy.php">Proceed to Logout</a>
        </div>
    </div>
</body>
</html>