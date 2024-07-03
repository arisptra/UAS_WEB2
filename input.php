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
    <p>Input Data Group</p>
    <br>
    <form method="post">
        <table style="width: 50%;">
            <tr>
                <td>Group</td>
                <td>
                    <select name="group" id="group" class="form-select mb-3">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Negara</td>
                <td><input class="form-control mb-3" type="text" name="negara" id="negara"></td>
            </tr>
            <tr>
                <td>Menang</td>
                <td><input class="form-control mb-3" type="number" name="menang" id="menang"></td>
            </tr>
            <tr>
                <td>Seri</td>
                <td><input class="form-control mb-3" type="number" name="seri" id="seri"></td>
            </tr>
            <tr>
                <td>Kalah</td>
                <td><input class="form-control mb-3" type="number" name="kalah" id="kalah"></td>
            </tr>
            <tr>
                <td>Poin</td>
                <td><input class="form-control mb-3" type="number" name="poin" id="poin"></td>
            </tr>
            <tr>
                <td></td>
                <td><input class="btn btn-secondary" type="submit" name="submit_data" value="submit"></td>
            </tr>
        </table>
    </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>