<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    
</head>
<body>
    <h2>Form Nilai Mahasiswa</h2>
        <form action="" method="POST">

            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama :</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
            </div>
            <div class="mb-3 row">
                <label for="nilai" class="col-sm-2 col-form-label">Nilai :</label>
                <input type="text" class="form-control" name="nilai" id="nilai">
            </div>
            <div class="mb-3 row">
                <label for="matakuliah" class="col-sm-2 col-form-label">Mata Kuliah :</label>
                <select name="matakuliah">
                <option value=""></option>
                <option value="bahasa inggris">bahasa inggris</option>
                <option value="Basis data">Basis Data </option>
                <option value="pemrograman web">Pemrograman Web</option>
            </select>
            </div>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Include file class_nilaimahasiswa.php
    include 'class_nilaimahasiswa.php';

    // Jika form disubmit
    if (isset($_POST['submit'])) {
        // Mengambil nilai dari form
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $matakuliah = $_POST['matakuliah'];

        // Membuat objek NilaiMahasiswa
        $mahasiswa = new NilaiMahasiswa($nama, $nilai, $matakuliah);

        // Menampilkan hasil
        echo "<h2>Hasil:</h2>";
        echo "Nama: " . $mahasiswa->getNama() . "<br>";
        echo "Nilai: " . $mahasiswa->getNilai() . "<br>";
        echo "matakuliah: " .$mahasiswa->getMatakuliah() ."<br>";
        echo "Hasil Ujian: " . $mahasiswa->getHasil() . "<br>";
        echo "Grade: " . $mahasiswa->grade() . "<br>";
    }
    ?>
</body>
</html>
