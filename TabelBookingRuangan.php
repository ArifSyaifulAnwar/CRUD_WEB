<?php
include('koneksi.php');

$sql = "SELECT * FROM booking";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .navbar {
            background: linear-gradient(45deg, #007bff, #6f42c1);
        }
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('asset/images/header.png') no-repeat center center;
            background-size: cover;
            color: white;
            padding: 100px 0;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-top: 15px;
        }
        .footer {
            background-color: #343a40;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 10px 0;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
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
                        <a class="nav-link active" href="TabelBookingRuangan.php">Tabel Booking Ruangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="simpan_booking.php">Menambah Booking</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section text-center">
        <div class="container">
            <h1>Selamat Datang di Sistem Booking Ruangan</h1>
            <p>Layanan pemesanan ruangan mudah dan cepat. Temukan ruang yang sesuai dengan kebutuhan Anda.</p>
            <a href="simpan_booking.php" class="btn btn-lg btn-light mt-4">Pesan Sekarang</a>
        </div>
    </section>

    <section id="booking-table" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Daftar Booking Ruangan</h2>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>ID Booking</th>
                            <th>Nama Pemesan</th>
                            <th>No. Telepon</th>
                            <th>Email</th>
                            <th>Tanggal Booking</th>
                            <th>Tanggal Penggunaan</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row["id_booking"]; ?></td>
                                    <td><?php echo $row["nama_pemesan"]; ?></td>
                                    <td><?php echo $row["no_telepon"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["tanggal_booking"]; ?></td>
                                    <td><?php echo $row["tanggal_penggunaan"]; ?></td>
                                    <td><?php echo $row["jam_mulai"]; ?></td>
                                    <td><?php echo $row["jam_selesai"]; ?></td>
                                    <td>
                                        <a href="delete_booking.php?id=<?php echo $row['id_booking']; ?>" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Delete
                                        </a>
                                        <a href="edit_booking.php?id=<?php echo $row['id_booking']; ?>" class="btn btn-warning btn-sm">
                                            <i class="bi bi-pencil"></i> Update
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="9" class="text-center">Tidak ada daftar booking untuk saat ini</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>&copy; 2023 Sistem Booking Ruangan. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
