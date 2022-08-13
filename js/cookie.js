function setCookie() {
    var cname = Math.round(new Date().getTime()/1000);

    const d = new Date();
    d.setTime(d.getTime() + (24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + ";" + expires + ";path=/";
}