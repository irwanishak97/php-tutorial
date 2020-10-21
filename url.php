<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="url.php" method="post">
        <!--post = secure untuk password, more information from user; get = get data to url  -->
        Username: <input type="text" name="username">
        Password: <input type="password" name="password">
        <input type="submit">
    </form>
    <br>
    <br>

    <p>Your name is <?php echo $_POST["username"]; ?></p>
    <p>and your password is <?php echo $_POST["password"]; ?> </p>
</body>

</html>