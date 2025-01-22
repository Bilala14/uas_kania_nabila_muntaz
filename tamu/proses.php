<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_tamu = $_POST['id_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$no_identitas = $_POST['no_identitas'];


#3. menulis query
$simpan = "INSERT INTO tb_tamu (id_tamu,nm_tamu,no_identitas) VALUES ('$id_tamu','$nama_tamu',
'$no_identitas'";

#4. jalankan query
$proses = mysqli_query($koneksi,$simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>