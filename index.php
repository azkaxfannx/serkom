<?php 
    require('koneksi.php');

    $randomIPK = rand(1000,3999);
    $decIPK = $randomIPK / 1000;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pendaftaran Beasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid justify-content-center">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><button type="button"
                            class="btn btn-outline-primary">Daftar</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ajuan.php"><button type="button"
                            class="btn btn-outline-primary">Ajuan</button></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list.php"><button type="button" class="btn btn-outline-primary">List
                            Mahasiswa</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    <form action="simpan.php" method="POST">
        <div style="padding-left: 1%; padding-right: 1%;">
            <label for="nama" class="form-label">Masukkan Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
            <br>
            <label for="email" class="form-label">Masukkan Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
            <br>
            <label for="nim" class="form-label">Masukkan NIM</label>
            <div style="padding-left: 0%; padding-right: 90%; padding-bottom: 0.5%; align-content: left;">
                <input type="number" class="form-control" name="nim" id="nim" required>
            </div>
            <label for="no_hp" class="form-label">No. HP</label>
            <input type="number" class="form-control" name="no_hp" id="no_hp" required>
            <br>
            <label for="semester" class="form-label">Semester Saat Ini</label>
            <select class="form-control" name="semester" id="semester" required>
                <option disabled selected>-- Pilih --</option>
                <option value="1">1 (Satu)</option>
                <option value="2">2 (Dua)</option>
                <option value="3">3 (Tiga)</option>
                <option value="4">4 (Empat)</option>
                <option value="5">5 (Lima)</option>
                <option value="6">6 (Enam)</option>
                <option value="7">7 (Tujuh)</option>
                <option value="8">8 (Delapan)</option>
            </select>
            <br>
            <label for="ipk" class="form-label">IPK Terakhir</label>
            <input type="number" class="form-control" name="ipk" id="ipk"
                <?= (number_format($decIPK, 2) < 3) ? "disabled" : "readonly"; ?>
                placeholder="<?= number_format($decIPK, 2); ?>" value="<?= number_format($decIPK, 2); ?>">
            <br>
            <label for="beasiswa" class="form-label">Pilihan Beasiswa</label>
            <select class="form-control" name="beasiswa" id="beasiswa"
                <?= (number_format($decIPK, 2) < 3) ? "disabled" : ""; ?>>
                <option disabled selected>-- Pilih --</option>
                <option value="Akademik">Akademik</option>
                <option value="Non Akademik">Non Akademik</option>
            </select>
            <br>
            <label for="berkas_syarat" class="form-label">Unggah Berkas Syarat</label>
            <input type="file" class="form-control" name="berkas_syarat" id="berkas_syarat"
                <?= (number_format($decIPK, 2) < 3) ? "disabled" : ""; ?>>
            <br>
            <button type="submit" name="daftar" class="btn btn-success" onclick="Validate()">Daftar</button>
            <script>
            function Validate() {
                if (confirm('Sudah memeriksa kembali data Anda?')) {
                    window.location().href = 'simpan.php';
                }
            }
            </script>
    </form>
    <a href="ajuan.php"><button type="button" class="btn btn-danger">Batal</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>