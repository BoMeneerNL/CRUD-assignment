function clikr(func){
    switch (func){
        case "accept_cookies":
            Cookies.set('cookieaccepted', 'yes', { expires: 365 })
            location.reload();
    }
}