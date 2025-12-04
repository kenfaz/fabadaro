<?php
include('database.php');


// Create table 

// $sql = "CREATE TABLE IF NOT EXISTS users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(100) NOT NULL UNIQUE,
//     email VARCHAR(150) NOT NULL UNIQUE,
//     password VARCHAR(255) NOT NULL,
//     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
// )";

// if (mysqli_query($conn, $sql)) {
//     echo "Users table created successfully!";
// } else {
//     echo "Error creating table: " . mysqli_error($conn);
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

    // Check if passwords match
    if ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if username OR email exists
        $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1");

        if (mysqli_num_rows($check) > 0) {
            $error = "Username or Email already exists.";
        } else {
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Insert new user
            $sql = "INSERT INTO users (username, email, password) 
                    VALUES ('$username', '$email', '$hashedPassword')";

            if (mysqli_query($conn, $sql)) {
                // Redirect to login
                header("Location: login.php");
                exit();
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/register.css" />
    <link rel="icon" href="src/icons/favicon.ico" />
    <title>Fabadaro - Register</title>
  </head>

  <body>
    <div class="main-div">
      <div class="form-container">
        <div class="left-div">

          <form class="login-box" method="POST" action="">
            <h2>CREATE ACCOUNT</h2>
            <h3>Welcome to the best comic and manga store!</h3>

            <?php if (!empty($error)) { ?>
              <p style="color:red; font-size:14px;"><?php echo $error; ?></p>
            <?php } ?>

            <p>Username</p>
            <input type="text" name="username" required>

            <p>Email</p>
            <input type="email" name="email" required>

            <p>Password</p>
            <input type="password" name="password" required>

            <p>Confirm Password</p>
            <input type="password" name="confirm_password" required>

            <button class="sign-in" type="submit">Create Account</button>

            <p class="login-link-text">Already have an account? 
              <a class="login-link" href="login.php">Log In</a>
            </p>
          </form>

        </div>

        <div class="right-div">
          <img src="src/images/chainsaw_man.webp" alt="Chainsaw Man"/>
        </div>
      </div>
    </div>
  </body>
  <footer></footer>
</html>
