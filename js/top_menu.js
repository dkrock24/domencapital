/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    
    var x = document.getElementById("myTopnav");
    
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


function scrollup() {
    $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });
    
    $("#myBtn").click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
}

/** modal */

