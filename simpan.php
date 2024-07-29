<?php 
    require('koneksi.php');

    if(isset($_POST['daftar'])) {
        if(!empty($_POST['ipk']) && !empty($_POST['beasiswa'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $nim = $_POST['nim'];
            $no_hp = $_POST['no_hp'];
            $semester = $_POST['semester'];
            $ipk = $_POST['ipk'];
            $beasiswa = $_POST['beasiswa'];

            $nama_foto = $_FILES['berkas_syarat']['name'];
            $explode_foto = explode('.',$nama_foto);
            $ekstensi_foto = end($explode_foto);
            $tmp_foto = $_FILES['berkas_syarat']['tmp_name'];
            $ekstensi = array('pdf','jpg','zip');
            $directory_foto = 'assets/';

            if(in_array($ekstensi_foto, $ekstensi)){
                move_uploaded_file($tmp_foto,$directory_foto.$nama_foto);
            }

            $sql = "INSERT INTO beasiswa_pending VALUES ('$nama', '$email', '$nim', '$no_hp', '$semester', '$ipk', '$beasiswa', '$nama_foto')";

            if($conn->query($sql)){
                header('location: index.php');
            } else {?>
<script>
alert('Gagal menambahkan data!');
</script>
<?php
            }
        }
    }
?>