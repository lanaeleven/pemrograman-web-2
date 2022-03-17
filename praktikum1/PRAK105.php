<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: solid 1px black;
        }
        th {
            background-color: red;
        }
    </style>
</head>
<body>
    <?php
        $hp_samsung = ["s22"=>"Samsung Galaxy S22", "s22+"=>"Samsung Galaxy S22+", "a03"=>"Samsung Galaxy A03", "x5"=>"Samsung Galaxy Xcover 5"];
    ?>
    <table>
        <th><h2>Daftar Smartphone Samsung</h2></th>
        <tr>
            <td><?=$hp_samsung["s22"];?></td>
        </tr>
        <tr>
            <td><?=$hp_samsung["s22+"];?></td>
        </tr>
        <tr>
            <td><?=$hp_samsung["a03"];?></td>
        </tr>
        <tr>
            <td><?=$hp_samsung["x5"];?></td>
        </tr>
    </table>
</body>
</html>