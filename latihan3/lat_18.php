<html>

<head>
    <title>Struktur kendali dengan SWITCH</title>
</head>

<body>
    <?php 
    $english_day = date("l");
    switch ($english_day) 
    { 
        case "Monday": 
            $indonesian = "Senin"; 
            break; 
        case "Tuesday": 
            $indonesian = "Selasa"; 
            break; 
        case "Wednesday": 
            $indonesian = "Rabu"; 
            break; 
        case "Thursday": 
            $indonesian = "Kamis"; 
            break; 
        case "Friday":
            $indonesian = "Jumat"; 
            break; 
        case "Saturday": 
            $indonesian = "Sabtu"; 
            break; 
        Default:
            $indonesian = "Minggu";
        }
            echo "<h2>Hari ini adalah hari $indonesian</h2>"; 
            ?>
</body>

</html>