function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


$('.item_add img').click(function () {
    var cart = JSON.parse(getCookie('cart'));

    var price = $(this).data('price');
    var id = $(this).data('id');

    if (cart !== null) {
       // kiem tra sp da co trong gio hang chua
        // neu co roi thi amount++

    } else {
        cart.push([id,price,1]);
        setCookie('cart',cart,3000000);
    }
});

function updateCart() {
 ///

}