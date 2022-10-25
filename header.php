<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
    <div class='container-fluid text-center'>
        <a class='navbar-brand active ' href='index.php'>Referance</a>
        <!-- <img src='images/logo.png' alt='BrandName' width='30' height='30'> -->
        <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                <li class='nav-item'>
                    <a class='nav-link active ' aria-current='page' href='index.php'>Home</a>
                </li>
                <?php
                if (isset($_SESSION['ref_login'])) {
                    echo "<a class='nav-link active ' aria-current='page' href='new.php'>New</a>";
                }
                ?>
            </ul>
            <?php
            if (isset($_SESSION['ref_login'])) {
                echo "<a href='change_password.php' class='btn btn-outline-primary me-3 text-light'>Change Password</a>";
                echo "<a href='logout.php' class='btn btn-primary'>Logout</a>";
            } else {
                echo "<a href='login.php' class='btn btn-primary'>Login</a>";
            }
            ?>
        </div>
    </div>
</nav>

<body>