<?php
require 'functions.php';

$datas = query("SELECT * FROM contoh");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Tambah data</h2>
<a href="tambah.php">tambah</a>
    <table>
        <?php foreach($datas as $data):?>
        <tr>
            <td><?php echo $data["nama"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>

</body>
</html>