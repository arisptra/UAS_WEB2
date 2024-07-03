<?php
$host = "localhost";
$username = "root"; 
$password = "123456"; //kalo pake xampp dan blm ada password, kosongin aja
$database = "klasemen"; //sesuaiin nama database yang dibuat

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    var_dump('test');
    die("Koneksi Gagal: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM profile WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['username'] = $username; // Set session
            header("Location: main.php"); // Redirect ke halaman setelah login berhasil
            exit();
    } else {
        // Login gagal
        echo "Login gagal. Periksa kembali username dan password Anda.";
    }
}

if(isset($_POST['submit_data'])){
    $grup = $_POST['group'];
    $negara = $_POST['negara'];
    $win = $_POST['menang'];
    $draw = $_POST['seri'];
    $lose = $_POST['kalah'];
    $point = $_POST['poin'];

    $sql = "INSERT into data_group (group_name, negara, win, draw, lose, point) values ('$grup', '$negara', '$win', '$draw', '$lose', '$point')";
    mysqli_query($conn, $sql);
    header("location: main.php");

}

if(isset($_POST['hapus'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM data_group WHERE id = '$id' ";
    mysqli_query($conn, $sql);
}

if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $negara = $_POST['negara'];
    $win = $_POST['menang'];
    $draw = $_POST['seri'];
    $lose = $_POST['kalah'];
    $point = $_POST['poin'];
    $sql = "UPDATE data_group SET win ='$win', draw = '$draw', lose = '$lose', point = '$point' where id ='$id'";
    mysqli_query($conn, $sql);
}

if(isset($_POST['logout'])){

    session_start();

    // Hapus semua session
    session_unset();

    // Hancurkan session
    session_destroy();

    // Redirect ke halaman login
    header("Location: index.html");
    exit();

}

?>