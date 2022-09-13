<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./scripts/password.js" defer></script>
    <title>Password Checker</title>
</head>

<body>
    <header>
        <h1>Useless Tools</h1>
    </header>
    <main>
        <nav>
            <a href="./index.php">Home</a>
            <a href="./palindrome-checker.php">Palindrome Checker</a>
            <a href="./calculator.php">Calculator</a>
            <a href="./password-checker.php" class="active">Password Checker</a>
            <a href="./christmas.php">Christmas Timer</a>
        </nav>
        <div class="form-section">
            <form action="./apis/password.php" method="post">
                <p id="passwordResult" class="result-check"> -</p>
                <input type=" text" name="password" id="passwordInput" placeholder="Enter a password" required>
                <button type="button" id="passwordBtn">Check strengthness</button>
                <button type="submit">Check strengthness (JSON)</button>
            </form>
        </div>
    </main>
</body>

</html>