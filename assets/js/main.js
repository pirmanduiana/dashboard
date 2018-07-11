
$(document).ready(function(){

    $(document).on('submit', '#tambah', function() {
        $.confirm({
            columnClass: 'col-md-6 col-md-offset-3',
            icon: 'fa fa-user',
            title: 'Berhasil Menyimpan Data',
            content: 'Terima Kasih Atas Partisipasi Anda.',
            autoClose: 'tutup|10000',
            type: 'dark',
            typeAnimated: true,
            buttons: {
                tutup: function () {
                    text: 'Tutup'
                }
            }
        });
    });

    $(".column.c5").on("click", function(){
        box5.play();
    });

});

var box1 = {};

var box2 = {};

var box3 = {};

var box4 = {};

var box5 = { 
    "play" : function(){
        document.getElementById("myNav").style.height = "100vh";
        $(".main-btn-action").css("margin-bottom","100px").css("transition","0.3s");
        var options = {};
        var player = videojs('my-player', options, function onPlayerReady() {            
            this.play();       
        });
        return true;
    },
    "pause" : function() {
        document.getElementById("myNav").style.height = "0%";
        $(".main-btn-action").css("margin-bottom","0").css("transition","0.3s");
        $(".video-js").each(function(key,item) {
            $(this)[key].player.pause();    
        });
        return true;
    }
};

var box6 = {};

var box7 = {};

var box8 = {};