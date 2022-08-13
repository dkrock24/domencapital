
  $(document).ready(function(){

    var infoBar =  document.querySelector(".cookies-infobar");
    var btnAccept = document.querySelector("#cookies-infobar-close");

    // Check if user has already accepted the notification
    if(wasAccepted()) {
        hideInfobar();
        return;
    }

    //listen for the click event on Accept button
    btnAccept.addEventListener("click", function (e) {
        e.preventDefault();
        hideInfobar();
        saveAcceptInCookies(7);
    });

    //hide cookie info bar
    function hideInfobar () {
        infoBar.className = infoBar.classList.value + " cookies-infobar_accepted";
    }

    // Check if user has already accepted the notification
    function wasAccepted () {
        return checkCookie() === "1";
    }

    // get cookie
    function checkCookie () {
        var name = "domencapital=";
        var cookies = document.cookie.split(';');
        for(var i = 0; i < cookies.length; i++) {
            var cookie = cookies[i];
            while (cookie.charAt(0)==' ') {
                cookie = cookie.substring(1);
            }
            
            if (cookie.indexOf(name) === 0) {
                return cookie.substring(name.length, cookie.length);
            }
        }
        return "";
    };

    //save cookie
    function saveAcceptInCookies (daysOfValidity) {
        var now = new Date();
        var time = now.getTime() + (daysOfValidity * 24 * 60 * 60 * 1000);
        var newTime = new Date(now.setTime(time));
      
        newTime = newTime.toUTCString();
      
        document.cookie = "domencapital=1; expires=" + newTime + "; path=/";
    }
});