<?php
session_start();
require "conn.php";
if (!isset($_SESSION["password"])) {
    header('location:login.php');
}
$qry = "select * from request";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Dashoard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">

</head>

<body>
    <header>
        <h1 class="text-center mt-5 pt-5">Call Back Requests</h1>
    </header>
    <main class="container">
        <div>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped
        table-hover	
        table-borderless
        table-dark
        align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>S.no</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Country</th>
                        <th>Business Name</th>
                        <th>Business State</th>
                        <th>Intrest</th>
                        <th>Received On</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $result = $con->query($qry);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr class="table">
                            <td scope="row"><?php echo $row['id'] ?></td>
                            <td><?php echo $row['fName'] ?></td>
                            <td><?php echo $row['lName'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['contact'] ?></td>
                            <td><?php echo $row['country'] ?></td>
                            <td><?php echo $row['bName'] ?></td>
                            <td><?php echo $row['bState'] ?></td>
                            <td><?php echo $row['intrested'] ?></td>
                            <td><?php echo $row['date'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div>
            <a href="index.php" class="btn btn-success">contact Page</a>
        </div>
    </main>
</body>

</html>