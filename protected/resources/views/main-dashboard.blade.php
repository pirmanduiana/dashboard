@extends('master')
@section('dashboard')
    <div class="section background">
        <div class="contents">
            <div class="rows">
                <a class="column c1 material_ripple" href="#" data-color="rgba(255,255,255, .4)">
                    <div class="image">
                        <img src="./assets/images/icons/ico-visimisi.png" alt="">
                    </div>
                    <h2>Visi dan Misi</h2>
                </a>

                <a class="column c2 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-organisasi.png" alt="">
                    </div>
                    <h2>Struktur Organisasi</h2>
                </a>

                <a class="column c3 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-edukasi.png" alt="">
                    </div>
                    <h2>Video Edukasi</h2>
                </a>

                <a class="column c4 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-video.png" alt="">
                    </div>
                    <h2>Video Profile</h2>
                </a>
                
                <a class="column c5 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>Website Pemkab</h2>
                </a>
            </div>
            <div class="rows">
                <a class="column c6 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>Website PPID</h2>
                </a>
                <a class="column c7 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-kominfo.png" alt="">
                    </div>
                    <h2>Website Diskominfo</h2>
                </a>
                <a class="column c8 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-cctv.png" alt="">
                    </div>
                    <h2>Persebaran CCTV</h2>
                </a>
                <a class="column c9 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-wifi.png" alt="">
                    </div>
                    <h2>Persebaran Wifi</h2>
                </a>
                <a class="column c10 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-map.png" alt="">
                    </div>
                    <h2>Map Badung</h2>
                </a>
            </div>
        </div>
    </div>

    <!-- Modal Box Video 1 -->
    <div id="myNav2" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox2">
                <video id='apps-video2' class='video-js'>
                    <!-- video rendered here -->
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->
    <script>var url_video1 = '{{ url("assets/videos/sequence_1.mp4") }}';</script>
    <script>var url_video2 = '{{ url("assets/videos/sequence_2.mp4") }}';</script>     
    <script>var url_screensever = '{{ url("assets/videos/screensever.mp4") }}';</script> 

    <!-- Modal Box lainnya -->
    <div id="myNav_" class="overlay fullModal">
        <a href="#" class="closebtn" onclick="window.location.reload();">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox_">
                <!-- content embed -->
            </div>
        </div>
    </div>            
    <!-- End Modal -->

    <!-- playlist video -->
    <!-- Modal Box Video 1 -->
    <div id="myNavPl" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBoxPl">
                <video id="main-playlist" class="video-js">
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->
    <script>
        var url_visimisi = "{{ route('get.visimisi') }}";
        var url_struktur = "{{ route('get.struktur') }}";
        var url_badungkab = "{{ route('get.badungkab') }}";
        var url_kominfo = "{{ route('get.kominfo') }}";
        var url_ppid = "{{ route('get.ppid') }}";
        var url_badungmap = "{{ route('get.badungmap') }}";
    </script>

@endsection


@section('scripts')            
    {{ Html::script('assets/js/main.js') }}
@endsection