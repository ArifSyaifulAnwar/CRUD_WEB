<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM booking WHERE id_booking = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Booking tidak ditemukan.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_booking = $_POST['id_booking'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $tgl_penggunaan = $_POST['tgl_penggunaan'];
    $jam_mulai = $_POST['jam_mulai'];
    $jam_selesai = $_POST['jam_selesai'];

    $sql_update = "UPDATE booking SET nama_pemesan = ?, no_telepon = ?, email = ?, tanggal_penggunaan = ?, jam_mulai = ?, jam_selesai = ? WHERE id_booking = ?";
    $stmt_update = $conn->prepare($sql_update);
    $stmt_update->bind_param("ssssssi", $nama, $no_telp, $email, $tgl_penggunaan, $jam_mulai, $jam_selesai, $id_booking);

    if ($stmt_update->execute()) {
        echo "<script>
                alert('Update berhasil!');
                window.location.href = 'TabelBookingRuangan.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $stmt_update->error;
    }

    $stmt_update->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Booking Ruangan</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="TabelBookingRuangan.php">Tabel Booking Ruangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="simpan_booking.php">Menambah Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container py-5">
        <h2 class="text-center mb-4">Edit Booking</h2>
        <form action="edit_booking.php" method="POST">
            <div class="mb-3">
                <label for="id_booking" class="form-label">ID Booking</label>
                <input type="text" class="form-control" id="id_booking" name="id_booking" value="<?php echo $row['id_booking']; ?>" readonly>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemesan</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama_pemesan']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">Nomor Telepon</label>
                <input type="tel" class="form-control" id="no_telp" name="no_telp" value="<?php echo $row['no_telepon']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="tgl_penggunaan" class="form-label">Tanggal Penggunaan Ruangan</label>
                <input type="date" class="form-control" id="tgl_penggunaan" name="tgl_penggunaan" value="<?php echo $row['tanggal_penggunaan']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam_mulai" class="form-label">Jam Mulai</label>
                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" value="<?php echo $row['jam_mulai']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="jam_selesai" class="form-label">Jam Selesai</label>
                <input type="time" class="form-control" id="jam_selesai" name="jam_selesai" value="<?php echo $row['jam_selesai']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update Booking</button>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
