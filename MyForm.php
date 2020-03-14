<?php
// require_once('SendMail.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="SendMail.php" method="POST">
            <input type="text" name="Name" id="name" placeholder="Anthony">
            <input type="email" name="Email" id="email" placeholder="Abc@gmail.com">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>