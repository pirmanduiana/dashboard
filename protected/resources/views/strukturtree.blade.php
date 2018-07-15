<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Struktur Organisasi</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .overlay {
                height: 0%;
                width: 100%;
                position: fixed;
                z-index: 1;
                top: 0;
                left: 0;
                background-color: rgba(255, 255, 255, 0.9);
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


            .hv-wrapper {
  display: flex; }
  .hv-wrapper .hv-item {
    display: flex;
    flex-direction: column;
    margin: auto; }
    .hv-wrapper .hv-item .hv-item-parent {
      margin-bottom: 50px;
      position: relative;
      display: flex;
      justify-content: center; }
      .hv-wrapper .hv-item .hv-item-parent:after {
        position: absolute;
        content: '';
        width: 2px;
        height: 25px;
        bottom: 0;
        left: 50%;
        background-color: rgba(255, 255, 255, 0.7);
        transform: translateY(100%); }
    .hv-wrapper .hv-item .hv-item-children {
      display: flex;
      justify-content: center; }
      .hv-wrapper .hv-item .hv-item-children .hv-item-child {
        padding: 0 15px;
        position: relative; }
        .hv-wrapper .hv-item .hv-item-children .hv-item-child:before, .hv-wrapper .hv-item .hv-item-children .hv-item-child:not(:only-child):after {
          content: '';
          position: absolute;
          background-color: rgba(255, 255, 255, 0.7);
          left: 0; }
        .hv-wrapper .hv-item .hv-item-children .hv-item-child:before {
          left: 50%;
          top: 0;
          transform: translateY(-100%);
          width: 2px;
          height: 25px; }
        .hv-wrapper .hv-item .hv-item-children .hv-item-child:after {
          top: -25px;
          transform: translateY(-100%);
          height: 2px;
          width: 100%; }
        .hv-wrapper .hv-item .hv-item-children .hv-item-child:first-child:after {
          left: 50%;
          width: 50%; }
        .hv-wrapper .hv-item .hv-item-children .hv-item-child:last-child:after {
          width: calc(50% + 1px); }

          html, body {
  height: 100%;
  font-family: 'Poppins', sans-serif;
  padding: 0;
  margin: 0; }

section {
  min-height: 100%;
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 50px 0;
  position: relative; }
  section .github-badge {
    position: absolute;
    top: 0;
    left: 0; }
  section h1 {
    text-align: center;
    margin-bottom: 70px; }
  section .hv-container {
    flex-grow: 1;
    overflow: auto;
    justify-content: center; }

.basic-style {
  background-color: #EFE6E2; }
  .basic-style > h1 {
    color: #ac2222; }

p.simple-card {
  margin: 0;
  background-color: #fff;
  color: #DE5454;
  padding: 30px;
  border-radius: 7px;
  min-width: 100px;
  text-align: center;
  box-shadow: 0 3px 6px rgba(204, 131, 103, 0.22); }

.hv-item-parent p {
  font-weight: bold;
  color: #DE5454; }

.management-hierarchy {
  background-color: #303840; }
  .management-hierarchy > h1 {
    color: #FFF; }
  .management-hierarchy .person {
    text-align: center; }
    .management-hierarchy .person > img {
      height: 110px;
      border: 5px solid #FFF;
      border-radius: 50%;
      overflow: hidden;
      background-color: #fff; }
    .management-hierarchy .person > p.name {
      background-color: #fff;
      padding: 5px 10px;
      border-radius: 5px;
      font-size: 12px;
      font-weight: normal;
      color: #a94442;
      margin: 0;
      position: relative; }
      .management-hierarchy .person > p.name b {
        color: #346690 }
      .management-hierarchy .person > p.name:before {
        content: '';
        position: absolute;
        width: 2px;
        height: 8px;
        background-color: #fff;
        left: 50%;
        top: 0;
        transform: translateY(-100%); }

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
    </head>
<body>
    <!--Management Hierarchy-->
    <section class="management-hierarchy">
        <h1> STRUKTUR ORGANISASI DINAS KOMUNIKASI DAN INFORMASI <br>KABUPATEN BADUNG</h1>
        <div class="hv-container">
            <div class="hv-wrapper">
                <!-- Key component -->
                <div class="hv-item">
                    <div class="hv-item-parent">
                        <div class="person">
                            <img src="https://pbs.twimg.com/profile_images/762654833455366144/QqQhkuK5.jpg" alt="">
                            <p class="name">
                                <b>Kepala Dinas</b><br>
                                I Wayan Weda Dharmaja S.IP</br>
                            </p>
                        </div>
                    </div>

                     <!-- 1 -->
                    <div class="hv-item-children">
                        <div class="hv-item-child">
                            <!-- Key component -->
                            <div class="hv-item">
                                <div class="hv-item-parent">
                                </div>
                                <div class="hv-item-children">
                                    <div class="hv-item-child">
                                        <div class="hv-item">
                                            <div class="hv-item-parent">
                                            </div>
                                            <div class="hv-item-children">
                                                <div class="hv-item-child">
                                                    <!-- Key component -->
                                                    <div class="hv-item">
                                                        <div class="hv-item-parent">
                                                        </div>
                                                        <div class="hv-item-children">
                                                            <div class="hv-item-child">
                                                                <div class="hv-item">
                                                                    <div class="hv-item-parent">
                                                                    </div>
                                                                    <div class="hv-item-children">
                                                                            <div class="hv-item-child">
                                                                                    <!-- Key component -->
                                                                                    <div class="hv-item">
                                                                                        <div class="hv-item-parent">
                                                                                        </div>
                                                                                        <div class="hv-item-children">
                                                                                            <div class="hv-item-child">
                                                                                                <div class="hv-item">
                                                                                                    <div class="hv-item-parent">
                                                                                                    </div>
                                                                                                    <div class="hv-item-children">
                                                                                                            <div class="hv-item-child">
                                                                                                                <!-- Key component -->
                                                                                                                <div class="hv-item">
                                                                                                                    <div class="hv-item-parent">
                                                                                                                    </div>
                                                                                                                    <div class="hv-item-children">
                                                                                                                        <!-- 1 -->
                                                                                                                        <div class="hv-item-child">
                                                                                                                            <div class="hv-item">
                                                                                                                                <div class="hv-item-parent">
                                                                                                                                        <div class="person">
                                                                                                                                            <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="">
                                                                                                                                            <p class="name">
                                                                                                                                                <b>Bidang Pengelolaan Informasi Publik</b><br>&nbsp;<br>&nbsp;
                                                                                                                                            </p>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                <!-- sub 1-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                    <div class="hv-item-child">
                                                                                                                                        <div class="hv-item">
                                                                                                                                            <div class="hv-item-parent">
                                                                                                                                                <div class="person">
                                                                                                                                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                    <p class="name">
                                                                                                                                                        <b>Seksi Layanan Informasi Publik</b>
                                                                                                                                                        </br>Fuji Rahmawati,S.Kom,M.A.P
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <!-- sub 1-->
                                                                                                                                <!-- sub 2-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                    <div class="hv-item-child">
                                                                                                                                        <div class="hv-item">
                                                                                                                                            <div class="hv-item-parent">
                                                                                                                                                <div class="person">
                                                                                                                                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                    <p class="name">
                                                                                                                                                        <b>Seksi Pengelolaan Informasi Publik</b>
                                                                                                                                                        </br>Dra. Ni Nyoman Suryaniati
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <!-- sub 2-->
                                                                                                                                <!-- sub 3-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                    <div class="hv-item-child">
                                                                                                                                        <div class="person">
                                                                                                                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                            <p class="name">
                                                                                                                                                <b>Seksi Media Publik</b>
                                                                                                                                                </br>Ni Luh Putu Herawati Sucandra,SSTP,M.Si
                                                                                                                                            </p>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                               <!-- sub 3-->
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <!--1-->
                                                                                                                        <!-- 2 -->
                                                                                                                        <div class="hv-item-child">
                                                                                                                            <div class="hv-item">
                                                                                                                                <div class="hv-item-parent">
                                                                                                                                        <div class="person">
                                                                                                                                            <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="">
                                                                                                                                            <p class="name">
                                                                                                                                                <b>Bidang Pengelolaan Komunikasi Publik</b>
                                                                                                                                                </br>A.A. Rat Ratu Manacika, STP
                                                                                                                                            </p>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                               <!-- sub 1-->
                                                                                                                               <div class="hv-item-children">
                                                                                                                                    <div class="hv-item-child">
                                                                                                                                        <div class="hv-item">
                                                                                                                                            <div class="hv-item-parent">
                                                                                                                                                <div class="person">
                                                                                                                                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                    <p class="name">
                                                                                                                                                        <b>Seksi Pengelolaan Opini Publik</b>
                                                                                                                                                        </br>I Gst. Ag. Ngr. Adi Parwatha Kepakisan,S.Sos
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <!-- sub 1-->
                                                                                                                                <!-- sub 2-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                    <div class="hv-item-child">
                                                                                                                                        <div class="hv-item">
                                                                                                                                            <div class="hv-item-parent">
                                                                                                                                                <div class="person">
                                                                                                                                                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                    <p class="name">
                                                                                                                                                        <b>Seksi Pemberdayaan Kelompok Komunikasi Masyarakat</b>
                                                                                                                                                        </br>I Nengah Jaya,SP, M.Si
                                                                                                                                                    </p>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                                <!-- sub 2-->
                                                                                                                                <!-- sub 3-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                    <div class="hv-item-child">
                                                                                                                                        <div class="person">
                                                                                                                                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                            <p class="name">
                                                                                                                                                <b>Seksi Kemitraan Komunikasi Publik</b>
                                                                                                                                                </br>Ni Made Rasmini,S.Sos
                                                                                                                                            </p>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                </div>
                                                                                                                               <!-- sub 3-->
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                         <!-- 3 -->
                                                                                                                        <div class="hv-item-child">
                                                                                                                            <div class="hv-item">
                                                                                                                                <div class="hv-item-parent">
                                                                                                                                        <div class="person">
                                                                                                                                            <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="">
                                                                                                                                            <p class="name">
                                                                                                                                                <b>Bidang Teknologi Informasi dan Komunikasi</b>
                                                                                                                                                </br>Dewa Made Ardita, SE,M.Si
                                                                                                                                            </p>
                                                                                                                                        </div>
                                                                                                                                </div>
                                                                                                                                <!-- sub 1-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="hv-item">
                                                                                                                                                <div class="hv-item-parent">
                                                                                                                                                    <div class="person">
                                                                                                                                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                        <p class="name">
                                                                                                                                                            <b>Seksi Infrastruktur dan Teknologi</b>
                                                                                                                                                            </br>Anak Agung Ngurah Putra Oyong Wirayoga,ST,MT
                                                                                                                                                        </p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- sub 1-->
                                                                                                                                    <!-- sub 2-->
                                                                                                                                    <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="hv-item">
                                                                                                                                                <div class="hv-item-parent">
                                                                                                                                                    <div class="person">
                                                                                                                                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                        <p class="name">
                                                                                                                                                            <b>Seksi Pengelolaan Data dan Integrasi Sistem Informasi</b>
                                                                                                                                                        </p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- sub 2-->
                                                                                                                                    <!-- sub 3-->
                                                                                                                                    <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="person">
                                                                                                                                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                <p class="name">
                                                                                                                                                    <b>Seksi Keamanan Informasi dan Telekomunikasi</b>
                                                                                                                                                    </br>I Gusti Ayu Kadek Yudiani, S.Sos
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                   <!-- sub 3-->
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <!-- 3 -->
                                                                                                                        <!-- 4 -->
                                                                                                                        <div class="hv-item-child">
                                                                                                                                <div class="hv-item">
                                                                                                                                    <div class="hv-item-parent">
                                                                                                                                            <div class="person">
                                                                                                                                                <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="">
                                                                                                                                                <p class="name">
                                                                                                                                                    <b>Bidang Layanan e-Gov</b>
                                                                                                                                                    </br>I Nyoman Sutama, S.Pd, M.Si
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- sub 1-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="hv-item">
                                                                                                                                                <div class="hv-item-parent">
                                                                                                                                                    <div class="person">
                                                                                                                                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                        <p class="name">
                                                                                                                                                            <b>Seksi Pengembangan Aplikasi</b>
                                                                                                                                                            </br>I Made Ada Atmika, SH
                                                                                                                                                        </p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- sub 1-->
                                                                                                                                    <!-- sub 2-->
                                                                                                                                    <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="hv-item">
                                                                                                                                                <div class="hv-item-parent">
                                                                                                                                                    <div class="person">
                                                                                                                                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                        <p class="name">
                                                                                                                                                            <b>Seksi Pengembangan Ekosistem e-Gov</b>
                                                                                                                                                            </br>Ida Bagus Putu Wiryawan, SE,M.Si
                                                                                                                                                        </p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- sub 2-->
                                                                                                                                    <!-- sub 3-->
                                                                                                                                    <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="person">
                                                                                                                                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                <p class="name">
                                                                                                                                                    <b>Seksi Tata Kelola e-Gov </b>
                                                                                                                                                    </br>I Ketut Alit Atmaja, S.Sos
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                   <!-- sub 3-->
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        <!-- 4 -->
                                                                                                                        <!-- 5 -->
                                                                                                                         <div class="hv-item-child">
                                                                                                                                <div class="hv-item">
                                                                                                                                    <div class="hv-item-parent">
                                                                                                                                            <div class="person">
                                                                                                                                                <img src="https://randomuser.me/api/portraits/women/50.jpg" alt="">
                                                                                                                                                <p class="name">
                                                                                                                                                        <b>Bidang Persandian dan Statistik </b><br>&nbsp;<br>&nbsp;
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                    </div>
                                                                                                                                   <!-- sub 1-->
                                                                                                                                <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="hv-item">
                                                                                                                                                <div class="hv-item-parent">
                                                                                                                                                    <div class="person">
                                                                                                                                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                        <p class="name">
                                                                                                                                                            <b>Seksi Tata Kelola Persandian</b>
                                                                                                                                                            </br>G.A. Nyoman Rima Kusuma Dewi, SE,M.Si
                                                                                                                                                        </p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- sub 1-->
                                                                                                                                    <!-- sub 2-->
                                                                                                                                    <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="hv-item">
                                                                                                                                                <div class="hv-item-parent">
                                                                                                                                                    <div class="person">
                                                                                                                                                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                        <p class="name">
                                                                                                                                                            <b>Seksi Operasional Pengamanan Persandian</b>
                                                                                                                                                            </br>Drs. Anak Agung Mayun
                                                                                                                                                        </p>
                                                                                                                                                    </div>
                                                                                                                                                </div>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                    <!-- sub 2-->
                                                                                                                                    <!-- sub 3-->
                                                                                                                                    <div class="hv-item-children">
                                                                                                                                        <div class="hv-item-child">
                                                                                                                                            <div class="person">
                                                                                                                                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="">
                                                                                                                                                <p class="name">
                                                                                                                                                    <b>Seksi Statistik</b>
                                                                                                                                                    </br>I Made Subrata, S.Sos
                                                                                                                                                </p>
                                                                                                                                            </div>
                                                                                                                                        </div>
                                                                                                                                    </div>
                                                                                                                                   <!-- sub 3-->
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        <!-- 5 -->
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hv-item-child">
                            <!-- Key component -->
                            <div class="hv-item">
                                <div class="hv-item-parent">
                                    <div class="person">
                                        <img src="https://randomuser.me/api/portraits/men/3.jpg" alt="">
                                        <p class="name">
                                            <b>Sekretariat</b>
                                            </br>Anak Agung Gede Arimayun,STP, M.PAR
                                        </p>
                                    </div>
                                </div>
                                <div class="hv-item-children">
                                    <div class="hv-item-child">
                                        <div class="person">
                                            <img src="https://randomuser.me/api/portraits/men/41.jpg" alt="">
                                            <p class="name">
                                                    <b>Sub Bag Perencanaan dan Pelaporan</b>
                                                </br>Anak Agung Yanik Cahyani, SE
                                            </p>
                                        </div>
                                    </div>
                                    <div class="hv-item-child">
                                        <div class="person">
                                            <img src="https://randomuser.me/api/portraits/men/90.jpg" alt="">
                                            <p class="name">
                                                        <b>Sub Bag Umum dan Kepeg</b>
                                                        </br>Dra. A.A. Ketut Sumarni
                                            </p>
                                        </div>
                                    </div>
                                    <div class="hv-item-child">
                                            <div class="person">
                                                <img src="https://randomuser.me/api/portraits/men/90.jpg" alt="">
                                                        <p class="name">
                                                                <b>Sub Bag Keuangan</b>
                                                            </br>Anak Agung Candrawati, SE
                                                        </p>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-user"></i><strong>&nbsp;&nbsp; Informasi Detail</strong></h4>
            </div>
            <div class="modal-body">
                <center>
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="" height="450px">
                    <p style="color:#636b6f;font-size:18px">
                        <b>Seksi Pengelolaan Data dan Integrasi Sistem Informasi</b>
                    </p>
                </center>
                <p style="color:#636b6f;font-size:14px">
                    <b>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : </b> <br>
                    <b>NIP &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b> <br>
                    <b>Jabatan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : </b> <br>
                    <b>Pendidikan &nbsp;&nbsp;: </b>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>