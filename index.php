<?php
    session_start();
    if ( !isset($_SESSION["login"])) {
        header("Location:./page/login.php");
        exit;
    }

    require './page/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./style/style.css">
    <title>Rental Mobil</title>
</head>
<body>
    
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="las la-car-alt"></span> <span>Rental Mobil K6</span> </h2>
        </div>
        <div class="sidebar-menu">
        <ul>
            <li> <a href="" class="active"> <span class="las la-home"></span> <span>Dasboard</span> </a></li>
            <li> <a href=""> <span class="las la-car"></span> <span>Data Mobil</span> </a> </li>
            <li> <a href=""> <span class="las la-users"></span> <span>Data Customer</span> </a> </li>
            <li> <a href=""> <span class="las la-receipt"></span> <span>Data Transaksi</span> </a> </li>
            <li> <a href=""> <span class="las la-file-invoice"></span> <span>Laporan</span> </a> </li>
            <li> <a href="./proses/logout.php"> <span class="las la-sign-out-alt"></span> <span>Logout</span> </a> </li>
        </ul>
    </div>
    </div>

    <div class="konten">
        <header>
            <h2>
                <label for="nav-toggle">
                    <i class="las la-bars"></i>
                </label>
                Dasboard
            </h2>
            <div class="user-wrapper">
                <img src="./img/admin.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Restu Adi</h4>
                    <small>super Admin</small>
                </div>
            </div>
        </header>

        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>7</h1>
                        <span>Jumlah Mobil</span>
                    </div>
                    <div>
                        <span class="las la-car"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>4</h1>
                        <span>Customer</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>4</h1>
                        <span>Transaksi</span>
                    </div>
                    <div>
                        <span class="las la-receipt"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Rp14.000.000</h1>
                        <span>Penghasilan</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="mobil">
                    <div class="card">
                        <div class="card-header">
                            <h2>Data Mobil</h2>
                            <button><span>Lihat Data</span></button>
                        </div>  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width=100%>
                                    <thead>
                                        <tr>
                                            <td>Merk</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Dihatsu Sigra</td>
                                            <td> <span class="status tersedia"></span>Tersedia</td>
                                        </tr>
                                        <tr>
                                            <td>Honda Brio</td>
                                            <td> <span class="status tersedia"></span>Tersedia</td>
                                        </tr>
                                        <tr>
                                            <td>Toyota Avanza</td>
                                            <td> <span class="status tersedia"></span>Tersedia</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="customer"s>
                <div class="card">
                    <div class="card-header">
                        <h2>Admin</h2>
                    </div>  
                    
                    <div class="card-body">
                        <div class="customer">
                            <div>
                                <img src="./img/Anwar.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>K. Anwar</h4>
                                    <small>Admin</small>
                                </div>
                            </div>
                        </div>
                        <div class="customer">
                            <div>
                                <img src="./img/Bintang.jpg" width="40px" height="40px" alt="">
                                <div>
                                    <h4>A. Bintang J</h4>
                                    <small>Admin</small>
                                </div>
                            </div>
                        </div>
                        <div class="customer">
                            <div>
                                <img src="./img/yudha.png" width="40px" height="40px" alt="">
                                <div>
                                    <h4>F. Wibowo</h4>
                                    <small>Customer</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <footer>
        <small>© Tugas RW Kelompok 5.</small>
    </footer>
</body>
</html>