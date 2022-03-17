<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table, th, td {
            border: solid 1px black;
        }
    </style>
    <title>Praktikum104</title>
</head>
<body>
    <?php
        $hp_samsung = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover 5"];
    ?>
    <table>
        <th>Daftar Smartphone Samsung</th>
        <tr>
            <td><?=$hp_samsung[0];?></td>
        </tr>
        <tr>
            <td><?=$hp_samsung[1];?></td>
        </tr>
        <tr>
            <td><?=$hp_samsung[2];?></td>
        </tr>
        <tr>
            <td><?=$hp_samsung[3];?></td>
        </tr>
    </table>
    <hr>
    <table>
    <th>Daftar Smartphone Samsung</th>
    <?php
        for($i = 0; $i < 4; $i++) {
            echo "<tr>
                    <td>$hp_samsung[$i]</td>
                </tr>";
        };
    ?>
    </table>
</body>
</html>