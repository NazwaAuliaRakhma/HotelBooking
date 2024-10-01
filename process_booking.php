<?php

$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "hotel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$gender = $_POST['gender'];
$id_number = $_POST['id_number'];
$room_type = $_POST['room_type'];
$price = str_replace('.', '', $_POST['price']);  
$total = str_replace('.', '', $_POST['total']);  
$checkin = $_POST['checkin'];
$duration = $_POST['duration'];
$breakfast = isset($_POST['breakfast']) ? 1 : 0;

$sql = "INSERT INTO bookings (name, gender, id_number, room_type, price, checkin, duration, breakfast, total)
        VALUES ('$name', '$gender', '$id_number', '$room_type', '$price', '$checkin', '$duration', '$breakfast', '$total')";

if ($conn->query($sql) === TRUE) {
    echo "<a href='index.php' style='text-decoration: none;'>
            <span style='font-size: 18px; vertical-align: middle;'>Kembali ke Menu Utama</span>
          </a><br><br>";

    echo "<h2>Booking berhasil disimpan!</h2>";

    echo "<table border='1' cellspacing='0' cellpadding='5'>
            <tr>
                <th>Nama Pemesan</th>
                <td>$name</td>
            </tr>
            <tr>
                <th>Nomor Identitas</th>
                <td>$id_number</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>$gender</td>
            </tr>
            <tr>
                <th>Tipe Kamar</th>
                <td>$room_type</td>
            </tr>
            <tr>
                <th>Durasi Penginapan</th>
                <td>$duration Hari</td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>Rp " . number_format($price, 0, ',', '.') . "</td>
            </tr>
            <tr>
                <th>Total Bayar</th>
                <td>Rp " . number_format($total, 0, ',', '.') . "</td>
            </tr>
        </table>";

    echo "<br><strong>Gambar Kamar:</strong><br>";
    switch ($room_type) {
        case 'standard':
            echo "<img src='image/standard.jpg' alt='Standard Room'>";
            break;
        case 'deluxe':
            echo "<img src='image/deluxe.jpg' alt='Deluxe Room'>";
            break;
        case 'executive':
            echo "<img src='image/executive.jpg' alt='Executive Room'>";
            break;
        default:
            echo "<img src='image/default_room.jpg' alt='Room'>"; 
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
