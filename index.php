<?php 
require 'function.php';
$datas = query("SELECT * FROM todo");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fliud py-5">
            <div class="container">
                <h1 class="text-center">Daftar To Do List</h1>
                <!-- tombol modal Tambah -->
                <div class="py-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">
                        Tambah To Do
                    </button></div>

                <!-- Modal Tambah -->
                <div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah data list baru</h1>
                            </div>
                            <form action="" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="todo" class="form-label">To Do :</label>
                                        <input type="text" name="todo" class="form-control" id="todo" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan" class="form-label">Keterangan :</label>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="statuss" class="col-form-label">Status:</label>
                                        <select name="statuss" id="statuss" class="form-select">
                                            <option value="Belum Selesai">Belum Selesai</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" name="btnTambahList" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Tambah -->

                <div class="row">
                <?php foreach($datas as $data): ?>
                    <div class="col-md-3 col-sm-1 py-2">
                        <!-- card -->
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?= $data["todo"] ?></h5>
                                <p class="card-text"><?= $data["keterangan"] ?></p>
                                <!-- tombol modal ubah -->
                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                    data-bs-target="#ubah<?= $data["id"] ?>">
                                    Ubah
                                </button>
                                <!-- Akhir tombol modal ubah -->
                                <!-- tombol modal hapus -->
                                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                    data-bs-target="#hapus<?= $data["id"] ?>">
                                    Selesai
                                </button>
                                <!-- Akhir tombol modal hapus -->
                            </div>
                        </div>
                        <!-- akhir card -->
                    </div>
                    <!-- Modal Ubah -->
                <div class="modal fade" id="ubah<?= $data["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah data list</h1>
                            </div>
                            <form action="" method="post">
                                <input type="hidden" name="id_todo" value="<?= $data["id"] ?>">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="todo" class="form-label">To Do :</label>
                                        <input type="text" name="todo" class="form-control" id="todo"
                                            value="<?= $data["todo"] ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="keterangan" class="form-label">Keterangan :</label>
                                        <input type="text" name="keterangan" class="form-control" id="keterangan"
                                            value="<?= $data["keterangan"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="statuss" class="col-form-label">Status:</label>
                                        <select name="statuss" id="statuss" class="form-select"
                                            value="<?= $data["statuss"] ?>">
                                            <option value=""><?= $data["statuss"] ?></option>
                                            <option value="Belum Selesai">Belum Selesai</option>
                                            <option value="Selesai">Selesai</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" name="btnUbahList" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Ubah -->
                <!-- Modal Hapus -->
                <div class="modal fade" id="hapus<?= $data["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Hapus</h1>
                            </div>
                            <div class="modal-body">
                                <p>Apakah anda yakin, ingin menghapus <span
                                        style="color: red;"><?= $data["todo"] ?></span>!</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?= $data["id"] ?>">
                                    <button type="submit" name="btnHapus" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Hapus -->
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>


<?php 
if(isset($_POST["btnHapus"]) > 0){
    $id = $_POST["id"];
    mysqli_query($conn,"DELETE FROM todo WHERE id = $id");
    echo "
    <script>
    document.location.href = 'index.php'
    </script>
    ";
};

if(isset($_POST["btnTambahList"])){

    $todo = $_POST["todo"];
    $keterangan = $_POST["keterangan"];
    $status = $_POST["statuss"];

    mysqli_query($conn,"INSERT INTO `todo` (`id`, `todo`, `keterangan`, `statuss`) VALUES (NULL, '$todo', '$keterangan', '$status');");
    
    echo "
    <script>
    alert('Berhasil menambah data!');
    document.location.href = 'index.php'
    </script>
    ";
};

if(isset($_POST["btnUbahList"])){

    $id = $_POST["id_todo"];
    $todo = $_POST["todo"];
    $keterangan = $_POST["keterangan"];
    $status = $_POST["statuss"];

    mysqli_query($conn,"UPDATE `todo` SET `todo` = '$todo', `keterangan` = '$keterangan', `statuss` = '$status' WHERE `todo`.`id` = $id;");
    
    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
        alert('Berhasil mengubah data!');
        document.location.href = 'index.php';
        </script>
    ";
    }else{
    echo "
        <script>
            alert('Gagal mengubah data!');
            document.location.href = 'index.php';
        </script>
    ";
}
}
?>