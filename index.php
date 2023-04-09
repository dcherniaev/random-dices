
<html>
<head>
    <title>random-dices</title>
</head>
<body>

<br>
<form action="/roll.php" method="post">
    <label for="qty">Dices: </label><input type="text" name="qty">
    <br>
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