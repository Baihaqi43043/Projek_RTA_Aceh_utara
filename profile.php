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

    <link rel="stylesheet" href="css/index.css">

</head>

<body style="background-color:#23651d">
    <div class="first">
        <?php
        include_once("element/header.php");
        $data = mysqli_query($conn, "SELECT * FROM login 
        LEFT JOIN member ON login.id=member.id_user
        WHERE username='$_SESSION[username]'");
        $hasil = mysqli_fetch_array($data);
        ?>
    </div>
    <div class="second">
    </div>
    <h1 class="text-center my-5 " style="font-weight: 600; color:white">Selamat Datang <?php echo $hasil['nama']?></h1>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div class="content w-100 row" style="background-color:transparent">
                    <div class="col-4">
                        <img width="150px" height="150px" src="docs/<?php echo $hasil['foto'] ?>" class="rounded-circle"
                            alt="user" style="object-fit:cover; object-position:top;">
                    </div>
                    <div class="col-8 text-start" style="
                          font-weight: semi-bold;
                          font-size: 20px;
                          color: #FFFFFF;
                          ">
                        <table>
                            <tr>
                                <td>No. KTA</td>
                                <td width="30px"></td>
                                <td>: <?php echo $hasil['nokta'] ?> </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td width="30px"></td>
                                <td>: <?php echo $hasil['nama'] ?> </td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td width="30px"></td>
                                <td>: <?php echo $hasil['status'] ?> </td>
                            </tr>
                            <tr>
                                <td>Dapartement</td>
                                <td width="30px"></td>
                                <td>: <?php echo $hasil['departemen'] ?> </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h1 class="text-center my-5 " style="font-weight: 600; color:white">Edit Profile</h1>
    <div class="container">
        <div class="row d-flex justify-content-center" style="min-width:70%">
            <div class="col-12 " style="
        position: relative;
        max-width: 700px;
        height: 586px;
          background: rgba(248, 248, 248, 0.2);
            border: 3px solid #FFFFFF;
            box-sizing: border-box;
            box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(70px);
            /* Note: backdrop-filter has minimal browser support */
            border-radius: 30px;">
                <div class="row mb-3 mt-5 ms-4">
                    <label for="colFormLabel" class="col-sm-3 col-form-label fw-bold fs-6"
                        style="color: #FFFFFF;">Nama</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="colFormLabel" value="<?php echo $hasil['nama'] ?>">
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="colFormLabel" class="col-sm-3 col-form-label fw-bold fs-6"
                        style="color: #FFFFFF;">NIK</label>
                    <div class="col-sm-8 ">
                        <input type="email" class="form-control" id="colFormLabel" value="<?php echo $hasil['nik']?>">
                    </div>
                </div>
                <div class=" row mb-3 ms-4">
                    <label for="colFormLabel" class="col-sm-3 col-form-label fw-bold fs-6"
                        style="color: #FFFFFF;">Tanggal Lahir</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="colFormLabel"
                            value="<?php echo $hasil['tgllahir'] ?>">
                    </div>
                </div>
                <div class=" row mb-3 ms-4">
                    <label for="colFormLabel" class="col-sm-3 col-form-label fw-bold fs-6"
                        style="color: #FFFFFF;">Alamat</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="colFormLabel"
                            value="<?php echo $hasil['alamat'] ?>">
                    </div>
                </div>
                <div class=" row mb-3 ms-4">
                    <label for="colFormLabel" class="col-sm-3 col-form-label fw-bold fs-6"
                        style="color: #FFFFFF;">Bidang</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="colFormLabel"
                            value="<?php echo $hasil['bidang'] ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="colFormLabel" class="col-sm-3 col-form-label fw-bold fs-6"
                        style="color: #FFFFFF;">Status</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="colFormLabel"
                            value="<?php echo $hasil['status'] ?>" disabled>
                    </div>
                </div>
                <div class="row mb-3 ms-4">
                    <label for="colFormLabel" class="col-sm-3 col-form-label fw-bold fs-6"
                        style="color: #FFFFFF;">Departement</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="colFormLabel"
                            value="<?php echo $hasil['departemen'] ?>" disabled>
                    </div>
                </div>
                <div class="mt-5 col-9 offset-3">
                    <button type="button" class="btn btn-warning mx-2" style="width: 150px;">Ubah
                        Password</button>
                    <button type="button" class="btn btn-primary mx-2 " style="width: 150px;">Save</button>
                </div>
            </div>
        </div>
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
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script type="text/javascript">
    VanillaTilt.init(document.querySelectorAll(".card"), {
        max: 25,
        speed: 400,
        glare: true,
        "max-glare": 1,
    });
    </script>

</body>

</html>