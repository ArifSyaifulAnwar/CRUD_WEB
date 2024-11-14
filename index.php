<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Ruangan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles */
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
        .card {
            border: none;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }
        .footer {
            background-color: #343a40;
            color: white;
        }
        .footer p {
            margin: 0;
        }
        .img-size {
            width: 300px;  /* Set ukuran lebar yang sama */
            height: 300px; /* Set ukuran tinggi yang sama */
            object-fit: cover; /* Menjaga gambar tetap proporsional dalam batas */
        }

    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Booking Ruangan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="TabelBookingRuangan.php">Tabel Booking Ruangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="simpan_booking.php">Menambah Bookingn</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section text-center">
        <div class="container">
            <h1>Selamat Datang di Sistem Booking Ruangan</h1>
            <p>Layanan pemesanan ruangan mudah dan cepat. Temukan ruang yang sesuai dengan kebutuhan Anda.</p>
            <a href="TabelBookingRuangan.php" class="btn btn-lg btn-light mt-4">Pesan Sekarang</a>
        </div>
    </section>

    <!-- Information Section -->
        <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Layanan Kami</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow-sm text-center p-4">
                        <div class="mb-3">
                            <img src="asset/images/image.png" alt="Icon Ruang Rapat" class="img-fluid img-size">
                        </div>
                        <h5 class="card-title">Ruang Rapat</h5>
                        <p class="card-text">Ruang rapat yang nyaman untuk kebutuhan bisnis Anda.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm text-center p-4">
                        <div class="mb-3">
                            <img src="asset/images/image copy.png" alt="Icon Ruang Acara" class="img-fluid img-size">
                        </div>
                        <h5 class="card-title">Ruang Acara</h5>
                        <p class="card-text">Ruang yang luas dan dapat disesuaikan untuk berbagai acara.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm text-center p-4">
                        <div class="mb-3">
                            <img src="asset/images/image copy 2.png" alt="Icon Ruang Kerja Bersama" class="img-fluid img-size">
                        </div>
                        <h5 class="card-title">Ruang Kerja Bersama</h5>
                        <p class="card-text">Area kerja bersama untuk kolaborasi yang produktif.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="footer py-4 text-center">
        <div class="container">
            <p>&copy; 2023 Sistem Booking Ruangan. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
