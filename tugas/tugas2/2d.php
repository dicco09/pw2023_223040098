<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid 2</title>
    <style>
        .hitam {
            width: 100px;
            height: 100px;
            background-color: black;
        }
        .putih {
            height: 100px;
            widht: 100px;
            backgroud-color: white;
        }
    </style>

</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 

        for ($line = 1; $line <= 5; $line++) {
            echo "<tr>";
            for ($column = 1; $column <= 5; $column++){
                $box = $line + $column;
                if ($box % 2 == 0) {
                    echo "<td class='hitam'></td>";
                } else {
                    echo "<td class='putih'></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>