<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello Code Igniter 3</title>
</head>
<body>
    Selamat belajar Code Igniter 3

    <br> 

    Nama saya adalah : 

    <?php 

    if (isset ($nama)) {
        echo $nama;
    } else {
        echo "Jaki is Default";
    }

    ?>

</body>
</html>