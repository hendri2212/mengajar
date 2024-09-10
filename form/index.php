<?php
    session_start();
    if (!$_SESSION['token']) {
        header('Location: login.php');
    }
    include "./database/connection.php";
    $role = $_SESSION["role"];
    $id = $_SESSION["id"];
    if ($role == 'administrator' OR $role == 'teacher') {
        $query = mysqli_query($conn,
        'SELECT user.*, GROUP_CONCAT(hoby.hoby_name SEPARATOR ", ") hoby
        FROM `user`
        LEFT JOIN `user_hoby` ON user.id = user_hoby.user_id
        LEFT JOIN hoby ON user_hoby.hoby_id = hoby.id
        WHERE user.role = "student"
        GROUP BY user.id
        ');
    } else {
        $query = mysqli_query(
            $conn,
            'SELECT user.*, GROUP_CONCAT(hoby.hoby_name) hoby
            FROM `user`
            JOIN `user_hoby` ON user.id = user_hoby.user_id
            JOIN hoby ON user_hoby.hoby_id = hoby.id
            WHERE user.id = "'.$id.'"
            ');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Users</title>
</head>
<body>
    <nav class="navbar bg-black text-white mb-2">
        <div class="container">
            <h2>Data Siswa</h2>
            <p><?= $_SESSION['name'] ?></p>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php while($data = mysqli_fetch_object($query)){ ?>
            <div class="col-3">
                <div class="card">
                    <div class="card-header text-center">
                        <!-- <i class="bi bi-person-circle" style="width: 50px"></i> -->
                        <!-- <img src="./assets/thumbnail_image/20240805104305.jpeg" alt="Hendri Arifin" class="img-fluid rounded-circle"> -->
                        <img src="https://img.freepik.com/free-vector/gradient-zoom-effect-background_23-2149694919.jpg?t=st=1724911507~exp=1724915107~hmac=6d2b5ef7e50f554fc18236c0040f26210991585f96933975f0b7c7ce040ff7a6&w=1800" alt="Hendri Arifin" class="img-fluid rounded-circle">
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td class="text-nowrap">Full Name</td>
                                <td><?= $data->full_name ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?= $data->gender ?></td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td><?= $data->religion ?></td>
                            </tr>
                            <tr>
                                <td>Hoby</td>
                                <td><?= $data->hoby ?></td>
                            </tr>
                        </table>
                    </div>
                    <?php if ($_SESSION['role'] == 'administrator') { ?>
                        <div class="card-footer text-center">
                            <div class="btn-group">
                                <?php if ($data->status == 'disable') { ?>
                                    <a href="enable.php?id=<?= $data->id ?>" class="btn btn-warning">Enable</a>
                                <?php } else { ?>
                                <a href="enable.php?id=<?= $data->id ?>" class="btn btn-success">Disable</a>
                                <?php } ?>
                                <a href="delete.php?id=<?= $data->id ?>" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                    <?php } elseif ($_SESSION['role'] == 'teacher') {
                        # code...
                    } else { ?>

                        <div class="card-footer text-center">
                            <div class="btn-group">
                                <a href="edit.php?id=<?= $data->id ?>" class="btn btn-danger">Edit</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>