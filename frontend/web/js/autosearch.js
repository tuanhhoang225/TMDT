var i = 0;

$('#key-word').keyup(function () {
    var key = $("#key-word").val();
    if (key !== '') {

        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: frontend + 'ajax/search',
            data: {
                key: key
            },
            error: function () {
            },
            success: function (data) {
                for (var i = 0; i < data.length; i++) {
                    var product_box = $('.product-box');
                    var a = product_box.find('.box_price');
                    a.text(data[i]['price']);
                    product_box.find('.box_name').text(data[i]['title']);
                    product_box.find('.box_name').attr('href',data[i]['href']);

                    product_box.find('.image-product').attr('src',data[i]['avatar']);
                    $('.tu-anh').append(product_box.html());
                    console.log(a.text(data[i]['price']));
                }

                $("#search-auto").show();
                $("#icon-search-1").hide();
                $("#icon-search").show();

            }
        });

    }

});

