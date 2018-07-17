<!-- ubbah -->
{{ Html::style('assets/pages/css/globalstruktur.css') }}
<!-- ubbah -->
{{ Html::style('assets/pages/css/stylesstruktur.css') }}
<style>
    .overlay {
        height: 0%;
        width: 100%;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: rgba(255, 255, 255, 0.95);
        overflow-y: hidden;
        transition: 0.5s;
    }
    .overlay a {
        position: absolute;
        font-size: 40px;
        z-index: 999;
        background-color: #e02222;
        color: #ffffff;
        right: 2%;
        top: 5%;
        text-decoration: none;
        transition: 0.3s;
        width: 50px;
        text-align: center;
        border-radius: 3px;
    }
    .overlay a:hover, .overlay a:focus {
        background-color: #e02222;
    }

    #myNav_.overlay .overlay-content {
        height: 100%;
    }


    .modal-backdrop {
        position: static;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1040;
        background-color: #ffffff;
    }

    .modal {
    text-align: center;
    }

    @media screen and (min-width: 768px) {
    .modal:before {
        display: inline-block;
        vertical-align: middle;
        content: " ";
        height: 100%;
    }
    }

    .modal-dialog {
    display: inline-block;
    text-align: left;
    vertical-align: middle;
    }

</style>

<div class="container blog-wrapper struktur">
    <div class="row">
        <div class="col-md-12">
            <div class="blog-entry wow fadeInLeft animated animated" style="visibility: visible;">
                <div class="content">
                    <h2>STRUKTUR ORGANISASI</h2>
                    <h1>DINAS KOMUNIKASI DAN INFORMATIKA KABUPATEN BADUNG</h1>
                    <div class="trees">
                        <ul class="tree">
                            <li>
                            <!-- MENTERI -->
                            <input type="checkbox" checked="checked" id="c1">
                                <label class="tree_label" for="c1">Kepala Dinas</label>
                                <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#kadis">Profil Lengkap</button>
                            <!-- SATKER -->
                            <ul>
                                <li>
                                    <!-- ESELON 1 -->
                                    <input type="checkbox" id="c2">
                                        <label for="c2" class="tree_label">Sekretariat</label>
                                        <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#sekretaris">Profil Lengkap</button>
                                    <!-- ESELON 2 -->
                                    <ul>
                                        <li><span class="tree_label">Sub Bag Perencanaan dan Pelaporan</span>  <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#perencanaan">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Sub Bag Umum dan Kepeg</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#umum">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Sub Bag Keuangan</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#keuangan">Profil Lengkap</button></li>
                                    </ul>
                                    <!-- ESELON 1 -->
                                </li>
                                <li>
                                    <input type="checkbox" id="c3">
                                        <label for="c3" class="tree_label">Bidang Pengelolaan Informasi Publik</label>
                                        <!--<button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#pip">Profil Lengkap</button>
                                            ESELON 2 -->
                                    <ul>
                                        <li><span class="tree_label">Seksi Layanan Informasi Publik</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#lip">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Pengelolaan Informasi Publik</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#spip">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Media Publik</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#mp">Profil Lengkap</button></li>
                                    </ul>
                                </li>
                                <!-- ESELON 1 -->
                                <li>
                                    <input type="checkbox" id="c5">
                                        <label for="c5" class="tree_label">Bidang Pengelolaan Komunikasi Publik</label>
                                        <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#pkp">Profil Lengkap</button>
                                        <!-- ESELON 2 -->
                                    <ul>
                                        <li><span class="tree_label">Seksi Pengelolaan Opini Publik</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#pop">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Pemberdayaan Kelompok Komunikasi Masyarakat</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#kkm">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Kemitraan Komunikasi Publik</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#skkp">Profil Lengkap</button></li>
                                    </ul>
                                </li>
                                <!-- ESELON 1 -->
                                <li>
                                    <input type="checkbox" id="c7">
                                    <label for="c7" class="tree_label">Bidang Teknologi Informasi dan Komunikasi</label>
                                    <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#tik">Profil Lengkap</button>
                                    <!-- ESELON 2 -->
                                    <ul>
                                        <li><span class="tree_label">Seksi Infrastruktur dan Teknologi</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#idt">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Pengelolaan Data dan Integrasi Sistem Informasi </span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#data">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Keamanan Informasi dan Telekomunikasi</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#inte">Profil Lengkap</button></li>
                                    </ul>
                                </li>
                                <!-- ESELON 1 -->
                                <li>
                                    <input type="checkbox" id="c9">
                                        <label for="c9" class="tree_label">Bidang Layanan e-Gov</label>
                                        <!-- ESELON 2 -->
                                        <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#egov">Profil Lengkap</button>
                                    <ul>
                                            <li><span class="tree_label">Seksi Pengembangan Aplikasi</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#pengembanganaplikasi">Profil Lengkap</button></li>
                                            <li><span class="tree_label">Seksi Pengembangan Ekosistem e-Gov</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#ekosistemegov">Profil Lengkap</button></li>
                                            <li><span class="tree_label">Seksi Tata Kelola e-Gov</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#tatakelola">Profil Lengkap</button></li>
                                        </ul>
                                </li>
                                <!-- ESELON 1 -->
                                <li>
                                    <input type="checkbox" id="c11">
                                    <label for="c11" class="tree_label">Bidang Persandian dan Statistik</label>
                                    <!-- ESELON 2
                                    <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#persandian">Profil Lengkap</button>
                                    -->
                                    <ul>
                                        <li><span class="tree_label">Seksi Tata Kelola Persandian</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#kelolapersandian">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Operasional Pengamanan Persandian</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#pengamanankesandian">Profil Lengkap</button></li>
                                        <li><span class="tree_label">Seksi Statistik</span> <button class="btn-info" style="padding:5px" data-toggle="modal" data-target="#statistik">Profil Lengkap</button></li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- END SATKER -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal kepala kadis-->
    <div class="modal fade" id="kadis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
                <div class="card hovercard" style="margin-left: 0px">
                    <div class="cardheader">
                    </div>
                    <div class="avatar">
                        <img src='{{url("assets/images/pegawai/kepala_dinas/kepala_dinas.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                    </div>
                    <div class="info">
                        <div class="title">
                                I Wayan Weda Dharmaja,S.IP,M.Si
                        </div>
                        <div class="desc">Jabatan : Kepala Dinas</div>
                        <div class="desc">NIP. 19640705 198603 1 039</div>

                    </div>
                    <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                </div>
            </div>
          </div>
        </div>
    </div>
     <!-- Modal kepala kadis-->
     <div class="modal fade" id="sekretaris" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/sekdis/sekdis.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                Anak Agung Gede Arimayun,STP, M.PAR
                            </div>
                            <div class="desc">Jabatan : Sekretariat</div>
                            <div class="desc">NIP. 196801201994031009</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Perencanaan-->
    <div class="modal fade" id="perencanaan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/sekdis/perencanaan.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Anak Agung Yanik Cahyani, SE
                            </div>
                            <div class="desc">Jabatan : Sub Bag Perencanaan dan Pelaporan</div>
                            <div class="desc">NIP. 196709231997032001</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Perencanaan-->
    <!-- Modal umum-->
    <div class="modal fade" id="umum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/sekdis/umum.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Dra. A.A. Ketut Sumarni
                            </div>
                            <div class="desc">Jabatan : Sub Bag Umum dan Kepeg</div>
                            <div class="desc">NIP. 196307091986122001</div>
                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal umum-->
    <!-- Modal Perencanaan-->
    <div class="modal fade" id="keuangan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/sekdis/keuangan.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                Anak Agung Candrawati, SE
                            </div>
                            <div class="desc">Jabatan : Sub Bag Keuangan</div>
                            <div class="desc">NIP. 196709101993032015</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Perencanaan-->
    <!-- Modal Pengelola Informasi Publik-->
    <div class="modal fade" id="pip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("https://www.kominfo.go.id/images/unnamed.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                            </div>
                            <div class="desc">Jabatan : Bidang Pengelolaan Informasi Publik</div>
                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Pengelola Informasi Publik-->
    <!-- Modal Seksi Layanan Informasi Publik-->
    <div class="modal fade" id="lip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/pengelolainformasipublik/kasi_satu.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Fuji Rahmawati,S.Kom,M.A.P
                            </div>
                            <div class="desc">Jabatan : Seksi Layanan Informasi Publik</div>
                            <div class="desc">NIP. 197206162005012012</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Pengelola Informasi Publik-->
    <!-- Modal Seksi Pengelolaan Informasi Publik-->
    <div class="modal fade" id="spip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/pengelolainformasipublik/kasi_dua.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Dra. Ni Nyoman Suryaniati
                            </div>
                            <div class="desc">Jabatan : Seksi Pengelolaan Informasi Publik</div>
                            <div class="desc">NIP. 196011101992012001</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal Seksi Pengelolaan Informasi Publik-->
     <!-- Modal Seksi Media Publik-->
    <div class="modal fade" id="mp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/pengelolainformasipublik/kasi_tiga.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Ni Luh Putu Herawati Sucandra,SSTP,M.Si
                            </div>
                            <div class="desc">Jabatan : Seksi Media Publik</div>
                            <div class="desc">NIP. 197807141998022001</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal Seksi Pengelolaan Informasi Publik-->
      <!-- Modal Bidang Pengelolaan Komunikasi Publik-->
    <div class="modal fade" id="pkp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/pengelolakomunikasipublik/kabid.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    A.A. Rat Ratu Manacika, STP
                            </div>
                            <div class="desc">Jabatan : Bidang Pengelolaan Komunikasi Publik</div>
                            <div class="desc">NIP. 196802181997032005</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Seksi Pengelolaan Informasi Publik-->
    <!-- ModalSeksi Pengelolaan Opini Publik-->
    <div class="modal fade" id="pop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/pengelolakomunikasipublik/kasi_satu.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    I Gst. Ag. Ngr. Adi Parwatha Kepakisan,S.Sos
                            </div>
                            <div class="desc">Jabatan : Seksi Pengelolaan Opini Publik</div>
                            <div class="desc">NIP. 196410041986021004</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- Modal Seksi Pengelolaan Informasi Publik-->
    <!-- ModalSeksi Pengelolaan Opini Publik-->
    <div class="modal fade" id="kkm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/pengelolakomunikasipublik/kasi_dua.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                I Nengah Jaya,SP, M.Si
                            </div>
                            <div class="desc">Jabatan : Seksi Pemberdayaan Kelompok Komunikasi Masyarakat</div>
                            <div class="desc">NIP. 196507161986031019</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Seksi Pengelolaan Informasi Publik-->
    <!-- ModalSeksi Seksi Kemitraan Komunikasi Publik-->
    <div class="modal fade" id="skkp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/pengelolakomunikasipublik/kasi_tiga_2.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Ni Made Rasmini,S.Sos
                            </div>
                            <div class="desc">Jabatan : Seksi Kemitraan Komunikasi Publik</div>
                            <div class="desc">NIP. 197002221994032007</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Seksi Pengelolaan Informasi Publik-->
    <!-- Modal Bidang Teknologi Informasi dan Komunikasi-->
    <div class="modal fade" id="tik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/tekhnologiinformasikomunikasi/kabid.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Dewa Made Ardita, SE,M.Si
                            </div>
                            <div class="desc">Jabatan : Bidang Teknologi Informasi dan Komunikasi</div>
                            <div class="desc">NIP. 196205241992031006</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Teknologi Informasi dan Komunikasi-->
    <!-- Modal Seksi Infrastruktur & Teknologi-->
    <div class="modal fade" id="idt" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/tekhnologiinformasikomunikasi/kasi_satu.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Anak Agung Ngurah Putra Oyong Wirayoga,ST,MT
                            </div>
                            <div class="desc">Jabatan : Seksi Infrastruktur dan Teknologi</div>
                            <div class="desc">NIP. 197202261998031008</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Seksi Infrastruktur & Teknologi-->
    <!-- Modal Seksi Pengelolaan Data & Integrasi Sistem Informasi-->
    <div class="modal fade" id="data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/tekhnologiinformasikomunikasi/kasi_dua.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Ni Putu Sukresning, SE
                            </div>
                            <div class="desc">Jabatan : Seksi Pengelolaan Data dan Integrasi Sistem Informasi</div>
                            <div class="desc">NIP. 196905171998032012 </div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Seksi Infrastruktur & Teknologi-->
    <!-- Modal Seksi Keamanan Informasi dan Telekomunikasi-->
    <div class="modal fade" id="inte" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/tekhnologiinformasikomunikasi/kasi_tiga.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    I Gusti Ayu Kadek Yudiani, S.Sos
                            </div>
                            <div class="desc">Jabatan : Seksi Keamanan Informasi dan Telekomunikasi</div>
                            <div class="desc">NIP. 196606251986032006</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Seksi Infrastruktur & Teknologi-->

    <!-- Modal Bidang Layanan e-Gov -->
    <div class="modal fade" id="egov" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/egov/kabid_2.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    I Nyoman Sutama, S.Pd, M.Si
                            </div>
                            <div class="desc">Jabatan : Bidang Layanan e-Gov </div>
                            <div class="desc">NIP. 196212311983041033</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Layanan e-Gov -->
    <!-- Modal Seksi Pengembangan Aplikasi -->
    <div class="modal fade" id="pengembanganaplikasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/egov/kasi_satu.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    I Made Ada Atmika, SH
                            </div>
                            <div class="desc">Jabatan : Seksi Pengembangan Aplikasi </div>
                            <div class="desc">NIP. 196201271983031021</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Layanan e-Gov -->
    <!-- Modal Seksi Pengembangan Ekosistem e-Gov-->
    <div class="modal fade" id="ekosistemegov" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/egov/kasi_dua.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    Ida Bagus Putu Wiryawan, SE,M.Si
                            </div>
                            <div class="desc">Jabatan : Seksi Pengembangan Ekosistem e-Gov </div>
                            <div class="desc">NIP. 196704121994031017</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Layanan e-Gov -->
     <!-- Modal Seksi Pengembangan Ekosistem e-Gov-->
     <div class="modal fade" id="tatakelola" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/egov/kasi_tiga.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                                    I Ketut Alit Atmaja, S.Sos
                            </div>
                            <div class="desc">Jabatan : Seksi Tata Kelola e-Gov </div>
                            <div class="desc">NIP. 196608281988121002</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Layanan e-Gov -->
    <!-- Modal Bidang Persandian dan Statistik-->
    <div class="modal fade" id="persandian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/persandianstatistik/kabid.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">
                            </div>
                            <div class="desc">Jabatan : </div>
                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Persandian dan Statistik -->

     <!-- Modal Bidang Persandian dan Statistik-->
     <div class="modal fade" id="kelolapersandian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/persandianstatistik/kasi_satu.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">G.A. Nyoman Rima Kusuma Dewi, SE,M.Si
                            </div>
                            <div class="desc">Jabatan : Seksi Tata Kelola Persandian</div>
                            <div class="desc">NIP. 197405091998032006</div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Persandian dan Statistik -->
     <!-- Modal Seksi Operasional Pengamanan Persandian-->
     <div class="modal fade" id="pengamanankesandian" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/persandianstatistik/kasi_dua.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">Drs. Anak Agung Mayun
                            </div>
                            <div class="desc">Jabatan : Seksi Operasional Pengamanan Persandian</div>
                            <div class="desc">NIP. 196512311994031100 </div>

                        </div>
                        <button type="button" class=" btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Persandian dan Statistik -->
     <!-- Modal Seksi Statistik-->
     <div class="modal fade" id="statistik" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-body">
                    <div class="card hovercard" style="margin-left: 0px">
                        <div class="cardheader"> </div>
                        <div class="avatar">
                            <img src='{{url("assets/images/pegawai/persandianstatistik/kasi_tiga.jpg")}}' style="background-size: cover;   overflow: hidden;" alt="" onerror="this.src = 'assets/images/pegawai/unnamed.jpg';" ></a>
                        </div>
                        <div class="info">
                            <div class="title">I Made Subrata, S.Sos
                            </div>
                            <div class="desc">Jabatan : Seksi Statistik</div>
                            <div class="desc">NIP. 196105111983031023</div>

                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Bidang Persandian dan Statistik -->
</body>
</html>