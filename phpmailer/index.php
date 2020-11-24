<?php include 'email.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/boot.css">
    <link rel="stylesheet" href="css/msg.css">
    <title>PHPmailer</title>

    <style>
        body {
            padding: 10%;
            background: #000;
        }

        label {
            color: #fff;
            font-size: 1.4em;
            padding: 10px;
        }

        input {
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
        }

        .btn {
            border: solid 1px #fff;
            padding: 15px;
            background: #000;
            color: #fff;
        }

        .btn:hover {
            border: none;
            background: #5cb85c;
            transition: 0.5s;
            cursor: pointer;
        }
    </style>
</head>

<body>



    <form action="" method="post">


        <label>Nome</label>
        <input type="text" name="name"><br>
        <label>Email</label>
        <input type="email" name="email"><br>
        <label>Mensagem</label>
        <input type="text" name="msg"><br><br>
        <input class="btn" type="submit" name="submit" value="enviar">
    </form><br>
    <?php echo $alert; ?>
</body>

</html>