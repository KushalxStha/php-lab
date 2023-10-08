<!-- Write a PHP program in which user inputs form data, calculate simple interest and display it in textbox. -->

<!DOCTYPE html>
<html>
<head>
    <title>Simple Interest Calculator</title>
</head>
<body>
    <h1>Simple Interest Calculator</h1>
    
    <form method="post">
        <label for="principal">Principal Amount:</label>
        <input type="text" name="principal" id="principal" required><br><br>

        <label for="rate">Rate of Interest (%):</label>
        <input type="text" name="rate" id="rate" required><br><br>

        <label for="time">Time (in years):</label>
        <input type="text" name="time" id="time" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get user inputs
        $principal = $_POST["principal"];
        $rate = $_POST["rate"];
        $time = $_POST["time"];

        // Calculate simple interest
        $simpleInterest = ($principal * $rate * $time) / 100;
    ?>
        <br><br>
        <label for="result">Simple Interest:</label>
        <input type="text" name="result" id="result" value="<?php echo $simpleInterest; ?>" readonly>
    <?php
    }
    ?>
</body>
</html>
