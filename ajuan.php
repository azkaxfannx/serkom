<?php 
    require('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid justify-content-center">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><button type="button" class="btn btn-outline-primary">Daftar</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ajuan.php"><button type="button" class="btn btn-outline-primary">Ajuan</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="list.php"><button type="button" class="btn btn-outline-primary">List Mahasiswa</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<body>
    <div style="padding-left: 3%; padding-right: 3%;">
        <table class="table table table-striped">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Email</th>
            <th scope="col">No. HP</th>
            <th scope="col">Semester Saat Ini</th>
            <th scope="col">IPK Terakhir</th>
            <th scope="col">Pilihan Beasiswa</th>
            <th scope="col">Berkas Syarat</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;

                $sql = "SELECT * FROM beasiswa_pending";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($data = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?= $no++ . '.'; ?></td>
                        <td><?= $data['nama_mhs'] ?></td>
                        <td><?= $data['nim'] ?></td>
                        <td><?= $data['email'] ?></td>
                        <td><?= $data['no_hp'] ?></td>
                        <td><?= $data['smt'] ?></td>
                        <td><?= $data['ipk_terakhir'] ?></td>
                        <td><?= $data['pilihan_beasiswa'] ?></td>
                        <td><?= $data['berkas_syarat'] ?></td>
                    </tr>
                    <?php
                    }
                } else {?>
                    <td colspan="9" style="text-align: center;">Belum Ada Data Ajuan!</td>
                <?php 
                }
                    ?>
        </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>