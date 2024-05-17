$(document).ready(function(){
    $(window).on('scroll',function(){
        var scroll = $(window).scrollTop();
        if(scroll>=50){
            $(".sticky").addClass("stickyAdd");
        }else {
            $(".sticky").removeClass("stickyAdd");
        }
    })
    $(document).ready(function(){
        $("button").click(function(){
          $("#navbarId").toggle();
        });
      });

    var typed = new Typed(".element",{
        strings: ["Hanum","Suka Hip-Hop","Hip-Hop Enthusiastic"],
        smartBackspace:true,
        typeSpeed:100,
        backSpeed:100,
        loop:true,
        loopCount:Infinity,
        startDelay:1000
    })

    var waypoint = new Waypoint({
        element: document.getElementById('exp-id'),
        handler: function() {
            var p = document.querySelectorAll('.progress-bar');
            p[0].setAttribute("style", "width:75%;transition:1s all")
            p[1].setAttribute("style", "width:65%;transition:1.3s all")
            p[2].setAttribute("style", "width:40%;transition:1.5s all")
            p[3].setAttribute("style", "width:50%;transition:1.5s all")
        },
        offset:'90%',
      });

});