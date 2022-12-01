<!DOCTYPE html>  
<html>
<head>
    <title>Sumasshu Badminton</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/googlemap.js"></script>
    <!-- Vue JS -->
    <script type="text/javascript" src="js/vue/vue.js"></script>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="css/tambahsewa-style.css">
    <link rel="stylesheet" type="text/css" href="css/profile-style.css">
    <style type="text/css">
    body {
        font-family: 'Poppins', sans-serif;
    }
    .maps .container-map {
        height: 400px;
        margin: 0%;
        padding: 0%;
        width: 100%;
    }

    #map {
        margin: 0%;
        padding: 0%;
        width: 100%;
        height: 100%;
        border: 1px solid blue;
    }

    #data,
    #allData {
        display: none;
    }
    </style>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand" href="#">SUMASSHU</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#newsletter">Jadwal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#booking">Booking</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="banner-area font-italic">
        <div class="img-area"></div>
        <div class="banner-text">
            <h2>BOOKING LAPANGAN BADMINTON <br>LEBIH PRAKTIS</h2>
        </div>
        <button class="booking-button"><a href="#booking" type="button"><strong>Book Now</strong></a></button>
    </section>

    <section class="services-area" id="services">
        <h3 class="header-text">Layanan Kami</h3>
        <p>Menyediakan Layanan & Venue Badminton Terbaik Untuk Anda </p>
        <div class="content-area">
            <div class="single-service">
                <div class="icon-area">
                    <i class="fas fa-map"></i>
                </div>
                <h2>Lapangan</h2>
                <p>Menyediakan layanan booking lapangan badminton untuk kegiatan berolahraga anda</p>
            </div>
            <div class="single-service">
                <div class="icon-area">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h2>Event Turnamen</h2>
                <p>Menyediakan layanan dan harga terbaik untuk anda yang ingin mengadakan acara serta turnamen badminton
                </p>
            </div>
            <div class="single-service">
                <div class="icon-area">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <h2>Equipment</h2>
                <p>Menyediakan perlengakapan badminton dengan kualitas terbaik demi kenyamanan anda</p>
            </div>
        </div>
    </section>

    <section class="newsletter" id="newsletter">
        <h3 class="header-text" style="color: white;">SCHEDULE</h3>
        <input id="date-picker" width="270" value="<?php date_default_timezone_set("Asia/Jakarta");
                                                        echo date('Y-m-d'); ?>" onchange="getJSON()" />                               
        <div class="content table-responsive table-full-width" style="margin-top: 50px;">
            <div class="jadwal">
                <div class="baris" v-for="lapangan in jadwal">
                    <div class="lapangan" style="color: white; width: 170px;">
                        <h4>Lapangan @{{ lapangan.lapangan }}</h4>
                    </div>
                    <a v-for="jam in lapangan.urutan" class="cards credentialing tombol-pilihjadwal"
                        style="pointer-events: none; cursor: not-allowed;" onclick="getDataLapangan(this.id)">
                        <div class="overlay"></div>
                        <div class="jam">@{{ jam.nomor }}</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="status">
            <div class="keterangan">
                <div class="sudah_booking"></div>
                <h4 class="dif" style="color: white;">Penuh</h4>
            </div>
            <div class="keterangan">
                <div class="belum_booking"></div>
                <h4 class="dif" style="color: white;">Kosong</h4>
            </div>
        </div>
        <div class="harga" style="color: white;">
                <p style="margin-bottom: 0px;">Jam 7.00 - 17.00 = Rp 30.000<br>Jam 18.00 - 22.00 = Rp 40.000</p>
        </div>
    </section>

    <section class="whangsaff">
        <div class="container" id="booking">
            <h3 class="header-text">Booking Lapangan</h3>
            <div class="row">
                <div class="col-lg-7 col-sm" id="column">
                    <form action="{{action('LapanganController@index')}}" target="_blank" method="post">
                        @csrf
                        <h4 class="header-text">Form Pemesanan</h4>
                        <div class="form-group" id="whatsapp">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" minlength="3" maxlength="15"  placeholder="Nama Lengkap" required>
                        </div>               
                        <div class="form-group" id="whatsapp">
                            <label for="telp">No Whatsapp</label>
                            <input name="telp" type="tel" pattern="\+?([ -]?\d+)+|\(\d+\)([ -]\d+)" minlength="10" maxlength="14" class="form-control" required placeholder="Masukan Nomor WA">
                        </div>
                        <div class="form-group" id="whatsapp">
                        <label for="tgl">Tanggal Pesan</label>
                        <?php
                        $current  = date('Y-m-d');
                        $nextWeek = date('Y-m-d',strtotime($current.' + 1 year'));
                        echo "<input name='tgl' type='date' min='$current' max='$nextWeek' class='form-control' required>";?>
                        </div>
                        <div class="form-group" id="whatsapp">
                            <label for="lap">Pilih Lapangan</label>
                            <select name="lap" class="form-control" required>
                                <option disabled selected hidden>Klik Untuk Pilih Lapangan</option>
                                <option>Lapangan 1</option>
                                <option>Lapangan 2</option>
                                <option>Lapangan 3</option>
                            </select>
                        </div>
                        <div class="form-group" id="whatsapp">
                            <label for="jm">Pilih Jam</label>
                            <select name="jm" class="form-control" required placeholder="Pilih Jam">
                            <option disabled selected hidden>Klik Untuk Pilih Jam</option>
                        <?php
                            $j = array(7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22);
                            foreach ($j as $value) {
                                if($j<10){
                                    echo "<option>0$value:00</option>"; 
                                }else{
                                    echo "<option>$value:00</option>"; 
                                }
                                
                            }
                        ?>
                
                            </select>
                        </div>
                        <div class="form-group" id="whatsapp">
                            <label for="cat">Catatan</label>
                            <textarea name="cat" class="form-control" rows="3"></textarea>
                        </div>
                        <input type="hidden" name="nowa" value="6285217995654">
                        <button type="submit" name="submit" class="btn btn-primary" value="Submit">Kirim</button>
                    </form>
                </div>
                <div class="col-lg-5 col-sm" id="column">
                    <h4 class="header-text">Kontak Kami</h4>
                        <div class="content-area">
                            <div class="single-contact">
                                <i class="fa fa-map-marker"></i>      
                                <p>Jl. Ir H. Juanda No.95, Cemp. Putih, Kec. Ciputat Tim., Kota Tangerang Selatan, Banten 15412</p>
                                <i class="fa fa-envelope"></i>
                                <p>sumasshu.badminton21@mhs.uinjkt.ac.id</p>
                                <i class="fa fa-phone"></i>
                                <p>085217995654</p>
                            </div>
                        </div>     
                </div>
            </div>          
    </section>
            
    <footer>
        <p>&copy; All Right reserved by Kelompok X<sub class="text-lowercase">n+1</sub> 2022</a></p>
    </footer>

    <script type="text/javascript">
    window.onload = function() {
        buatId();
    }
    </script>
    <script src="/js/profile.js"></script>
    <script src="https://kit.fontawesome.com/3f4aa1c6f5.js" crossorigin="anonymous"></script>
    </script>
    <!--   Core JS Files   -->
    <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="js/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="js/bootstrap-notify.js"></script>
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Datepicker -->
    <script src="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/js/gijgo.min.js" type="text/javascript">
    </script>
    <link href="https://cdn.rawgit.com/atatanasov/gijgo/master/dist/combined/css/gijgo.min.css" rel="stylesheet"
        type="text/css" />

    <script type="text/javascript">
    $(document).ready(function() {
        $('#date-picker').datepicker({

            uiLibrary: 'bootstrap',
            format: 'yyyy-mm-dd'

        });
    </script>

    <script src="js/schedule-script.js"></script>
    <script src="js/schedule-back-script.js"></script>
    <script src="js/tambahsewa-back-script.js"></script>

    <script>
    jQuery(document).ready(function() {
        $('.counter').counterUp({
            delay: 50,
            time: 1000
        });
    });
    </script>
</body>
</html>