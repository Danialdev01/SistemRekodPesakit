<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Danialdev01/EasySassTemplate@CDN-READY/src/assets/css/main.css">
    <link rel="stylesheet" href="./src/assets/css/main.css">
    <link rel="stylesheet" href="./external.css">
    <title>Tambah Pesakit</title>
</head>
<style>
    /* .flex{
        display: flex;
    } */
</style>
<body>
    <center>
        <br>
        <div class="container">
            <h1>Tambah Pesakit</h1>
            <form class="pb-2" method="POST">
                <p>Id Pesakit <input type="text" name="id_pesakit" required></p>
                <p>Nama Pesakit <input type="text" name="nama_pesakit" required></p>
                <p>Alamat Pesakit <input type="text" name="alamat" required></p>
                <p>Suhu Pesakit <input type="text" name="suhu_pesakit" required></p>
                <p>Tarikh Pesakit <input type="date" name="tarikh" required></p>
                <p>Catatan Pesakit <input type="text" name="catatan" required></p>
                <br>
                <input class="input-button" type="submit" value="hantar" name="hantar">
            </form>
        </div>
    </center>
    <?php
        include('config.php');

        if(isset($_POST['hantar'])){
            $id_pesakit = $_POST["id_pesakit"];
            $nama_pesakit = $_POST["nama_pesakit"];
            $alamat = $_POST["alamat"];
            $suhu_pesakit = $_POST["suhu_pesakit"];
            $tarikh = $_POST["tarikh"];
            $catatan = $_POST["catatan"];

            $add = mysqli_query($connect, "INSERT INTO pesakit VALUES('$id_pesakit', '$nama_pesakit', '$alamat', '$suhu_pesakit', '$tarikh', '$catatan')");
            header('Location:index.php');
        }
    ?>
</body>
</html>