<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
        $numbers =[];
        $min = 1;
        $max = 50;
        while (count($numbers) <= 15) {
            $number = rand($min, $max);

            if (!in_array($number, $numbers)) {
                $numbers[] = $number;
            }
        }

        var_dump($numbers);

    ?>
</head>
<body>
    
</body>
</html>