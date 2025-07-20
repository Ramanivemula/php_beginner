<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Calculator</title>
</head>
<body>

  <h2>Simple Calculator</h2>

  <form method="POST" action="">
    <input type="number" name="num1" placeholder="Enter first number" required>
    <br><br>

    <input type="number" name="num2" placeholder="Enter second number" required>
    <br><br>

    <select name="operation" required>
      <option value="">-- Select Operation --</option>
      <option value="+">Add (+)</option>
      <option value="-">Subtract (-)</option>
      <option value="*">Multiply (*)</option>
      <option value="/">Divide (/)</option>
      <option value="%">Remainder (%)</option>
    </select>
    <br><br>

    <button type="submit" name="calculate">Calculate</button>
  </form>

  <br>

  <?php
  function calculator($x, $y, $operation) {
      switch ($operation) {
          case '+':
              echo "$x + $y = " . ($x + $y);
              break;
          case '-':
              echo "$x - $y = " . ($x - $y);
              break;
          case '*':
              echo "$x * $y = " . ($x * $y);
              break;
          case '/':
              if ($y != 0) {
                  echo "$x / $y = " . ($x / $y);
              } else {
                  echo "Cannot divide by zero!";
              }
              break;
          case '%':
              if ($y != 0) {
                  echo "$x % $y = " . ($x % $y);
              } else {
                  echo "Cannot calculate remainder with zero!";
              }
              break;
          default:
              echo "Invalid operation!";
      }
  }

  // Handle form submission
  if (isset($_POST['calculate'])) {
      $num1 = $_POST['num1'];
      $num2 = $_POST['num2'];
      $op = $_POST['operation'];

      echo "<h3>Result:</h3>";
      calculator($num1, $num2, $op);
  }
  ?>

</body>
</html>
