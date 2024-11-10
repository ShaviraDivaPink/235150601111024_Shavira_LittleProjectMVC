<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>

<body>
    <h2>Register</h2>
    <form action="../register.php" method="POST">
        <label for="nama">Nama : </label>
        <input type="text" name="nama" placeholder="Nama" required>
        <br><br>
        <label for="nim">NIM : </label>
        <input type="text" name="nim" placeholder="NIM" required>
        <br><br>
        <label for="angkatan">Angkatan : </label>
        <input type="number" name="angkatan" placeholder="Angkatan" required>
        <br><br>
        <label for="jabatan">Jabatan : </label>
        <input type="text" name="jabatan" placeholder="Jabatan" required>
        <br><br>
        <label for="password">Password : </label>
        <input type="password" name="password" placeholder="Password" required>
        <br><br>
        <button type="submit">Registration</button>
    </form>
    <p>Already have an account? <a href="login_view.php">Login in here!</a></p>
</body>

</html>
