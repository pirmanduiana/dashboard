@extends('master')
@section('dashboard')
    <div class="section background">
        <div class="contents">
            <div class="rows row-first">
                <a class="column c1 material_ripple" href="#" data-color="rgba(255,255,255, .4)">
                    <div class="image">
                        <img src="./assets/images/icons/ico-visimisi.png" alt="">
                    </div>
                    <h2>e-Kinerja</h2>
                </a>

                <a class="column c2 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-organisasi.png" alt="">
                    </div>
                    <h2>Absensi Online</h2>
                </a>

                <a class="column c3 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-foto.png" alt="">
                    </div>
                    <h2>Absensi Mobile</h2>
                </a>                
            </div>
            <div class="rows row-second">
                <a class="column c4 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-video.png" alt="">
                    </div>
                    <h2>b-wise</h2>
                </a>
                
                <a class="column c5 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>e-Surat</h2>
                </a>
                <a class="column c6 material_ripple" href="#">
                    <div class="image">
                        <img src="./assets/images/icons/ico-pemkab.png" alt="">
                    </div>
                    <h2>e-Agenda</h2>
                </a>                
            </div>
        </div>
    </div>

    <!-- Modal Box Video 1 -->
    <div id="myNav1" class="overlay fullModal">
        <a href="javascript:void(0)" class="closebtn" onclick="">&times;</a>
        <div class="overlay-content">
            <div class="align-center" id="dvModalBox1">
                <video id='apps-video1' class='video-js'>
                    <!-- video rendered here -->
                </video>
            </div>
        </div>
    </div>            
    <!-- End Modal -->    
    <script>var url_player1 = '{{ url("assets/videos/sequence_1.mp4") }}';</script>
    <script>var url_player2 = '{{ url("assets/videos/sequence_2.mp4") }}';</script>    
    <script>var url_player3 = '{{ url("assets/videos/sequence_2.mp4") }}';</script>            
    <script>var url_player4 = '{{ url("assets/videos/sequence_2.mp4") }}';</script>        
    <script>var url_player5 = '{{ url("assets/videos/sequence_2.mp4") }}';</script>            
    <script>var url_player6 = '{{ url("assets/videos/sequence_2.mp4") }}';</script>    
@endsection


@section('scripts')            
    {{ Html::script('assets/js/apps.js') }}
@endsection