<style>
        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgb(0,0,0);
            background-color: rgba(255, 255, 255, 0.9);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay a {
            
        }
        .overlay .overlay-content {
            position: relative;
            top: 0;
            width: 100%;
            text-align: center;
            transform: translate(0, 0);
            height: 100vh;
        }
        .my-player-dimensions.vjs-fluid {
            padding-top: 100vh !important;
        }
        .overlay p, .overlay a {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        .overlay a:hover, .overlay a:focus {
            color: #040404;
        }
        .overlay .closebtn {
            /* position: absolute; */
            top: 20px;
            right: 45px;
            font-size: 60px;
        }   
        @media screen and (max-height: 450px) {
            .overlay {overflow-y: auto;}
            .overlay a {font-size: 20px}
            .overlay .closebtn {
                font-size: 40px;
                top: 15px;
                right: 35px;
            }
        }
    </style>

<div class="footer">
    <div class="main-btn-action">
        <div class="content-btn-action">
            <a class="btn-action prev" href="#"><i class="fa fa-caret-left" aria-hidden="true"></i></a>
            <a class="btn-action home" href="#"><i class="fa fa-home" aria-hidden="true" onclick="box5.pause();"></i></a>
            <a class="btn-action next" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="copyright">
        <p> © Copyright 2018 Dinas Komunikasi dan Informasi Kabupaten Badung</p>
    </div>

    <!-- Modal Box Video 5 -->
    <div id="myNav5" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox5">
                <video id='my-player' class='video-js' controls preload='auto' poster='//vjs.zencdn.net/v/oceans.png' data-setup='{"fluid": true}'>
                    <source src='{{ url("assets/videos/sequence_1.mp4") }}' type='video/mp4'></source>
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->

    <!-- Modal Box Video 2 -->
    <div id="myNav2" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox2">
                <!-- video embed -->
            </div>
        </div>
    </div>            
    <!-- End Modal -->

    <!-- Modal Box lainnya -->
    <div id="myNav_" class="overlay">
        <a href="#" class="closebtn" onclick="box1.sleep();">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox_">
                <!-- content embed -->
            </div>
        </div>
    </div>            
    <!-- End Modal -->
</div>

<script>
    var url_visimisi = "{{ route('get.visimisi') }}";
    var url_struktur = "{{ route('get.struktur') }}";
    var url_badungkab = "{{ route('get.badungkab') }}";
    var url_kominfo = "{{ route('get.kominfo') }}";
    var url_ppid = "{{ route('get.ppid') }}";
    var url_badungmap = "{{ route('get.badungmap') }}";
</script>

