<?php
session_start();
require "conn.php";
if (!isset($_SESSION["password"])) {
    header('location:login.php');
}

if (isset($_POST['add'])) {
    $qry = "INSERT INTO `chatbot` VALUES (null,'" . $_POST['query'] . "','" . $_POST['reply'] . "',current_timestamp)";

    if ($con->query($qry)) {
        $save = "success";
    } else
        $save = "warning";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Dashoard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <h1 class="text-center mt-5 pt-5">Add-Chat</h1>
    </header>
    <main class="container">
        <div>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        <?php
        if (isset($save) && $save == "success") { ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                Your Response has been submitted, Our Team will contact you shortly
            </div>
        <?php } ?>
        <div>
            <a href="chat.php" class="btn btn-success">chat</a>
        </div>
        <form method="post">
            <div class="mb-3 mt-3">
                <label for="text" class="form-label">Query:</label>
                <input type="query" class="form-control" id="query" placeholder="Enter Query" name="query">
            </div>
            <div class="mb-3">
                <label for="reply" class="form-label">Reply:</label>
                <input type="text" class="form-control" id="reply" placeholder="Enter Reply" name="reply">
            </div>
            <button type="submit" name="add" class="btn btn-primary">+ Add</button>
        </form>
    </main>
</body>

</html>