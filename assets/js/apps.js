var isPlaying = false;

var idleTime = 0;
var timeToAutoPlay = 6;
function timerIncrement() {
    idleTime = idleTime + 1;
    if (!isPlaying) {        
        if (idleTime == timeToAutoPlay) {
            console.log("iddle");            
            playList.play(0);
        }
    }

}
var playList = {
    "play" : function(idxToPlay){
        document.getElementById("myNavPl").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();").css("padding","30%");
        var videoList = [{
        sources: [{
            src: url_player1,
            controls: true,
            type: 'video/mp4'
            }]
        },
        {
            sources: [{
            src: url_player2,
            controls: true,
            type: 'video/mp4'
            }]
        },
        {
            sources: [{
            src: url_player3,
            controls: true,
            type: 'video/mp4'
            }]
        },
        {
            sources: [{
            src: url_player4,
            controls: true,
            type: 'video/mp4'
            }]
        },
        {
            sources: [{
            src: url_player5,
            controls: true,
            type: 'video/mp4'
            }]
        },
        {
            sources: [{
            src: url_player6,
            controls: true,
            type: 'video/mp4'
            }]
        }];
    
        playlist_apps_player = videojs(document.querySelector('#apps-playlist'), {
            inactivityTimeout: 0
        });
        playlist_apps_player.playlist(videoList, idxToPlay);
        playlist_apps_player.playlist.autoadvance(0);
        playlist_apps_player.playlist.repeat(true);
        playlist_apps_player.play();   
        isPlaying = true;
    },
    "pause" : function(){
        playlist_apps_player.pause();
    },
    "next" : function(){
        playlist_apps_player.playlist.next();
    },
    "prev" : function(){
        playlist_apps_player.playlist.previous();
    }
}

$(document).ready(function()
{
    var idleInterval = setInterval(timerIncrement, 2000); // 60000 = 1 minute

    $(".column.c1").on("click", function(){
        setTimeout(
            function() {
                playList.play(0);
        },
        500);
    });
    $(".column.c2").on("click", function(){
        setTimeout(
            function() {
                playList.play(1);
        },
        500);
    });
    $(".column.c3").on("click", function(){
        setTimeout(
            function() {
                playList.play(2);
        },
        500);
    });
    $(".column.c4").on("click", function(){
        setTimeout(
            function() {
                playList.play(3);
        },
        500);
    });
    $(".column.c5").on("click", function(){
        setTimeout(
            function() {
                playList.play(4);
        },
        500);
    });
    $(".column.c6").on("click", function(){
        setTimeout(
            function() {
                playList.play(5);
        },
        500);
    }); 
    
    $(document.body).addClass("apps");
    
});



var players = {
    "play" : function(video_url){
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();").css("padding","30%");
        player1 = videojs('apps-video1', {
            preload: 'auto',
            controls: false,
            fluid: true,
            loop: true,
            sources: [{
                src: video_url,
                type: 'video/mp4'
            }]
        });
        if (!isPlaying) {
            player1.play();         
            isPlaying = true;
        }
        return true;
    },
    "pause" : function(){
        isPlaying = false;
        location.reload();
    }
}


var box1 = {
    "play" : function() {        
        players.play(url_player1);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";        
        players.pause();
        return true;
    }
};

var box2 = {
    "play" : function() {        
        players.play(url_player2);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        players.pause();
        return true;
    }
};

var box3 = {
    "play" : function() {        
        players.play(url_player3);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        players.pause();
        return true;
    }
};

var box4 = {
    "play" : function() {        
        players.play(url_player4);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        players.pause();
        return true;
    }
};

var box5 = {
    "play" : function() {        
        players.play(url_player5);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        players.pause();
        return true;
    }
};

var box6 = {
    "play" : function() {        
        players.play(url_player6);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        players.pause();
        return true;
    }
};