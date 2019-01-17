document.addEventListener("DOMContentLoaded", () => {
    let parts = window.location.search.substr(1).split("&");
    let $_GET = {};

    for (let i = 0; i < parts.length; i++) {
        let temp = parts[i].split("=");
        $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
    }

    document.getElementById("Rec9").innerText = $_GET['randomN'].replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);});
    // console.log($_GET['randomN'])
});