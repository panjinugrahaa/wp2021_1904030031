<?php
require 'function.php';

if (isset($_POST['submit'])) {
    if (tambahmapel($_POST) > 0) {
        echo "
            <script>
            alert('data berhasil diinput..!');
            document.location.href= 'matpel.php'
            </script>
            ";
    } else {
        echo "
            <script>
            alert('data gagal diinput..!');
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

    <title>Tambah</title>
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
                        <a class="nav-link active" aria-current="page" href="tambahmapel.php">Input Mata Pelajaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matpel.php">Mata Pelajaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="row mt-5">
        <div class="col-md-10 p-5 pt-5">
            <!-- konten -->
            <h3><i class="fas fa-users"></i>Input Mata Pelajaran </h3>
            <hr>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="id">id</label>
                    <input type="text" class="form-control" id="id" name="id" autofocus required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <input type="text" class="form-control" id="mapel" name="mapel" autofocus required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan" autofocus required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="guru">guru</label>
                    <input type="text" class="form-control" id="guru" name="guru" autofocus required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="kelas">kelas</label>
                    <input type="text" class="form-control" id="kelas" name="kelas" autofocus required autocomplete="off">
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Input Data</button>
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