<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">

    <title>Aplikasi Koperasi</title>
</head>

<body>
    <div class="p-2">
        <h1>Aplikasi Koperasi</h1>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah
            Anggota</button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Tempat Lahir</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Hak Akses</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <?php 
           foreach($anggota as $a){
               ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $a['no']?></th>
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
                    <td><button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#edit_anggota">Edit</button></td>
                    <td><button type="button" class="btn btn-danger">Delete</button></td>
                </tr>
            </tbody>
            <!-- Modal -->
            <div class="modal fade" id="edit_anggota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Data Anggota</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form action="<?= base_url();?>anggota/edit/<?= $a["no"]?>" method="POST">

                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="Nama"
                                    placeholder="Masukan Nama" value="<?=$a['nama']?>">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="Alamat"
                                    placeholder="Masukan Alamat" value="<?=$a['alamat']?>">
                            </div>
                            <div class="form-group">
                                <label for="Tempat Lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="Tempat_Lahir"
                                    placeholder="Masukan Tempat Lahir" value="<?=$a['tempat_lahir']?>">
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="Tanggal_Lahir"
                                    placeholder="Masukan Tempat Lahir" value="<?=$a['tanggal_lahir']?>">
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kelamin">Jenis Kelamin</label>

                                <select id="Jenis_Kelamin" name="jenis_kelamin" class="form-control">
                                    <option hidden><?=$a['jenis_kelamin']?></option>
                                    <option>Laki-Laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" id="Pekerjaan"
                                    placeholder="Masukan Pekerjaan" value="<?=$a['pekerjaan']?>">
                            </div>
                            <div class="form-group">
                                <label for="Status">Status</label>
                                <select id="Status" name="status" class="form-control">
                                    <option value="<?=$a['status']?>"></option>
                                    <option value="0">Tidak Aktif</option>
                                    <option value="1">aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Masuk">Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" class="form-control" id="Tanggal_Masuk"
                                    placeholder="Masukan Tanggal Masuk" value="<?=$a['tanggal_masuk']?>">
                            </div>
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="username" class="form-control" id="Pekerjaan"
                                    placeholder="Masukan Username" value="<?=$a['username']?>">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" class="form-control" id="Pekerjaan"
                                    placeholder="Masukan Password" value="<?=$a['password']?>">
                            </div>
                            <div class="form-group">
                                <label for="Hak Akses">Hak Akses</label>
                                <select id="Hak_Akses" name="hak_akses" class="form-control">
                                    <option hidden><?=$a['hak_akses']?></option>
                                    <option>Anggota</option>
                                    <option>Sekertaris</option>
                                    <option>Bendahara</option>
                                    <option>Owner</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </table>
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Form Tambah Data Anggota</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url();?>anggota/tambah" method="POST">
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" name="nama" class="form-control" id="Nama"
                                    placeholder="Masukan Nama">
                            </div>
                            <div class="form-group">
                                <label for="Alamat">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="Alamat"
                                    placeholder="Masukan Alamat">
                            </div>
                            <div class="form-group">
                                <label for="Tempat Lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" class="form-control" id="Tempat_Lahir"
                                    placeholder="Masukan Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" class="form-control" id="Tanggal_Lahir"
                                    placeholder="Masukan Tempat Lahir">
                            </div>
                            <div class="form-group">
                                <label for="Jenis Kelamin">Jenis Kelamin</label>
                                <select id="Jenis_Kelamin" name="jenis_kelamin" class="form-control">
                                    <option selected>Perempuan</option>
                                    <option>Laki-Laki</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Pekerjaan">Pekerjaan</label>
                                <input type="text" name="pekerjaan" class="form-control" id="Pekerjaan"
                                    placeholder="Masukan Pekerjaan">
                            </div>
                            <div class="form-group">
                                <label for="Status">Status</label>
                                <select id="Status" name="status" class="form-control">
                                    <option selected>Aktif</option>
                                    <option>Tidak Aktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="Tanggal Masuk">Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" class="form-control" id="Tanggal_Masuk"
                                    placeholder="Masukan Tanggal Masuk">
                            </div>
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" name="username" class="form-control" id="Pekerjaan"
                                    placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input type="password" name="password" class="form-control" id="Pekerjaan"
                                    placeholder="Masukan Password">
                            </div>
                            <div class="form-group">
                                <label for="Hak Akses">Hak Akses</label>
                                <select id="Hak_Akses" name="hak_akses" class="form-control">
                                    <option selected>Anggota</option>
                                    <option>Sekertaris</option>
                                    <option>Bendahara</option>
                                    <option>Owner</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assets')?>/js/bootstrap.min.js"></script>
</body>

</html>