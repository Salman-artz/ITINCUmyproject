
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Macam Macam Array Pada PHP</h1>

    <p>1 . Indexed Array</p>
    <p>indexed array adalah Suatu array dengan index numeric dimana value atau nilainya disimpan secara liniear.</p>
    <?php
    $anakkamar = array("Putra","Salman","Alfarizy");
    echo "Anak kamar 14 Faraby yang pertama bernama ".$anakkamar[0];
    echo "<br>Anak kamar 14 Faraby yang kedua bernama ".$anakkamar[1];
    echo "<br>Anak kamar 14 Faraby yang ketiga bernama ".$anakkamar[2];
    ?>
    <p>2. Associative Arrays</p>
    <p>Associative Arrays adalah  Suatu array dengan index string dimana value nya tidak disimpan secara linear, melainkan dengan memberikan key tertentu.</p>
    <?php
    $nilai = array("Putra"=>"90","Salman"=>"95","Alfarizy"=>"100");
    echo "NIlai Putra adalah ".$nilai["Putra"]."<br>";
    echo "NIlai Salman adalah ".$nilai["Salman"]."<br>";
    echo "NIlai Alfarizy adalah ".$nilai["Alfarizy"];
    ?>
    <p>3. Multidimensional Arrays</p>
    <p>Multidimensional arrays adalah array yang menyimpan array lain pada setiap indeks, bukan elemen tunggal. Dengan kata lain, kita dapat mendefinisikan array multi dimensi sebagai array dari suatu array.</p>
    <?php
    $mahasiswas = [[ 'nama' => 'Putra','alamat' => 'Kediri','tanggal_lahir' => '31 Mei 2004','umur' => 218],['nama' => 'Salman','alamat' => 'Iridek','tanggal_lahir' => '31 Februari 1999','umur' => 99,], ];
    foreach ($mahasiswas as $mahasiswa){     
        echo "Nama: ".$mahasiswa['nama']."<br>";
        echo "Alamat: ".$mahasiswa['alamat']."<br>";
        echo "Tanggal Lahir: ".$mahasiswa['tanggal_lahir']."<br>";
        echo "Umur: ".$mahasiswa['umur']."<br>";
     }
        

    ?>
</body>
</html>