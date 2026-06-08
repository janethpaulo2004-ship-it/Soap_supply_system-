<?php
session_start();

if(isset($_POST['login'])){
    $_SESSION['manager'] = "Manager";
    header("Location: dashboard.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SOAP SUPPLY SYSTEM</title>

    <style>

        body{
            background:pink;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
            font-family:Arial;
        }

        .container{
            background:white;
            width:350px;
            padding:30px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 0 15px gray;
        }

        h2{
            color:#1565C0;
        }

        input{
            width:90%;
            padding:12px;
            margin:10px 0;
            border:none;
            border-radius:10px;
            background:#2196F3;
            color:white;
            font-size:16px;
        }

        input::placeholder{
            color:white;
        }

        button{
            background:#1565C0;
            color:white;
            border:none;
            padding:12px 30px;
            border-radius:10px;
            cursor:pointer;
            font-size:16px;
        }

        button:hover{
            background:#0D47A1;
        }

    </style>

</head>

<body>

<div class="container">

    <h2>SOAP SUPPLY SYSTEM</h2>

    <form method="POST">

        <input type="email"
        name="email"
        placeholder="Email"
        required>

        <input type="password"
        name="password"
        placeholder="Password"
        required>

        <button type="submit"
        name="login">
        LOGIN
        </button>

    </form>

</div>

</body>
</html>