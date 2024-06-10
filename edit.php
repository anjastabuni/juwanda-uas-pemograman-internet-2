<?php

include('./config/konekdb.php');

$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
} else {
    echo "data tidak ditemukan!";
    exit;
}

mysqli_close($koneksi);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
</head>

<body>
    <div class="container-md mt-5 ">
        <h1 class="text-center">Edit Data</h1>

        <section class="mt-5">
            <div class="row d-flex justify-content-center ">
                <div class="col-md-6">
                    <form action="./config/update.php" method="post" class="shadow-lg py-5 px-5 rounded">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="form-group ">
                            <label for="nip" class="label-control mb-2">NIP</label>
                            <div class="col-12">
                                <input type="text" id="nip" class="form-control" name="nip" size="8" value="<?= $data['nip']; ?>">
                            </div>

                        </div>
                        <div class="form-group mt-4">
                            <label for="nama" class="label-control mb-2">Nama Lengkap</label>
                            <div class="col-12">
                                <input type="text" id="nama" class="form-control " name="nama" size="50" value="<?= $data['nama']; ?>">
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="alamat" class="label-control mb-2">Alamat</label>
                            <div class="col-12">
                                <input type="text" id="alamat" class="form-control " name="alamat" size="100" value="<?= $data['alamat']; ?>">
                            </div>
                        </div>
                        <div class="form-group mt-4">
                            <label for="kota" class="label-control mb-2">Kota</label>
                            <div class="col-12">
                                <input type="text" id="kota" class="form-control " name="kota" size="20" value="<?= $data['kota']; ?>">
                            </div>
                        </div>

                        <input type="submit" name="update" value="Update" class="btn btn-primary mt-5">
                    </form>
                </div>
            </div>


        </section>
    </div>
    <script src="css/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>