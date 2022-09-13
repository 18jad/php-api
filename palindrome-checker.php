<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./scripts/palindrome.js" defer></script>
    <title>Palindrome Checker</title>
</head>

<body>
    <header>
        <h1>Useless Tools</h1>
    </header>
    <main>
        <nav>
            <a href="./index.php">Home</a>
            <a href="./palindrome-checker.php" class="active">Palindrome Checker</a>
            <a href="./calculator.php">Calculator</a>
            <a href="./password-checker.php">Password Checker</a>
            <a href="./christmas.php">Christmas Timer</a>
        </nav>
        <div class="form-section">
            <form action="./apis/palindrome.php">
                <p id="palindromeResult" class="result-check"> -</p>
                <input type="text" name="string" id="palindromeInput" placeholder=" Enter a word" required>
                <button type="button" id="palindromeBtn">Check palindrome</button>
                <button type="submit">Check palindrome (JSON)</button>
            </form>
        </div>
    </main>
</body>

</html>