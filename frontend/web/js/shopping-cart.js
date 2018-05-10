var add_cart = function (product_id,user_id) {
    $.ajax({
        type: 'POST',
        dataType: 'json',
        url: frontend + 'ajax/add-cart',
        data: {
            product_id: product_id,
            user_id: user_id
        },
        error: function () {
        },
        success: function (data) {
            console.log(2);
        }
    });

};