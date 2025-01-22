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
$sunting = "UPDATE tb_pemesanan SET tanggal_checkin='$tanggal', tanggal_checkout='$tanggal', tamu_id='$tamu_id',
bukti_pembayaran='$bukti_pembayaran' WHERE id_pembayaran='$id_pemesanan'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>