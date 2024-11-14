<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pemesan = $_POST['nama'];
    $no_telepon = $_POST['no_telp'];
    $email = $_POST['email'];
    $tanggal_booking = date('Y-m-d');
    $tanggal_penggunaan = $_POST['tgl_penggunaan'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];

    $sql = "INSERT INTO booking (nama_pemesan, no_telepon, email, tanggal_booking, tanggal_penggunaan, jam_mulai, jam_selesai) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssss", $nama_pemesan, $no_telepon, $email, $tanggal_booking, $tanggal_penggunaan, $jam_mulai, $jam_selesai);

    if ($stmt->execute()) {
        echo "<script>
                alert('Daftar booking telah ditambahkan!');
                window.location.href = 'TabelBookingRuangan.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Booking Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Booking Ruangan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="TabelBookingRuangan.php">Tabel Booking Ruangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="simpan_booking.php">Menambah Booking</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Tambah Booking -->
    <section id="add-booking" class="container py-5">
        <h2 class="text-center mb-4">Tambah Booking Ruangan</h2>
        <form action="simpan_booking.php" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="no_telp" name="no_telp" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="tgl_penggunaan" class="form-label">Tanggal Penggunaan Ruangan</label>
                <input type="date" class="form-control" id="tgl_penggunaan" name="tgl_penggunaan" required>
            </div>
            <div class="mb-3">
                <label for="jam_mulai" class="form-label">Jam Mulai</label>
                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
            </div>
            <div class="mb-3">
                <label for="jam_selesai" class="form-label">Jam Selesai</label>
                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Simpan Booking</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
