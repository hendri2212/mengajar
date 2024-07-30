<html>
<head>
    <title>Form</title>
</head>
<body>
    <form action="penerima.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="nama" placeholder="Nama Lengkap" value="Hendri" required><br>
        <input type="radio" name="jenis" value="Laki-laki" checked required>Pria
        <input type="radio" name="jenis" value="Wanita" required>Wanita <br>
        <select name="agama" required>
            <option value="">----- Pilih Agama -----</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select><br>
        <input type="checkbox" name="hobi[]" value="Renang">Renang<br>
        <input type="checkbox" name="hobi[]" value="Bola Voli">Bola Voli<br>
        <input type="checkbox" name="hobi[]" value="Sepak Bola">Sepak Bola<br>
        <input type="checkbox" name="hobi[]" value="Sepeda">Sepeda<br>
        <input type="checkbox" name="hobi[]" value="Badminton">Badminton
        <br>
        <input type="file" name="file" accept="image/*">
        <input type="submit" value="Daftar">
    </form>
</body>
</html>