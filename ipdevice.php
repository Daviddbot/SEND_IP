<?php

require 'function.php';


    $host = "localhost";
    $user = "apipoms_db";
    $pass = "dbapipomsi2023";
    $db = "apipoms_db";

$conn = mysqli_connect($host, $user, $pass, $db);

$data = query("SELECT * FROM dataADD");

if ( isset($_POST["cari"]) ) {
    $data = cari($_POST["keyword"]);
}

if (isset($_POST["views"]) ) {
    $data = query("SELECT * FROM dataADD");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="styleip.css">
    <title>VIEW DATA IP</title>
</head>
<body>
    <div class="container-fluid text-center">
        <div class="row justify-content-center border mb-4 bg-dark text-light">
            <h2 class="text-center p-3">IP DEVICE</h2>
        </div>
        <div class="row border justify-content-center rounded-4 ms-3 me-3 mb-3 ente">
            <div class="row d-block p-2 pe-5 ps-5 rounded-4">
                <div class="input-group mb-1 justify-content-center">
                    <form action="" method="post">
                        <div class="searching p-3 borders rounded-3 d-flex">
                            <input type="text" class="btene-input me-2 ps-3" name="keyword" id="cari" size="35" autocomplete="off" placeholder="Search Device Nomer..">
                            <button class="btn biti-in" style="background: whitesmoke;" type="submit" name="cari" id="cariv2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row border justify-content-center P-3 rounded-4 ms-3 me-3 mb-1 ente1">
            <div class="row me-5 ms-5 mt-3">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>NO</th>
                            <th>DEVICE NOMER</th>
                            <th>IP ADDRESS</th>
                        </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($data as $row) : ?>
                    <tbody>
                        <tr>
                            <td class="text-light"><?php echo $i; ?></td>
                            <td class="text-light"><?php echo $row['devicenomer']; ?></td>
                            <td class="text-light"><?php echo $row['ip']; ?></td>
                        </tr>
                    </tbody>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
        <div class="d-grid gap-1 ms-3 me-3 mt-3 rounded-4">
            <form action="" method="post">
                <button class="btn btn-secondary p-2 col-10 border ente3" type="submit" name="views">
                    <h4 class="text-center text-light fs-6">TAMPILKAN SEMUA DATA</h4>
                </button>
            </form>
        </div>
        <!-- <div class="d-grid gap-1 p-3">
            <button class="btn btn-secondary p-3 dulekan" type="button">
                <a class="text-light text-decoration-none" href="reset.html">
                    <h4>CONFIGURE WIFI</h4>
                </a>
            </button>
        </div> -->

        <!-- <div class="row justify-content-center ms-3 me-3 mt-1 rounded-4 div4 p-3 ps-4 pe-4">
            <div class="col p-2 pb-3">
                <h4 class="text-light">STATUS</h4>
            </div>
            <div class="b bg-light rounded-3">
                <p class="gps-stat">GPS: Lat:<span class="la" id="latitude">%LATITUDE%</span> | Long:<span class="lo" id="longitude">%LONGITUDE%</span>  <br> Server: <span class="svr-stts" id="server-status"></span> </p>
            </div>
        </div>
        <div class="row justify-content-center ms-3 me-3 mt-3 mb-3 rounded-4 div5 p-3 ps-4 pe-4">
            <div class="col p-2 pb-3">
                <h4 class="text-light">REPORT</h4>
            </div>
            <div class="b bg-light rounded-3">
              <p class="arrived"> <span class="nilai-arr" id="arr"></span> Arrived</p>
            </div>
        </div> -->
        <div class="row text-center">
            <p class="versi">MyETS version 4.0</p>
        </div>
    </div>
    
</body>
</html>