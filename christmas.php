<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./scripts/christmas.js" defer></script>
    <title>Christmas Timer</title>
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
            <a href="./password-checker.php">Password Checker</a>
            <a href="./christmas.php" class="active">Christmas Timer</a>
        </nav>
        <div class="form-section">
            <form action="./apis/christmas-timer.php" method="get">
                <p id="christmasResult" class="result-check"> -</p>
                <input type="date" name="date" min="2022-09-13" id="christmasInput" max=" 2022-12-25" value="2022-09-13">
                <button type="button" id="christmasBtn">GIVE ME HOW MANY DAYS LEFT FOR CHRISTMAS NOW!</button>
                <button type="submit">GIVE ME HOW MANY DAYS LEFT FOR CHRISTMAS NOW! (JSON)</button>
            </form>
        </div>
    </main>
</body>

</html>