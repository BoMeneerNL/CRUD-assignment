function redr(){
    window.location.href = 'account?exit=yes';
}
function clikr(func) {
    switch (func) {
        case "accept_cookies":
            Cookies.set('cookieaccepted', 'yes', {expires: 365})
            Cookies.set('choosenlanguage', 'en', {expires: 7, path: '/crud-opdracht'})
            location.reload();
    }
}

try {
    var e = document.getElementById("country");

    function show() {
        var as = document.forms[0].country.value;
        console.log(as);
        Cookies.remove('selecco',{ path: '' })
        Cookies.set('selecco', as, {expires: 7, path: '/crud-opdracht'})
        location.reload();
    }

    e.onchange = show;
} catch (e) {
}