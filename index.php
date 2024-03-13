<?php
session_start();

if (isset($_SESSION['username'])) {
        header("Location: page1.php");
        exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "HERAK";
    $password = "ILISI1";
    if ($_POST['username'] == $username && $_POST['password'] == $password) 
    {
        $_SESSION['username'] = $username;
        header("Location: page1.php");
        exit;
    } 
    else 
    {
        $error_message = "vous n'avez pas le droit de l'admin";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styling.css">
    <title>connexion</title>
</head>
<body>
    <div class="container">
        <h2>Connexion</h2>
        <?php
        if (isset($error_message)) {
            echo "<p style='color: red;'>$error_message</p>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="username">Nom:</label>
            <input type="text" id="username" name="username" required><br><br>
            <label for="password">mot de passe:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="connexion">
        </form>
    </div>
</body>
</html>
