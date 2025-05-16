<?php
require_once 'Musik.php';
$musik = new Musik();
$data = $musik->getAllMusik();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Musik</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Top #5 Playlist Minggu ini</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Penyanyi</th>
            <th>Thn Rilis</th>
        </tr>
        <?php
        $no = 1;
        foreach ($data as $row) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . ($row['judul']) . "</td>";
            echo "<td>" . ($row['penyanyi']) . "</td>";
            echo "<td>" . ($row['rilis']) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>




