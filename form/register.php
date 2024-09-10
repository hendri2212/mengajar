<html>
<head>
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-black text-white mb-2">
        <div class="container">
            <!-- <a class="navbar-brand" href="#"> -->
                <!-- <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> -->
                <h2>Data Siswa</h2>
            <!-- </a> -->
        </div>
    </nav>
    <div class="container">
        <div class="col-6">
            <!-- <form action="penerima.php" method="POST" enctype="multipart/form-data" style="max-width: 600px; margin-left: auto; margin-right: auto"> -->
            <form action="penerima.php" method="POST" enctype="multipart/form-data">
                <div class="mb-2">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control" required>
                </div>
                <div class="mb-2">
                    <!-- <div class="d-flex"> -->
                        <input type="radio" name="jenis" value="Laki-laki" class="form-check-input" style="margin-right: 10px" checked required>Pria <br>
                        <input type="radio" name="jenis" value="Wanita" class="form-check-input" style="margin-right: 10px" required>Wanita
                    <!-- </div> -->
                </div>
                <div class="mb-2">
                    <select name="agama" required class="form-control">
                        <option value="">----- Pilih Agama -----</option>
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Budha">Budha</option>
                    </select>
                </div>
                <div class="mb-2">
                    <input type="checkbox" name="hobi[]" value="Renang" class="form-check-input" style="margin-right: 10px">Renang<br>
                    <input type="checkbox" name="hobi[]" value="Bola Voli" class="form-check-input" style="margin-right: 10px">Bola Voli<br>
                    <input type="checkbox" name="hobi[]" value="Sepak Bola" class="form-check-input" style="margin-right: 10px">Sepak Bola<br>
                    <input type="checkbox" name="hobi[]" value="Sepeda" class="form-check-input" style="margin-right: 10px">Sepeda<br>
                    <input type="checkbox" name="hobi[]" value="Badminton" class="form-check-input" style="margin-right: 10px">Badminton
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