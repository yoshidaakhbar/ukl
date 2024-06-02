<?php include ("../koneksi.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar game</title>
    <link rel="stylesheet" href="../css/yoshi.css">
</head>
<body>
    <a href="tambah.php"><p> tambah data </p></a>
    <table border ="1" style="background-color : white;">
        <thead>
            <tr>
                <th>id</th>
                <th>nama game</th>
                <th>genre</th>
                <th>link</th>
                <!-- <th>foto</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            $sql="select* from daftar_game";
            $query=mysqli_query($mysqli,$sql);

            while ($game = mysqli_fetch_array($query)){
                echo"<tr>";

                echo "<td>" . $game['id']."</td>";
                echo "<td>" . $game['nama_game']."</td>";
                echo "<td>" . $game['genre']."</td>";
                echo "<td>" . $game['link']."</td>";
                // echo "<td>" . $game['foto']."</td>";

                echo "</tr>";
            }
            ?>
        </tbody>
        </table> 
</body>
</html>