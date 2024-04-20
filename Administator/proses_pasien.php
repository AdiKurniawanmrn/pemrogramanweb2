
<?php
// Memanggil file koneksi database
require 'db_koneksi.php';

// Menangkap data yang dikirimkan melalui form
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$gender = $_POST['gender'];
$kelurahan_id = $_POST['kelurahan']; // Menggunakan kelurahan_id sesuai dengan data yang dikirimkan melalui form
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$data = [$kode, $nama, $tmp_lahir, $tgl_lahir, $gender, $kelurahan_id, $email, $alamat];

$_proses = $_POST['proses'];

if ($_POST['proses'] == 'simpan') {
    // Menggunakan kolom kelurahan_id dalam query
    $insertPasienSQL = "INSERT INTO pasien (kode, nama, tmp_lahir, tgl_lahir, gender, kelurahan_id, email, alamat) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $dbh->prepare($insertPasienSQL);
    $stmt->execute($data);
}
// Pastikan $_proses telah didefinisikan
if (isset($_proses)) {
    // Pastikan koneksi database ($dbh) telah tersedia
    if (isset($dbh)) {
        if ($_proses == "ubah") {
            // Pastikan semua nilai yang diperlukan telah diterima dari form
            if (isset($_POST['kode'], $_POST['nama'], $_POST['tmp_lahir'], $_POST['tgl_lahir'], $_POST['gender'], $_POST['kelurahan_id'], $_POST['email'], $_POST['alamat'], $_POST['pasien'])) {
                $data = [
                    $_POST['kode'],
                    $_POST['nama'],
                    $_POST['tmp_lahir'],
                    $_POST['tgl_lahir'],
                    $_POST['gender'],
                    $_POST['kelurahan_id'],
                    $_POST['email'],
                    $_POST['alamat'],
                    $_POST['pasien']
                ];
        
                $updatePasienSQL = "UPDATE pasien SET kode=?, nama=?, tmp_lahir=?, tgl_lahir=?, gender=?, kelurahan_id=?, email=?, alamat=? WHERE id=?";
                $stmt = $dbh->prepare($updatePasienSQL);
                $stmt->execute($data);
            } else {
                echo "Error: Data tidak lengkap.";
            }
        } else {
            // Pastikan $_GET['pasien'] telah di-set
            if (isset($_GET['pasien'])) {
                $pasien = $_GET['pasien'];   
            
                if ($_proses == "hapus") {
                    $deletePasienSQL = "DELETE FROM pasien WHERE id=?";
                    $stmt = $dbh->prepare($deletePasienSQL);
                    $stmt->execute([$pasien]);
                } else {    
                    echo "Error: Proses tidak valid.";
                }
            } 
        }
    } 
}


header("Location: ./data_pasien.php");
?>
