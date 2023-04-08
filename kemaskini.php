<?php
    include("./config.php");
    $id_pesakit = $_GET['id_pesakit'];
    
    $query = mysqli_query($connect, "SELECT * FROM pesakit WHERE id_pesakit='$id_pesakit'");
    $row = mysqli_fetch_array($query);
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kemaskini</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./src/assets/css/main.css">
</head>
<body>
    <center>
        <div class="form pt-4">
            <form class="form-kemaskini" method="post">
                <p class="text-black">Id Pesakit : <?php echo $id_pesakit ?></p>
                <p class="text-black">Nama <input type="text" value="<?php echo $row['nama_pesakit'] ?>" name="nama_pesakit"></p>
                <p class="text-black">Alamat <input type="text" value="<?php echo $row['alamat'] ?>" name="alamat"></p>
                <p class="text-black">Suhu <input type="text" value="<?php echo $row['suhu'] ?>" name="suhu_pesakit"></p>
                <p class="text-black">Tarikh <input type="date" value="<?php echo $row['tarikh'] ?>"  name="tarikh"></p>
                <p class="text-black">Catatan <input type="text" value="<?php echo $row['catatan'] ?>" name="catatan"></p>
                <input class="bg-blue-900 text-white br-1" value="kemaskini" name="kemaskini" type="submit">
            </form>
        </div>
    </center>
</body>
</html>

<?php
    include('config.php');

    if(isset ($_POST['kemaskini'])){
        $id_pesakit = $_GET["id_pesakit"];
        $nama_pesakit = $_POST["nama_pesakit"];
        $alamat = $_POST["alamat"];
        $suhu_pesakit = $_POST["suhu_pesakit"];
        $tarikh = $_POST["tarikh"];
        $catatan = $_POST["catatan"];

        $kemaskini = mysqli_query($connect, "UPDATE pesakit SET id_pesakit ='$id_pesakit', nama_pesakit ='$nama_pesakit', alamat ='$alamat', suhu ='$suhu_pesakit', tarikh ='$tarikh', catatan ='$catatan' WHERE id_pesakit = '$id_pesakit'");
        header('location:index.php');

    }
?>
