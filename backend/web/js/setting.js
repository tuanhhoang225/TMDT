var iCheck = $('input[type="checkbox"].minimal, input[type="radio"].minimal');

iCheck.iCheck({
    checkboxClass: 'icheckbox_minimal-blue',
    radioClass: 'iradio_minimal-blue'
});

iCheck.on('ifChecked', function () {
    if (!$(this).hasClass('none-action')) {
        $(this).parents().eq(2).css('background-color', 'rgb(255, 255, 213)');
    }
});

iCheck.on('ifUnchecked', function () {
    if (!$(this).hasClass('none-action')) {
        $(this).parents().eq(2).css('background-color', '');
    }
});


var myCheckbox = $("[name='switch-checkbox']");

myCheckbox.bootstrapSwitch();

myCheckbox.on('switchChange.bootstrapSwitch', function (event, status) {

    $('#loader').css('display', 'block');

    var form = new FormData();
    form.append("id", $(this).data('id'));
    form.append("table", $(this).data('table'));

    var settings = {
        "url": base + $(this).data('action'),
        "method": "POST",
        "processData": false,
        "contentType": false,
        "data": form
    };

    $.ajax(settings).done(function (response) {
        $('#loader').css('display', 'none');

        $.notify('Cập nhật thành công', 'success');
    });

});
