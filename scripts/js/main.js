function clikr(func){
    switch (func){
        case "accept_cookies":
            Cookies.set('cookieaccepted', 'yes', { expires: 365 })
            location.reload();
    }
}
function ldr(func){
    switch (func){
        case "killmail":
            alert("Oops, the validator has detected a not correct email address");
    }
}