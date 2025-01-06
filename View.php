<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "tugasdatabase";

// Koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil data dari tabel
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
</head>
<body>
    <h1>Data yang Dimasukkan</h1>

    <?php if ($result->num_rows > 0): ?>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>


                <tr>
                    <td><?php echo htmlspecialchars($row['Id']); ?></td>
                    <td><?php echo htmlspecialchars($row['Nama']); ?></td>
                    <td><?php echo htmlspecialchars($row['Email']); ?></td>
                </tr>

            <?php endwhile; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data yang tersedia.</p>
    <?php endif; ?>

    <?php $conn->close(); ?>
    
    <br>
    <a href="form.php">Kembali ke Form Input</a>

                

</body>
</html>