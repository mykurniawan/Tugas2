<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $password = PASSWORD_HASH($_POST['password'], PASSWORD_DEFAULT);

    if (empty($nama)) {
        echo "<script>alert('nama mahasiswa tidak boleh kosong'); location.href='tambahMhs.php'</script>";
    } elseif (empty($nim)) {
        echo "<script>alert('nama nim tidak boleh kosong'); location.href='tambahMhs.php'</script>";
    } else {
        include "koneksi.php";
        $insert = mysqli_query($conn, "INSERT INTO t_mahasiswa (nama, nim, alamat, username, password)
        value (' " . $nama . " ',' " . $nim . " ',' " . $alamat . " ','" . $username . "','" . $password . "')") or die(mysqli_error($conn));

        if ($insert) {
            echo "<script>alert('Sukses menambahkan data mahasiswa');location.href='dataMhs.php'</script>";
        } else {
            echo "<script>alert('Gagal menambahkan data mahasiswa');location.href='tambahMhs.php'</script>";
        }
    }
}
