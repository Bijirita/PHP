<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thank You!</title>
</head>
<body>
    Thank you <?php echo htmlspecialchars($_POST["First Name"]); ?>!
    We will contact you at <?php echo(int)$_POST["Phone"]; ?>.

</body>
</html>