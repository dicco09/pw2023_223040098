<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid</title>
    <style>
        td {
            width: 25px;
            height: 25px;
            background-color: salmon;
            border: 1px solid black;
            text-align: center;
        }
    </style>    
</head>
<body>
    <table cellpadding="10" cellspacing="0">
        <?php 
        $baris = 1;
        for ($i = 10; $i >=$baris; $i--) {
            echo "<tr>";
            for ($kolom = 1; $kolom <= $i; $kolom++){
                echo "<td>$kolom</td>";
            }
            echo "</tr>";
        } 
        ?>
    </table>
</body>
</html>