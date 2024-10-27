<?php
// Initialize variables
$name = $email = $password = $confirmPassword = "";
$error = $success = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Simple validation for demonstration
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match!";
    } else {
        // Save data to database or process (e.g., hash password and store in DB)
        $success = "Account created successfully!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up - ZenFit</title>
  <link rel="stylesheet" href="style3.css">
</head>
<body>
<section class="signup">
  <h2>Create Your Account</h2>
  
  <?php if ($error): ?>
    <p style="color: red;"><?= htmlspecialchars($error); ?></p>
  <?php endif; ?>
  
  <?php if ($success): ?>
    <p style="color: green;"><?= htmlspecialchars($success); ?></p>
  <?php endif; ?>

  <form action="signup.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required value="<?= htmlspecialchars($name); ?>">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required value="<?= htmlspecialchars($email); ?>">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
    </div>

    <div class="form-group">
      <label for="confirmPassword">Confirm Password:</label>
      <input type="password" id="confirmPassword" name="confirmPassword" required>
    </div>

    <button type="submit" id="signupBtn">Sign Up</button>
  </form>
  
  <p>Already have an account? <a href="login.html">Login here</a></p>
</section>
</body>
</html>
