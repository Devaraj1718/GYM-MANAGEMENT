<!DOCTYPE html>
<html>
<head>
    <title>BMI Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, orange, black);
            color: white;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(0, 0, 0, 0.7);
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        label {
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>BMI Calculator</h2>
        <form id="bmiForm">
            <label for="weight">Weight (kg):</label>
            <input type="number" id="weight" step="0.01" required><br><br>

            <label for="height">Height (cm):</label>
            <input type="number" id="height" step="0.01" required><br><br>

            <button type="button" onclick="calculateBMI()">Calculate BMI</button><br><br>

            <label for="bmiResult">Your BMI:</label>
            <span id="bmiResult"></span>
        </form>
    </div>

    <script>
        function calculateBMI() {
            var weight = document.getElementById("weight").value;
            var height = document.getElementById("height").value;
            var bmi = (weight / ((height / 100) * (height / 100))).toFixed(2);

            document.getElementById("bmiResult").textContent = bmi;
        }
    </script>
</body>
</html>