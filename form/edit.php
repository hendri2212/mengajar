<?php
    include_once "./database/connection.php";
    $id = $_GET["id"];
    $query = $conn->query(
        "SELECT a.*, GROUP_CONCAT(c.hoby_name SEPARATOR ', ') hoby
        FROM user a
        LEFT JOIN user_hoby b ON a.id = b.user_id
        LEFT JOIN hoby c ON b.hoby_id = c.id
        WHERE a.id=$id");
    $result = $query->fetch_object();
    $hoby = explode(', ', $result->hoby ?? '');
?>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-black text-white mb-2">
        <div class="container">
            <h2>Edit Data Siswa</h2>
        </div>
    </nav>
    <div class="container">
        <div class="col-6">
            <form action="penerima.php" method="POST" enctype="multipart/form-data">
                <div class="mb-2">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required value="<?= $result->full_name ?>">
                </div>

                <div class="mb-2">
                    <input type="radio" name="jenis" value="Laki-laki" class="form-check-input" style="margin-right: 10px" <?= $result->gender == 'male' ? 'checked' : '' ?> required>Pria <br>
                    <input type="radio" name="jenis" value="Wanita" class="form-check-input" style="margin-right: 10px" <?= $result->gender == 'female' ? 'checked' : '' ?> required>Wanita
                </div>

                <div class="mb-2">
                    <select name="agama" required class="form-control">
                        <option value="">----- Pilih Agama -----</option>
                        <option value="Islam" <?= $result->religion == 'Islam' ? 'selected' : '' ?>>Islam</option>
                        <option value="Kristen" <?= $result->religion == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                        <option value="Hindu" <?= $result->religion == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                        <option value="Budha" <?= $result->religion == 'Budha' ? 'selected' : '' ?>>Budha</option>
                    </select>
                </div>

                <div class="mb-2">
                    <input type="checkbox" name="hobi[]" value="Renang" class="form-check-input" style="margin-right: 10px" <?= in_array('Renang', $hoby) ? 'checked' : '' ?>>Renang<br>
                    <input type="checkbox" name="hobi[]" value="Bola Voli" class="form-check-input" style="margin-right: 10px" <?= in_array('Bola Voli', $hoby) ? 'checked' : '' ?>>Bola Voli<br>
                    <input type="checkbox" name="hobi[]" value="Sepak Bola" class="form-check-input" style="margin-right: 10px" <?= in_array('Sepak Bola', $hoby) ? 'checked' : '' ?>>Sepak Bola<br>
                    <input type="checkbox" name="hobi[]" value="Sepeda" class="form-check-input" style="margin-right: 10px" <?= in_array('Sepeda', $hoby) ? 'checked' : '' ?>>Sepeda<br>
                    <input type="checkbox" name="hobi[]" value="Badminton" class="form-check-input" style="margin-right: 10px" <?= in_array('Badminton', $hoby) ? 'checked' : '' ?>>Badminton
                </div>
                <div class="mb-2">
                    <input type="file" name="file" accept="image/*" class="form-control">
                </div>
                <input type="submit" value="Daftar" class="btn btn-success float-end">
            </form>
        </div>
    </div>
</body>
</html>