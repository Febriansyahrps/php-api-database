<?php

include("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM user WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Febriansyah Rizqi P.S</title>
</head>

<body>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="username">Username: </label>
            <input type="text" name="username" placeholder="username" value="<?php echo $siswa['username'] ?>" />
        </p>
        <p>
            <label for="password">Password: </label>
            <input type="text" name="password" placeholder="password" value="<?php echo $siswa['password'] ?>" />
        </p>
        <p>
            <label for="level">Level: </label>
            <?php $level = $siswa['level']; ?>
            <select name="level">
                <option <?php echo ($level == 'Admin') ? "selected": "" ?>>Admin</option>
                <option <?php echo ($level == 'User') ? "selected": "" ?>>User</option>
                <option <?php echo ($level == 'Guest') ? "selected": "" ?>>Guest</option>
            </select>
        </p>
        <p>
            <label for="fullname">Fullname: </label>
            <input type="text" name="fullname" placeholder="fullname" value="<?php echo $siswa['fullname'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
