<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Christmas Timer</title>
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
            <form action="./apis/christmas-timer.php" method="get">
                <input type="date" id="start" name="month" min="2022-09-13" max="2022-12-25" value="2022-09-13">
                <button type="submit">GIVE ME HOW MANY DAYS LEFT FOR CHRISTMAS NOW!</button>
            </form>
        </div>
    </main>
</body>

</html>