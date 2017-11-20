<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes</title>
</head>
<body>

    <?php
    if (isset ($jumlah)) {
        for ($i = 1; $i <= $jumlah; $i++) {
            echo "Perulangan ke ".$i;
            echo "<br>";
        }    
    } else {
        echo "Tidak ada perulangan";
    }

    ?>
</body>
</html>