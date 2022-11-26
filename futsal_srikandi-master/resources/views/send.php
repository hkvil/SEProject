<?php

    echo "<h1>SELAMAT</h1>";
                        if (isset($_POST['Submit'])) {
                            $nama   =$_POST['nama'];
                            $wa     =$_POST['nowa'];
                            $tgl    =$_POST['tgl'];
                            $lap    =$_POST['lap'];
                            $jm     =$_POST['jm'];
                            $cat    =$_POST['cat'];
                            header("location:https://api.whatsapp.com/send?phone=
                            628521995654&text=Nama:%20$nama%20%0D
                            Nomor:%20$wa%20%0D
                            Tanggal:%20$tgl%20%0D
                            Lapangan:%20$lap%20%0D
                            Jam:%20$jm%20%0D
                            Catatan:%20$cat%20%0D");
                        } else {
                            echo"
                                <script>
                                    window.location=history.go(-1);
                                </script>
                            ";
                        }
                    ?>