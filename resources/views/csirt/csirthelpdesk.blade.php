<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELPDESK</title>
    <link rel="stylesheet" href="{{asset('css/stylecsirt.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <header>
        <div class="wrapper d-flex align-items-center">
            <nav>
                <input type="checkbox" id="show-search">
                <input type="checkbox" id="show-menu">
                <label for="show-menu" class="menu-icon">
                    <img class="icon-nav" src="picture/icon-nav.png">
                </label>
                <div class="content">
                    <div class="logo"><img src="picture/perumnas_logo.png" alt="logo" href="#" width="182px"></div>
                    <ul class="links">
                        <li><a href="{{route('csirt.home')}}">Beranda</a></li>
                        <li>
                            <a href="{{route('csirt.profile')}}" class="desktop-link">PROFILE</a>
                            <input type="checkbox" id="show-profile">
                            <label for="show-profile">PROFILE</label>
                            <ul>
                                <li><a href="{{route('csirt.profile')}}">TENTANG KAMI</a></li>
                                <li><a href="{{route('csirt.visi')}}">VISI MISI</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="rfc.html" class="desktop-link">RFC 350</a>
                            <input type="checkbox" id="show-rfc">
                            <label for="show-rfc">RFC 350</label> @foreach($dataRfc as $dt)

                            <ul>
                                <li><a href="dokumen/{{$dt->rfc_indo}}">BAHASA INDONESIA</a></li>
                                <li><a href="dokumen/{{$dt->rfc_english}}">BAHASA INGGRIS</a></li>
                            </ul>

                            @endforeach

                        </li>

                        <li>
                            <a href="#" class="desktop-link">LAYANAN</a>
                            <input type="checkbox" id="show-layanan">
                            <label for="show-layanan">LAYANAN</label>
                            <ul>
                                <li><a href="csirt_layanan_aduansiber.html">ADUAN SIBER</a></li>
                                <li><a href="csirt_layanan_layananva.html">LAYANAN VA</a></li>
                                <li><a href="csirt_layanan_pedomanteknis.html">PEDOMAN TEKNIS</a></li>
                                <ul>
                                    <li><a href="#">Sub Menu 1</a></li>
                                    <li><a href="#">Sub Menu 2</a></li>
                                    <li><a href="#">Sub Menu 3</a></li>
                                </ul>
                            </ul>
                            <li>
                                <a href="#" class="desktop-link">EVENT</a>
                                <input type="checkbox" id="show-event">
                                <label for="show-event">EVENT</label>
                                <ul>
                                    <li><a href="csirt_event_kegiatan.html">KEGIATAN</a></li>
                                    <li><a href="csirt_event_galeri.html">GALERI</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="desktop-link">HUBUNGI KAMI</a>
                                <input type="checkbox" id="show-contact">
                                <label for="show-contact">HUBUNGI KAMI</label>
                                <ul>
                                    <li><a href="{{route('csirt.helpdesk')}}">HELPDESK</a></li>
                                </ul>
                                <li>
                                    <a href="#" class="samesta-icon d-flex align-items-center">
                                        <img class="semesta-icon" src="https://www.perumnas.co.id/assets/samesta-icon.png"></a>
                                </li>
                            </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- <img class="slider " src="icon_helpdesk.jpg" alt="slider" ; width="100%"> -->
    <div class="container">

        <div class="about-us">

            <div class="contain">

                <h1>
                    Helpdesk
                </h1>
                <br>
                <div class="wrapper">
                </div>
                <div class="form">
                    <h3>Silahkan lengkapi formulir dibawah ini</h3>
                    <form method="POST" enctype="multipart/form-data" action="{{route('csirt.store')}}">
                        @CSRF

                        <label for="">NAMA LENGKAP*</label>
                        <input type="text" name="nama" placeholder="silahkan isi nama anda...">


                        <label for="">EMAIL*</label>
                        <input type="text" name="email" placeholder="silahkan isi email anda...">

                        <label for="">KATEGORI PRIORITAS*</label>
                        <input type="text" list="kategori aduan" name="kategori" placeholder="silahkan tentukan kategori laporan anda...">
                        <datalist id="kategori aduan">
                                <option value="tinggi">
                                <option value="sedang">
                                <option value="rendah">
                                </datalist>

                        <label for="">NOMOR TELEPON*</label>
                        <input type="text" name="telepon" placeholder="silahkan isi nomor telepon anda...">

                        <label for="">JUDUL LAPORAN*</label>
                        <input type="text" name="judul" placeholder="isi judul disini...">

                        <p class="full-width">
                            <label for="">ISI LAPORAN*</label>
                            <input name="laporan" name="laporan" cols="40" rows="10" height="100px" placeholder="silahkan isi laporan anda disini...">
                        </p>
                        <label>FILE PENDUKUNG</label>
                        <br>
                        <input type="file" name="file_pendukung"><br>

                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-distributed">
        <div class="container pt-40 pb-40">
            <div class="footer-top pb-40">
                <h2>INFORMATION TECHNOLOGY DEPARTMENT PERUMNAS</h2>
            </div>
            <br>
            <div class="footer-left">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7932.336245388278!2d106.876711!3d-6.241561!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f30fbe7ab17d%3A0xef2edfc906e31681!2sPerum%20Perumnas!5e0!3m2!1sen!2sid!4v1690336959927!5m2!1sen!2sid"
                        width="280" height="225" display="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="footer-center">
                <div>
                    <p> <a href="#">Jalan Mayor Jenderal DI Panjaitan 13340 RT.7/RW.11, Cipinang Cempedak, Jatinegara, East Jakarta City, Jakarta 13340</a></p>
                </div>
                <br>
                <div>
                    <p> <a href="">+62 21 819 4807 </a></p>
                </div>
                <br>
                <div>
                    <p><a href="mailto:support@company.com">perumnas@gmail.com</a></p>
                    <p>
                        <a>
                        Silahkan gunakan PGP untuk komunikasi e-mail terenkripsi
                    </a>
                    </p>
                    <br>
                    <p>
                        PGP Key dapat diunduh <a class="disini" href="" style="color: rgba(1, 115, 255, 0.911)"> di sini</a>
                    </p>
                </div>
                <div class="social-links ">
                    <a href="# "><i class="fa fa-instagram "></i></a>
                    <a href="# "><i class="fa fa-facebook "></i></a>
                    <a href="# "><i class="fa fa-twitter "></i></a>
                    <a href="# "><i class="fa fa-linkedin "></i></a>
                    <a href="# "><i class="fa fa-youtube "></i></a>
                </div>
            </div>
            <div class="footer-right">
                <div class="footer-icons">
                    <a href=""><img src="picture/footer1.png" alt="image1"></a>
                    <a href=""><img src="picture/footer2.png" alt="image2"></a>
                    <a href=""><img src="picture/footer3.png" alt="image3"></a>
                    <a href=""><img src="picture/footer4.png" alt="image3"></a>
                    <a href=""><img src="picture/footer5.png" alt="image3"></a>
                </div>
            </div>
        </div>
        <div class="footer-btm">
            <h4>Copyright © Perum Perumnas – 2023</h4>
        </div>
    </footer>

</body>

</html>