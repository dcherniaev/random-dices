<html>
<head>
    <title>random-dices</title>
</head>
<body>
<form action="/roll.php" method="post">
    <select name = "qty">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
    x
    <select name = "dice">
        <option value="4">d4</option>
        <option value="6">d6</option>
        <option value="8">d8</option>
        <option value="10">d10</option>
        <option value="12">d12</option>
        <option value="20">d20</option>
    </select>
    <br>
    <input type="submit" value="Roll!">
</form>
</body>
</html>