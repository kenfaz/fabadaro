<?php
include('database.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query the user
    $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) === 1) {

        $row = mysqli_fetch_assoc($result);

        // Compare password (assuming hashed passwords)
        if (password_verify($password, $row['password'])) {

            // Store session data
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Redirect to dashboard or homepage
            header("Location: index.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }

    } else {
        $error = "Username not found.";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/login.css" />
    <title>Fabadaro - Login</title>
  </head>
  <body>

    <div class="main-div">
      <div class="form-container">
        <div class="left-div">

          <form class="login-box" method="POST" action="">
            <h2>LOGIN</h2>
            <h3>Welcome to the best comic and manga store!</h3>

            <?php if (!empty($error)) { ?>
              <p style="color:red; font-size:14px;"><?php echo $error; ?></p>
            <?php } ?>

            <p>Username</p>
            <input type="text" name="username" required />

            <p>Password</p>
            <input type="password" name="password" required />

            <button class="sign-in" type="submit">SIGN IN</button>

            <p class="sign-up-text">Don't have an account? 
              <a class="sign-up-link" href="register.php">Sign Up</a>
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
