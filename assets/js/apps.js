$(document).ready(function(){

    $(".column.c1").on("click", function(){
        setTimeout(
            function() {
                box1.play();
        },
        500);
    });
    $(".column.c2").on("click", function(){
        setTimeout(
            function() {
                box2.play();
        },
        500);
    });
    $(".column.c3").on("click", function(){
        setTimeout(
            function() {
                box3.play();
        },
        500);
    });
    $(".column.c4").on("click", function(){
        setTimeout(
            function() {
                box4.play();
        },
        500);
    });
    $(".column.c5").on("click", function(){
        setTimeout(
            function() {
                box5.play();
        },
        500);
    });
    $(".column.c6").on("click", function(){
        setTimeout(
            function() {
                box6.play();
        },
        500);
    });    
});

var isPlaying = false;
var players = {
    "play" : function(video_url){
        player1 = videojs('apps-video1', {
            preload: 'auto',
            controls: true,
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
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();");        
        players.play(url_player1);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};

var box2 = {
    "play" : function() {
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();");        
        players.play(url_player2);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};

var box3 = {
    "play" : function() {
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();");        
        players.play(url_player3);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};

var box4 = {
    "play" : function() {
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();");        
        players.play(url_player4);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};

var box5 = {
    "play" : function() {
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();");        
        players.play(url_player5);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};

var box6 = {
    "play" : function() {
        document.getElementById("myNav1").style.height = "100vh";
        $(".main-btn-action").css("position","absolute").css("bottom","40px").css("left","50px").css("transition","all 0.4s").css("z-index","9999");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","80%").css("min-height","45px");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","20px;");
        $("#aBackButton").attr("onclick","box1.pause();");        
        players.play(url_player1);
    },
    "pause" : function() {
        document.getElementById("myNav1").style.height = "0%";
        $(".main-btn-action").css("position","unset").css("bottom","0").css("left","0").css("transition","all 0.4s").css("z-index","0");
        $(".main-btn-action > .content-btn-action > .btn-action").css("padding","5%").css("min-width","20%").css("min-height","unset");
        $(".overlay a").css("display","none");
        $(".overlay.overlay-content").css("padding","0px;");
        players.pause();
        return true;
    }
};