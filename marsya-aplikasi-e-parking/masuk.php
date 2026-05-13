<?php
include "config.php";

// Simpan data jika tombol ditekan
if (isset($_POST['simpan'])) {

    $plat  = $_POST['plat'];
    $jenis = $_POST['jenis'];
    $waktu_masuk = date("Y-m-d H:i:s");

    // Simpan ke database
    $stmt = $conn->prepare("INSERT INTO parkir (plat, jenis, waktu_masuk) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $plat, $jenis, $waktu_masuk);

    if ($stmt->execute()) {
        echo "<script>alert('Kendaraan masuk berhasil!'); window.location='masuk.php';</script>";
    } else {
        echo "Gagal menyimpan: " . $stmt->error;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Parkir Masuk</title>
</head>
<body>

<h2>Form Kendaraan Masuk</h2>

<form method="POST">
    <input type="text" name="plat" placeholder="Nomor Plat" required><br><br>

    <select name="jenis" required>
        <option value="">-- Pilih Jenis Kendaraan --</option>
        <option value="Motor">Motor</option>
        <option value="Mobil">Mobil</option>
    </select><br><br>

    <button type="submit" name="simpan">Masuk Parkir</button>
</form>

<hr>

<h3>Data Kendaraan Masuk</h3>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Plat</th>
        <th>Jenis</th>
        <th>Waktu Masuk</th>
    </tr>

<?php
$no = 1;
$data = mysqli_query($conn, "SELECT * FROM parkir WHERE waktu_keluar IS NULL ORDER BY id DESC");

while ($d = mysqli_fetch_assoc($data)) {
    echo "<tr>
            <td>$no</td>
            <td>{$d['plat']}</td>
            <td>{$d['jenis']}</td>
            <td>{$d['waktu_masuk']}</td>
          </tr>";
    $no++;
}
?>

</table>

</body>
</html>