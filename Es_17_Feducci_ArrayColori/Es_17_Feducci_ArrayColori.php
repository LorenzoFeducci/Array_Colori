<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = rand(10, 20);
        for($i = 0; $i <= $num; $i++){
            $lista[$i] = $i;
        }
        $colori = array("red", "green", "blue", "yellow", "orange");

        $coloreCasuale;
        $stampaLista = "<ol>";
            for($k = 0; $k < $num; $k++){
                $coloreCasuale = rand(0, 4);
                echo "<li style='color: $colori[$coloreCasuale]'>"$num[k]"</li>";
            }
        $stampaLista = $stampaLista . "</ol>";
    ?>
</body>
</html>