<!-- simpan_laporan.php -->

<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "laporan_penipuan");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$category = $_POST['category'];
$scam_link = $_POST['scam_link'];
$notes = $_POST['notes'];

// Proses upload gambar
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$image = basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Query untuk menyimpan data ke tabel
$sql = "INSERT INTO laporan (first_name, last_name, category, scam_link, notes, image)
VALUES ('$first_name', '$last_name', '$category', '$scam_link', '$notes', '$image')";

if (mysqli_query($conn, $sql)) {
    echo "Terimakasih atas laporannya! Silahkan kembali dan refresh halaman web";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
