<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Enter information</title>
</head>
<body>
    <form action="<?= base_url("login") ?>" method="post">
        <label for="name">Name:</label>
        <input required type="text" id="name" name="name" value=""> <br>
        <label for="department">Department:</label>
        <input required type="text" id="department" name="department" value=""> <br>
        <button type="submit" name="send">Send</button>
    </form>
</body>
</html>
