<!DOCTYPE html>
<html>

<head>
    <style>
    #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #customers td,
    #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #customers tr:hover {
        background-color: #ddd;
    }

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0e1e0e;
        color: white;
    }
    </style>
</head>

<body>

    <h1>Daftar Anggota Koperasi Jaya Makmur</h1>

    <table id="customers">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Pekerjaan</th>
            <th>Status</th>
            <th>Tanggal Masuk</th>
            <th>Username</th>
            <th>Password</th>
            <th>Hak Akses</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($anggota as $a){
        ?>
        <tr>
            <th><?= $no++;?></th>
            <td><?= $a['nama']?></td>
            <td><?= $a['alamat']?></td>
            <td><?= $a['tempat_lahir']?></td>
            <td><?= $a['tanggal_lahir']?></td>
            <td><?= $a['jenis_kelamin']?></td>
            <td><?= $a['pekerjaan']?></td>
            <td><?= $a['status']?></td>
            <td><?= $a['tanggal_masuk']?></td>
            <td><?= $a['username']?></td>
            <td><?= $a['password']?></td>
            <td><?= $a['hak_akses']?></td>
        </tr>
        <?php
        }
      ?>
    </table>

</body>

</html>