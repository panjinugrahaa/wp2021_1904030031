<?php
require 'function.php';


$id = $_GET['id'];
$guruu = query("SELECT * FROM guru WHERE id = $id");
if (isset($_POST['edit'])) {
    if (editt($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil diedit..!');
            document.location.href= 'guruu.php'
            </script>
            ";
    } else {
        echo "
            <script>
            alert('data gagal diedit..!');
            </script>
            ";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="tema/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- font -->
    <link rel="stylesheet" href="tema/fontawesome/css/all.min.css">

    <title>Edit</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-dark bg-dark">
       
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">SMKN 2 KAB. TANGERANG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="tambah.php">Input guru</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="guruu.php">Data Guru</a>
                    </li>
                </ul>
                </div>
            </div>
         </nav>

    <div class="row mt-5">
        <div class="col-md-10 p-5 pt-5">
            <!-- konten -->
            <h3><i class="fas fa-users"></i>Edit data GURU</h3>
            <hr>
            <form method="POST" action="">
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" id="id" name="id" value="<?= $guruu['id'] ?>" autofocus required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $guruu['nama'] ?>" autofocus required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="tempat">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control" id="tempat" name="tempat" value="<?= $guruu['tempat'] ?>" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="mata_pelajaran">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="<?= $guruu['mata_pelajaran'] ?>" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $guruu['alamat'] ?>" required autocomplete="off">
                </div>

                <div class="form-group">
                    <label for="jenis_kelamin">jenis kelamin</label>
                    <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?= $guruu['jenis_kelamin'] ?>" required autocomplete="off">

                    <!-- <select class="form-select" aria-label="jenis_kelamin" id="jenis_kelamin" name="jenis_kelamin" value="" required autocomplete="off">
                        <option selected>Pilih salah satu</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select> -->
                </div>
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control" id="agama" name="agama" value="<?= $guruu['agama'] ?>" required autocomplete="off">
                    <!-- <select class="form-select" aria-label="agama" id="agama" name="agama" value="" required autocomplete="off">
                        <option selected>Pilih salah satu</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Protestan">Protestan</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddha">Buddha</option>
                    </select> -->
                </div>

                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" class="form-control" id="foto" name="foto" value="<?= $guruu['foto'] ?>" required>
                </div>

                <button type="submit" class="btn btn-primary" name="edit">Input Data</button>
            </form>


        </div>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>