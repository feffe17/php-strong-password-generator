<?php

session_start();
if (!isset($_SESSION['password'])) {
    header("Location: index.php");
    exit();
}
$password = $_SESSION['password'];
?>

<!doctype html>
<html lang="it">

<head>
    <title>Password Generata</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>La tua password è:</h1>
        <h2 class="text-success"><strong><?php echo htmlspecialchars($password); ?></strong></h2>
        <a href="index.php" class="btn btn-secondary mt-3">Genera un'altra password</a>
    </div>
</body>

</html>