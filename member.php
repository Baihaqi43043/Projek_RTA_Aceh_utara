<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Rabithah Thaliban Aceh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

</head>

<body style="background-color:#23651d">
    <div class="first">
        <?php
        include_once("element/header.php");
        $data = mysqli_query($conn, "SELECT * FROM login 
        LEFT JOIN member ON login.id=member.id_user");
        $data2 = mysqli_query($conn, "SELECT level FROM login WHERE username = '$_SESSION[username]'");
        $data_ = mysqli_fetch_array($data2);
        ?>
    </div>

    <!-- Button trigger modal -->
    <?php
    if($data_['level'] == 'admin'){ ?>
    <button type="button" class="sticky-top btn btn-warning" data-bs-toggle="modal" data-bs-target="#tambahanggota">
        Tambah Anggota
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            <path fill-rule="evenodd"
                d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
        </svg>
    </button>
    <?php }?>

    <!-- Modal -->
    <div class="modal fade" id="tambahanggota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Anggota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="proses/prose_tambahanggota.php" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Email :</label>
                            <input name="username" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Password :</label>
                            <input name="password" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">level :</label>
                            <input name="level" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">No KTA:</label>
                            <input name="nokta" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama :</label>
                            <input name="nama" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">NIK :</label>
                            <input name="nik" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tanggal lahir:</label>
                            <input name="tgl" type="date" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Alamat:</label>
                            <input name="alamat" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Status:</label>
                            <input name="status" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Bidang :</label>
                            <input name="bidang" type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Departement:</label>
                            <input name="departemen" type="text" class="form-control" id="recipient-name">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Upoload Foto:</label>
                            <input name="foto" type="file" class="form-control" id="recipient-name">
                        </div> -->

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Modal Tambah Data Barang-->

    <div class="second mt-5">
        <div class="container mb-5 pb-5">
            <div class="row">
                <?php foreach($data as $hasil){?>
                <div class="col-auto mx-auto mb-4" style="background: rgba(248, 248, 248, 0.2);
                border: 3px solid #FFFFFF;
                width: 552px;
                height: 270px;
                box-sizing: border-box;
                backdrop-filter: blur(70px);
                border-radius: 10px;
                filter: drop-shadow(10px 10px 4px rgba(0, 0, 0, 0.25));">
                    <div class="row">
                        <div class="col-4 mt-4">
                            <img style="width: 160px;
                        height: 203px;" src="docs/<?php echo $hasil['foto'] ?>" alt="">
                        </div>
                        <div class="col-auto mt-4" style="
                        font-weight: semi-bold;
                        font-size: 1rem;
                        line-height: 30px;
                        color: #FFFFFF;">
                            <table>
                                <tr>
                                    <td>No. KTA</td>
                                    <td width="10px"></td>
                                    <td>: <?php echo $hasil['nokta'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td width="10px"></td>
                                    <td>: <?php echo $hasil['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td width="10px"></td>
                                    <td>: <?php echo $hasil['tgllahir'] ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td width="10px"></td>
                                    <td>: <?php echo $hasil['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td width="10px"></td>
                                    <td>: <?php echo $hasil['status'] ?></td>
                                </tr>
                                <tr>
                                    <td>Bidang</td>
                                    <td width="10px"></td>
                                    <td>: <?php echo $hasil['bidang'] ?></td>
                                </tr>
                                <tr>
                                    <td>Dapartement</td>
                                    <td width="10px"></td>
                                    <td>: <?php echo $hasil['departemen'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="footer mt-5">
        <h6>
            &#169 2021 Copyright by <a href="" style="color:inherit">Space.devs</a>
        </h6>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


</body>

</html>