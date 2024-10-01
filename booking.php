<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grand Hotel - Reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="booking-page">
    <div class="container">
        <header>
            <div class="navbar">
                <ul>
                    <li><a href="index.php">INDONESIA</a></li>
                    <li><a href="index.php#rooms">ROOM & PRICING</a></li>
                    <li><a href="booking.php">RESERVATION</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
                <div class="login-register">
                    <a href="login.php">LOGIN</a> | <a href="register.php">REGISTER</a>
                </div>
            </div>
        </header>

        <section id="reservation">
            <form>
                <h2>Formulir Reservasi</h2>
                <label for="name">Nama Pemesan:</label>
                <input type="text" id="name" name="name" required><br>

                <label>Jenis Kelamin:</label>
                <div class="radio-group">
                    <input type="radio" id="male" name="gender" value="Laki-laki">
                    <label for="male">Laki-laki</label>
                    <input type="radio" id="female" name="gender" value="Perempuan">
                    <label for="female">Perempuan</label>
                </div><br>

                <label for="id_number">Nomor Identitas:</label>
                <input type="text" id="id_number" name="id_number" required><br>

                <label for="room_type">Tipe Kamar:</label>
                <select id="room_type" name="room_type" required onchange="updatePrice()">
                    <option value="">Pilih Tipe Kamar</option>
                    <option value="standard">Standard</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="executive">Executive</option>
                </select><br>

                <label for="price">Harga:</label>
                <input type="text" id="price" name="price" readonly><br>

                <label for="checkin">Tanggal Pesan:</label>
                <input type="date" id="checkin" name="checkin" required><br>

                <label for="duration">Durasi Menginap (malam):</label>
                <input type="number" id="duration" name="duration" required><br>

                <label for="breakfast">Termasuk Breakfast:</label>
                <div class="checkbox-group">
                    <input type="checkbox" id="breakfast" name="breakfast">
                    <label for="breakfast">Ya</label>
                </div><br>

                <label for="total">Total Bayar:</label>
                <input type="text" id="total" name="total" readonly><br>

                <button type="button" onclick="calculateTotal()">Hitung Total Bayar</button>
                <input type="submit" value="Simpan">
                <input type="reset" value="Cancel">
            </form>
        </section>
    </div>

    <script>
        function updatePrice() {
            const roomType = document.getElementById('room_type').value;
            let price = 0;

            switch (roomType) {
                case 'standard':
                    price = 500000;
                    break;
                case 'deluxe':
                    price = 750000;
                    break;
                case 'executive':
                    price = 1000000;
                    break;
                default:
                    price = 0;
            }

            document.getElementById('price').value = price.toLocaleString('id-ID');
            calculateTotal(); 
        }

        function calculateTotal() {
            const price = parseInt(document.getElementById('price').value.replace(/\./g, '')) || 0;
            const duration = parseInt(document.getElementById('duration').value) || 0;
            let total = price * duration;

            if (duration > 3) {
                total *= 0.9;
            }

            if (document.getElementById('breakfast').checked) {
                total += 80000;
            }

            document.getElementById('total').value = total.toLocaleString('id-ID');
        }
    </script>
</body>
</html>
