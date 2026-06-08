<?php
session_start();

if(!isset($_SESSION['manager'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#FCE4EC;
}

.header{
    background:#1565C0;
    color:white;
    padding:20px;
    text-align:center;
}

.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:20px;
    padding:30px;
}

.card{
    background:#2196F3;
    color:white;
    padding:30px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 0 10px gray;
}

.card a{
    color:white;
    text-decoration:none;
}

.logout{
    text-align:center;
    margin:20px;
}

.logout a{
    background:red;
    color:white;
    padding:10px 20px;
    text-decoration:none;
    border-radius:10px;
}

</style>

</head>

<body>

<div class="header">

    <h1>SOAP SUPPLY SYSTEM</h1>

    <p>Welcome Manager</p>

</div>

<div class="cards">

    <div class="card">
        <h2>Add Product</h2>

        <a href="add_product.php">

        Open

        </a>
    </div>

    <div class="card">

        <h2>View Products</h2>

        <a href="#">

        Open

        </a>

    </div>

    <div class="card">

        <h2>View Orders</h2>

        <a href="#">

        Open

        </a>

    </div>

</div>

<div class="logout">

    <a href="logout.php">

    Logout

    </a>

</div>

</body>
</html>