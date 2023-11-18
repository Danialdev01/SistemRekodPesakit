<?php
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Rekod Pesakit</title>
    <link rel="manifest" href="/manifest.json" />
    <link rel="stylesheet" href="./src/assets/css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Danialdev01/EasySassTemplate@CDN-READY/src/assets/css/main.css">
</head>
<body>
    <div class="main-container">
        <center>
            <h2 class="white">Rekod Maklumat Pesakit.</h2>
        </center>
    </div>
    <center>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Id Pesakit</th>
                <th>Nama Pesakit</th>
                <th>Alamat</th>
                <th>Suhu</th>
                <th>Tarikh</th>
                <th>Catatan</th>
                <th>Padam</th>
            </tr>
            <?php
                $papar = mysqli_query($connect, "SELECT * FROM pesakit");
                // * id pesakit diclare lama 
                // <td>".$row['id_pesakit']."</td>
                while ($row = mysqli_fetch_array($papar)){
                    echo "
                        <tr>
                            <td>","<a class=\"id\" href=\"kemaskini.php?id_pesakit=".$row['id_pesakit']."\">".$row['id_pesakit']."</a></td>
                            <td>".$row['nama_pesakit']."</td>
                            <td>".$row['alamat']."</td>
                            <td>".$row['suhu']."</td>
                            <td>".$row['tarikh']."</td>
                            <td>".$row['catatan']."</td>
                            <td>","<a class=\"padam\" href=\"padam.php?id_pesakit=".$row['id_pesakit']."\">Padam</a></td>
                        </tr>
                    ";                   
                }
            ?>
        </table>
        <p><a href="tambah.php"><button class="white p-2">+ Tambah</button></a></p>
    </center>
    <button id="install">Install this app</button>
    <script src="/script.js"></script>
</body>
</html>
