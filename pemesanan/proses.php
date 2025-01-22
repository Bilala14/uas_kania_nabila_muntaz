<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_pemesanan = $_POST['id_pemesanan'];
$tanggal = $_POST['tanggal_checkin'];
$tanggal = $_POST['tanggal_Checkout'];
$tamu_id = $_POST['tamu_id'];
$bukti_pembayaran = $_POST['bukti_pembayaran'];

#3. menulis query
$simpan = "INSERT INTO tb_pemesanan (id_pemesanan,tanggal_checkin,taggal_checkout,tamu_id,bukti_pembayaran) VALUES ('$id_pemesanan','$tanggal_checkin',
'$tanggal_checkout','$tamu_id','$bukti_pembayaran')";

#4. jalankan query
$proses = mysqli_query($koneksi,$simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>