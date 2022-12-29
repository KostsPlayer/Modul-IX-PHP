<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrosesan File</title>
</head>
<body>
    <h2>Pemeriksaan File</h2>
    <?php
        $file='C:\\Teks.txt';
        if(file_exists($file))
        {
            echo ("File <b> $file </b> sudah ada !");
        }
        else
        {
            echo ("File <b> $file </b> tidak ada !");
        }
    ?>
</body>
</html>