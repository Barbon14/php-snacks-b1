<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php

        $match = [
            'home' => 'Olimpia Milano',
            'away' => 'Cantù',
            'homePoints' => 55,
            'awayPoints' => 60
        ]
    ?>
</head>
<body>
    <p>
        <?php

            $keys = array_keys($match);
            for ($i = 0; $i < 2; $i++) {

                $key = $keys[$i];
                $value = $match[$key];

                echo $value;

                if ($i < 1) {
                    echo '-';
                };
            }

            echo ' | ';

            for ($i = 2; $i < 4; $i++) {
                
                $key = $keys[$i];
                $value = $match[$key];

                echo $value;

                if ($i < 3) {
                    echo '-';
                };
            }
        ?>    
    </p>
</body>
</html>