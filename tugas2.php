<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka1 = 6;
    $angka2 = 5;

    $akhirtambah = $angka1 + $angka2;
    $akhirkurang = $angka1 - $angka2;
    $akhirkali = $angka1 * $angka2;
    $akhirbagi = $angka1 / $angka2;
    ?>
    <table border="10" width=100% a>
            <tr>
                <th>  Operasi </th>
                <th>   Hasil  </th>
            </tr>
            
            <tr align="center">
                <td><?php echo $angka1."\n+\n".$angka2 ?></td>
                <td><?php echo $akhirtambah ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $angka1."\n-\n".$angka2 ?></td>
                <td><?php echo $akhirkurang ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $angka1."\n*\n".$angka2 ?></td>
                <td><?php echo $akhirkali ?></td>
            </tr>
            <tr align="center">
                <td><?php echo $angka1."\n/\n".$angka2 ?></td>
                <td><?php echo $akhirbagi ?></td>
            </tr>
            
        </table>
</body>
</html>