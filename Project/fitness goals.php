<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST['age'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $goal = $_POST['goal'];

    // Optional: Process data here, e.g., provide personalized recommendations
    $recommendation = "Based on your input, we recommend a personalized plan for a $goal diet.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fitness Goals - ZenFit</title>
  <link rel="stylesheet" href="style2.css">
</head>
<body>
  <div class="wrapper" id="login">
    <section class="fitness-form-container">
      <div class="top">
        <h2>Enter Your Fitness Information</h2>
        <p>Get personalized fitness recommendations based on your information</p>
      </div>

      <?php if (isset($recommendation)): ?>
        <!-- Display personalized recommendation after form submission -->
        <div class="recommendation">
          <h3>Your Recommendation</h3>
          <p>Age: <?= htmlspecialchars($age); ?></p>
          <p>Height: <?= htmlspecialchars($height); ?> cm</p>
          <p>Weight: <?= htmlspecialchars($weight); ?> kg</p>
          <p>Fitness Goal: <?= htmlspecialchars($goal); ?></p>
          <p><?= htmlspecialchars($recommendation); ?></p>
        </div>
      <?php else: ?>
        <!-- Display form if not submitted -->
        <form id="fitnessForm" action="fitness_goals.php" method="post">
          <div class="input-box">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="10" max="100" required placeholder="Enter your age">
          </div>

          <div class="input-box">
            <label for="height">Height (cm):</label>
            <input type="number" id="height" name="height" min="50" max="250" required placeholder="Enter your height">
          </div>

          <div class="input-box">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" name="weight" min="20" max="200" required placeholder="Enter your weight">
          </div>

          <div class="input-box">
            <label for="goal">Fitness Goal:</label>
            <select id="goal" name="goal" required>
              <option value="" disabled selected>Select your goal</option>
              <option value="vegan">Vegan</option>
              <option value="vegetarian">Vegetarian</option>
              <option value="non-veg">Non-Vegetarian</option>
            </select>
          </div>

          <div class="input-box">
            <input type="submit" class="submit" id="submitBtn" value="Get Personalized Recommendation">
          </div>
        </form>
      <?php endif; ?>
    </section>
  </div>
</body>
</html>
