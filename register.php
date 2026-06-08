<?php
include("db.php");

$message = "";

if(isset($_POST['register'])){

    $full_name = mysqli_real_escape_string($conn,$_POST['full_name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $phone = mysqli_real_escape_string($conn,$_POST['phone']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $check = mysqli_query($conn,
    "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($check) > 0){

        $message = "Email already exists!";

    }else{

        $sql = "INSERT INTO users
        (full_name,email,phone_number,password,role)
        VALUES
        ('$full_name','$email','$phone','$password','$role')";

        if(mysqli_query($conn,$sql)){
            $message = "Registration Successful!";
        }else{
            $message = "Registration Failed!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<div class="form-container">

<h2>Create Account</h2>

<p><?php echo $message; ?></p>

<form method="POST">

<input type="text"
name="full_name"
placeholder="Full Name"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="text"
name="phone"
placeholder="Phone Number"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<select name="role">
    <option value="customer">Customer</option>
    <option value="manager">Manager</option>
</select>

<button type="submit" name="register">
Register
</button>

</form>

<a href="login.php">
Already have account? Login
</a>

</div>

</body>
</html>