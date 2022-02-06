<?php
require 'function.php';
$matpel = query("SELECT * FROM mata_pel");
if (isset($_POST['cari'])) {
  $matpel = caripel($_POST['keyword']);
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

  <title>MATA PELAJARAN</title>
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

    <div class="col-md-15 p-5 pt-2">
      <!-- konten -->
      <h3><i class="fas fa-users"></i>MATA PELAJARAN SMKN 2 KAB. TANGERANG</h3>
      <hr>
      <!-- pencarian data -->
      <form action="" method="POST">
        <input type="text" id="keyword" size="50" name="keyword" placeholder="masukan nama mapel" autocomplete="off">
        <button type="submit" class="btn btn-primary" name="cari">CARI</button>
      </form>
      <br>
      <hr>


      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Kelas</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>




        <?php if (empty($matpel)) : ?>
          <tr>
            <td colspan="4" class="alert alert-danger text-center" role="alert">
              <p>
                Mata Pelajaran tidak ditemukan
              </p>
            </td>
          </tr>
        <?php endif; ?>

        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($matpel as $mp) : ?>
            <tr>
              <th scope="row"><?php echo $no; ?></th>
              <td><?php echo $mp['mapel']; ?></td>
              <td><?php echo $mp['jurusan']; ?></td>
              <td><?php echo $mp['kelas']; ?></td>
              <td><a href="detailmapel.php?id=<?= $mp['id']; ?>" class="btn btn-warning" role="button">Detail</a></td>
            </tr>
            <?php $no++ ?>
          <?php endforeach ?>
        </tbody>
      </table>
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