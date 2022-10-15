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
        echo 'Hello word, this is php file';

        $nama = 'Putra';
        echo "<br>Nama saya ".$nama;

        $angka1 = 6;
        $angka2 = "2";

        $akhir = $angka1 + $angka2;
        echo '<br>'.$akhir;
        ?>
        <ol type="I">
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
        </ol>
        <center>

            <h1>This is heading 1</h1>
            <h2>This is heading 2</h2>
            <h3>This is heading 3</h3>
            <h4>This is heading 4</h4>
            <h5>This is heading 5</h5>
            <h6>This is heading 6</h6>
            
            <p><b><i><u>ppppppppppp</u></i></b></p>
        </center>
        <a href="link.php">belajar</a>

        <table border="10">
            <tr>
                <th>No</th>
                <th>nama</th>
                <th>jenis kelamin</th>
                <th>Alamat</th>
            </tr>
            <tr>
                <td><?php echo $akhir ?></td>
                <td>Qolbi</td>
                <td>Perempuan</td>
                <td>malang</td>
            </tr>
        </table>
            
</body>
</html>