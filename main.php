<?php
include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>DATA KLASEMEN UEFA 2024</title>
</head>
<body>
    <div class="container-fluid">
    <h1 class="text-center">DATA KLASEMEN UEFA 2024</h1>
    <h1 class="text-center">BY: ARI SAPUTRA</h1>
    <div class="d-flex">
        <form action="" method="post">
            <input class="btn btn-secondary" type="submit" name="logout" value="logout">
        </form>
        <a class="ms-5 me-5" href="main.php">Data Klasemen</a>
        <a class="ms-5 me-5" href="input.php">Input Data</a>
    </div>
    <br>
    <p class="text-center">DATA GROUP A</p>
    <p class="text-center">Per <?php include('timestamp.php')?></p>
    <br>
    <form action="cetak/cetak.php" method="post">
        <input class="btn btn-success mb-3" type="submit" name="cetak" value="cetak">
    </form>
    <table border=2 style="bordercollapse: collapse;" class="table table-striped">
        <thead>
            <th>No.</th>
            <th>Tim</th>
            <th>Menang</th>
            <th>Seri</th>
            <th>Kalah</th>
            <th>Poin</th>
            <th style="width: 200px;">AKSI</th>
        </thead>
        <tbody>
            <?php

                $sql = "SELECT * FROM data_group";
                $table = mysqli_query($conn, $sql);
                $i=1;
                while ($row = mysqli_fetch_array($table)) {
                $group = $row['group_name'];
                ?>
                <tr>
                    <td><?= $i++?></td>
                    <td><?= $row['negara']?></td>
                    <td><?= $row['win']?></td>
                    <td><?= $row['draw']?></td>
                    <td><?= $row['lose']?></td>
                    <td><?= $row['point']?></td>
                    <td>
                        <div style="d-flex">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit<?= $i;?>">Edit</button>
                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $i;?>">Hapus</button>
                        </div>
                    </td>
                </tr>
                <!-- Modal Hapus -->
                <div class="modal fade" id="delete<?= $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post">
                              <input type="hidden" name="id" value="<?= $row['id'] ?>">
                              Hapus Data ini ?
                          </div>
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-danger" value="Hapus" name="hapus">
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>

                <!-- Modal Edit -->
                <div class="modal fade" id="edit<?= $i; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form method="post">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <input type="text" class="form-control mb-3" name="negara" value="<?= $row['negara']; ?>">
                                <input type="number" class="form-control mb-3" name="menang" value="<?= $row['win']; ?>">
                                <input type="number" class="form-control mb-3" name="seri" value="<?= $row['draw']; ?>">
                                <input type="number" class="form-control mb-3" name="kalah" value="<?= $row['lose']; ?>">
                                <input type="number" class="form-control mb-3" name="poin" value="<?= $row['point']; ?>">
                          </div>
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Edit" name="edit">
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                <?php
                }
                ?>
        </tbody>
    </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>