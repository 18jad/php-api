<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Calculator</title>
</head>

<body>
    <header>
        <h1>Useless Tools</h1>
    </header>
    <main>
        <nav>
            <a href="./palindrome-checker.php">Palindrome Checker</a>
            <a href="./calculator.php">Calculator</a>
            <a href="./password-checker.php">Password Checker</a>
            <a href="./christmas.php">Christmas Timer</a>
        </nav>
        <div class="form-section">
            <form action="./apis/calculate-operation.php" method="post">
                <input type="number" name="a" placeholder="A" required>
                <input type="number" name="b" placeholder="B" required>
                <input type="number" name="c" placeholder="C" required>
            </form>
        </div>
    </main>
</body>

</html>