<style>
        .overlay {
            height: 0%;
            width: 100%;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .9);
            overflow-y: hidden;
            transition: 0.5s;
        }

        .overlay a {
            color:#ffffff;
            position: absolute;
            font-size: 60px;
            z-index: 999;
            background-color: rgba(255,255,255, .2);
            color: #ffffff;
            right: 2%;
            top: 5%;
            text-decoration: none;
            transition: 0.3s;
        }
        .overlay .overlay-content {
            position: relative;
            top: 0;
            width: 100%;
            transform: translate(0, 0);
            height: 100vh;
        }
        .my-player-dimensions.vjs-fluid {
            padding-top: 100vh !important;
        }
        .overlay p {
            padding: 8px;
            text-decoration: none;
            font-size: 36px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }
        .overlay a:hover, .overlay a:focus {
            background-color: rgba(255,255,255, .5);
        }

        .overlay .text-align p{
            text-align: center;
            color:#ffffff;
        }

        #myNav_ .overlay-content {
            overflow:auto;
        } 

        #myNav_.overlay .overlay-content {
            height: calc(90vh - 20px);
        }  

        #myNav_.overlay .overlay-content #dvModalBox_ {
            min-height: 100%;
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
            <a class="btn-action home" id="aBackButton" href="#" onclick=""><i class="fa fa-home" aria-hidden="true"></i></a>
            <a class="btn-action next" href="#"><i class="fa fa-caret-right" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="copyright">
        <p> © Copyright 2018 Dinas Komunikasi dan Informasi Kabupaten Badung</p>
    </div>

    <!-- Modal Box Video 2 -->
    <div id="myNav2" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox2">
                <video id='my-player2' class='video-js' controls preload='auto' poster='//vjs.zencdn.net/v/oceans.png' data-setup='{"fluid": true}'>
                    <source src='{{ url("assets/videos/sequence_2.mp4") }}' type='video/mp4'></source>
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->

    <!-- Modal Box Video 5 -->
    <div id="myNav5" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox5">
                <video id='my-player5' class='video-js' controls preload='auto' poster='//vjs.zencdn.net/v/oceans.png' data-setup='{"fluid": true}'>
                    <source src='{{ url("assets/videos/sequence_1.mp4") }}' type='video/mp4'></source>
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->

    <!-- Modal Box lainnya -->
    <div id="myNav_" class="overlay fullModal">
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

