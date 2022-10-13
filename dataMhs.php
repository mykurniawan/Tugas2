<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Perpustakaan</title>
</head>

<body>
    <div class="container">
        <h3 style="text-align: center; padding-top: 20px;">Data Mahasiswa</h3> <br>
        <p style="text-align:center">
            <!-- tombol tambahMhs.php  -->
            <a href="tambahMhs.php" class="btn btn-primary">Tambah Mahasiswa</a>
        </p>
        <br>
        <br>
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>NIM</th>
                    <th>ALAMAT</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_mahasiswa = mysqli_query($conn, "SELECT * FROM t_mahasiswa");
                $no = 0;
                while ($data_mahasiswa = mysqli_fetch_array($qry_mahasiswa)) {
                    $no++; ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data_mahasiswa['nama'] ?></td>
                        <td><?= $data_mahasiswa['nim'] ?></td>
                        <td><?= $data_mahasiswa['alamat'] ?></td>
                        <td><?= $data_mahasiswa['username'] ?></td>
                        <td><?= $data_mahasiswa['password'] ?></td>
                        <td>
                            <a href="edit.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" class="btn btn-success">Edit</a> |
                            <a href="hapus.php?id_mahasiswa= <?= $data_mahasiswa['id_mahasiswa'] ?>" onclick="return confirm ('Apakah anda yakin menghapus data ini')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
