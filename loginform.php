<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/style.css">

<style>
    * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background-color: #f1f1f1;
    font-family: Arial, sans-serif;
}

.container {
    background-color: #fff;
    max-width: 400px;
    margin: 80px auto;
    padding: 40px;
    border-radius: 4px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

p {
    text-align: center;
}

a {
    color: #4caf50;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>



</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>

            <div class="form-group">
            <label for="email"><b>Email</b></label>
            <input type="text" id="email" placeholder="Enter Email" name="email" id="email" required>  
            </div>

            <div class="form-group">
            <label for="repeatpassword"><b>Repeat Password</b></label>
            <input type="password" id="repeatpassword" placeholder="Repeat Password" name="repeatpassword" required> 
            </div>

            <div class="form-group">
                <button type="submit" name="submit">Login</button>
            </div>
            <div class="form-group">
                <p>Don't have an account? <a href="Signin.php">Sign in</a></p>
            </div>
        </form>
    </div>

   <?php
//    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//        // Process login form data
//        $username = $_POST['root'];
//        $password = $_POST[''];

        // Add your login logic here
        // Example: validate credentials against a database

        // Redirect to a new page after successful login
  //      header('Location: dashboard.php');
    //    exit;
   // }

   require 'config.php';
   if(!empty($_SESSION["id"])){
     header("Location: Signin.php");
   }
   if(isset($_POST["submit"])){

     $username = $_POST["username"];
     $password = $_POST["password"];
     $email = $_POST["email"];
     $repeatpassword = $_POST["repeatpassword"];
     $duplicate = mysqli_query($conn, "SELECT * FROM newuser1 WHERE username = '$username' OR email = '$email'");
     if(mysqli_num_rows($duplicate) > 0){
       echo
       "<script> alert('Username or Email Has Already Taken'); </script>";
     }
     else{
       if($password == $repeatpassword){
         $query = "INSERT INTO newuser1 VALUES('$username','$password','$email','$repeatpassword')";
         mysqli_query($conn, $query);
         echo
         "<script> alert('Registration Successful'); </script>";
       }
       else{
         echo
         "<script> alert('Password Does Not Match'); </script>";
       }
     }
   }
    ?>
</body>
</html>
