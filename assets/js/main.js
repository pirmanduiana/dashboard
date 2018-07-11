
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

    video.play();

});


var video = {    
    "play" : function(){
        var options = {};
        var player = videojs('my-player', options, function onPlayerReady() {
            videojs.log('Your player is ready!');
            // In this context, `this` is the player that was created by Video.js.
            this.play();
            // How about an event listener?
            this.on('ended', function() {
                videojs.log('Awww...over so soon?!');
            });
        });
        return true;
    },
    "stop" : function() {
        var options = {};
        return player = videojs('my-player', options, function onPlayerReady() {
            videojs.log('Your player is ready!');
            // In this context, `this` is the player that was created by Video.js.
            this.stop();
            // How about an event listener?
            this.on('ended', function() {
                videojs.log('Awww...over so soon?!');
            });
        });
    }
};