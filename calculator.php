<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./scripts/calculator.js" defer></script>
    <title>Calculator</title>
</head>

<body>
    <header>
        <h1>Useless Tools</h1>
    </header>
    <main>
        <nav>
            <a href="./index.php">Home</a>
            <a href="./palindrome-checker.php">Palindrome Checker</a>
            <a href="./calculator.php" class="active">Calculator</a>
            <a href="./password-checker.php">Password Checker</a>
            <a href="./christmas.php">Christmas Timer</a>
        </nav>
        <div class="form-section">
            <form action="./apis/calculate-operation.php" method="post">
                <h3 style="color: #fefefe; text-align: center">This calculator will calculate the following operation:
                    <br />
                    <hr>
                    <br />
                    <span style="font-weight: 500; background-color: #0002; padding: 5px 20px; 
                    border-radius: 10px; "> A^3 + B*C
                        - A/B </span>
                </h3>
                <input type="number" name="a" placeholder="A" id="a" required>
                <input type="number" name="b" placeholder="B" id="b" required>
                <input type="number" name="c" placeholder="C" id="c" required>
                <button type="button" id="calculatorBtn">Calculate</button>
                <button type="submit">Calculate (JSON)</button>
                <p id="calculatorResult" class="result-check"> -</p>
            </form>
        </div>
    </main>
</body>

</html>