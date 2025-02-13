<?php 
    setcookie('username', '', strtotime('-24hours'))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Login Portal | Logged Out</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-wrapper">
        <div class="image-side">
            <h1>Goodbye Agent!</h1>
            <p>Thanks for visiting</p>
        </div>
        <div class="form-side">
            <p>Click button below to logout</p>
            <a href="index.php">Log Out</a>
        </div>
    </div>
</body>
</html>