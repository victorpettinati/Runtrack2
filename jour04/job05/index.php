<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" placeholder="username"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" placeholder="password"><br>

        <input type="submit" value="Envoyer">
    </form>
<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "John" or "john" and $password === "Rambo" || $password ==="rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }

?>
</body>
</html>
