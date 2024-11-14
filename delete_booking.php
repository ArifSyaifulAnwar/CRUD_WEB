<?php
include('koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM booking WHERE id_booking = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {

        echo "<script>
                alert('Booking berhasil dihapus!');
                window.location.href = 'TabelBookingRuangan.php';
              </script>";
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
