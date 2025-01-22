<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$no_identitas = $_POST['no_identitas'];


#3. menulis query
$sunting = "UPDATE tb_tamu SET id_tamu='$id_tamu', nm_tamu='$nama_tamu', jabatan='$jabatan',
email='$email', no_hp='$no_hp' WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>