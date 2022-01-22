<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="nombre" name="name">
        <input type="email" placeholder="mail" name="mail" >
        <textarea  placeholder="mensaje" name="message"></textarea>
        <input type="submit" value="enviar" name="send">
 </form>

    <?php
        include('mail.php');
    ?>


</body>
</html>