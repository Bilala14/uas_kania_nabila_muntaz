<?php
#1. koneksi ke database
include("../koneksi.php");

#2. ambil id yang akan disunting
$id_pemesanan = $_GET['id'];

#3. mengambil semua record data berdasarkan id yang dipilih
$ambil = "SELECT * FROM tb_pemesanan WHERE id_pemesanan='$id_pemesanan'";

#4. menjalankan query
$edit = mysqli_query($koneksi,$ambil);

#5. memisahkan record data berdasarkan kolom/field
$data = mysqli_fetch_array($edit)

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>
<body>
<?php 
    include_once('../navbar.php');
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-8 m-auto">
            <div class="card">
            <div class="card-header">
                <h3 class="float-start">Form Edit Data Pemesanan</h3>
                
            </div>
            <div class="card-body">
            <form action="update.php" method="post">
                <input type="hidden" name="id_pemesanan" value="<?=$data['id_pemesanan']?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Id Pemesanan</label>
                    <input type="text" value="<?=$data['id_pemesanan']?>" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Checkin</label>
                    <input type="date" value="<?=$data['tanggal_checkin']?>" name="tanggal" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Tanggal Checkout</label>
                    <input type="date" name="tanggal" value="<?=$data['tanggal_checkout']?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Id Tamu</label>
                    <input type="text" name="tamu_id" value="<?=$data['tamu_id']?>" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Bukti Pembayaran</label>
                    <input type="text" name="bukti_pembayaran" value="<?=$data['bukti_pembayaran']?>" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>
</html>