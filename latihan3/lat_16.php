<html>

<head>
    <title>Struktur kendali IF…ELSEIF</title>
</head>

<body>
    <?php 
    $waktu = getdate(); 
    if ($waktu <= 10) 
    { 
        echo "Selamat Pagi"; 
        } 
        elseif ($waktu <= 15) 
        { 
            echo "Selamat Siang"; 
            } 
            elseif ($waktu <= 18) 
            { 
                echo "Selamat Sore"; 
            } 
            else 
            {
                echo "Selamat Malam"; 
            } 
    ?>
</body>

</html>