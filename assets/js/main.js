
$(document)
.on("submit", "form.js-register", function (event) {
    event.preventDefault();

    var _form = $(this);
    var _error = $(".js-error", _form);
    var dataObj = {
        email: $("input[type='email']", _form).val(), // * this is going to look for 'email' in _form. If not mentioned where to look into, the whole page has to be scanned!!
        password: $("input[type='password']", _form).val(),
    };

    if(dataObj.email.length < 6) {
        _error
            .text("Please enter a valid email address")
            .show();
        return false;
    } else if (dataObj.password.length < 11) {
        _error
            .text("Please enter a passphrase at least 11 characters long")
            .show();
        return false;
    }

    // * Assuming the code gets this far, we can start the ajax process
    _error.hide();
    $.ajax({
        type: 'POST',
        url: 'ajax/register.php',
        data: dataObj,
        dataType: 'json',
        async: true,
    })
        .done(function ajaxDone(data) {
        // * whatever data is
            console.log(data);
            if(data.redirect == undefined) {
                // window.location = data.redirect;
            } else if(data.error !== undefined) {
                _error
                    .text(data.error)
                    .show();
            }
        })
        .fail(function ajaxFailed(e) {
        // * this failed
        })
        .always(function ajaAlwaysDoThis(data) {
        // * Always do
            console.log('Always');
        })

    return false;
})