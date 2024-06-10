<?php
include("./config/konekdb.php");
$mhs = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
$koneksi->close();
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
  <div class="container-md mt-5">
    <h1>PEMOGRAMAN INTERNET II</h1>
    <p>By Juwanda</p>

    <section class="mt-5">
      <a href="tambah.php" class="btn btn-primary mb-3">Tambah</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NIP</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Kota</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($data = mysqli_fetch_array($mhs)) {
          ?>
            <tr>
              <th scope="row"><?= $data['id'] ?></th>
              <td><?= $data['nip'] ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= $data['alamat'] ?></td>
              <td><?= $data['kota'] ?></td>
              <td>
                <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-warning">Edit</a>
                <a href="./config/delete.php?id=<?= $data['id']; ?>" class="btn btn-danger">Hapus</a>
              </td>
            </tr>
          <?php }; ?>
        </tbody>
      </table>
    </section>
  </div>
  <script src="css/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>