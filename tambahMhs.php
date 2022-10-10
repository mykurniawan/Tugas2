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
        <h3 style="text-align: center; padding-top: 20px;">Tambah Data Mahasiswa</h3>
        <form action="prosesTambahMhs.php" method="POST">
            Nama :
            <input type="text" name="nama" value="" class="form-control"> <br>
            NIM :
            <input type="text" name="nim" value="" class="form-control"> <br>
            Alamat :
            <input type="text" name="alamat" value="" class="form-control"> <br>
            Username :
            <input type="text" name="username" value="" class="form-control"> <br>
            Password :
            <input type="password" name="password" value="" class="form-control"> <br>

            <!-- button  -->
            <input type="submit" name="simpan" value="Tambah Mahasiswa" class="btn btn-primary">
            <!-- kembali  -->
            <a href="dataMhs.php" style="float: right;" class="btn btn-success">Kembali</a>
            <!-- kembali  -->
            <!-- button  -->
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
