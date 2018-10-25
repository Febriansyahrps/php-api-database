<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Febriansyah Rizqi P.S</title>
</head>

<body>
    <h2>DAFTAR SISWA</h2>

    <nav>
        <a href="inputan-awal.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Level</th>
            <th>Fullname</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM user";
        $query = mysqli_query($db, $sql);
        while($siswa = mysqli_fetch_array($query)){

            echo "<tr>";

            echo "<td>".$siswa['username']."</td>";
            echo "<td>".$siswa['password']."</td>";
            echo "<td>".$siswa['level']."</td>";
            echo "<td>".$siswa['fullname']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Ubah</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>


    </body>
    </html>