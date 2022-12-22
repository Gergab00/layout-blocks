import jQuery from 'jquery';

(function( $ ) {
	'use strict';
    $('#submit').on('click', function(e) {
        e.preventDefault();

        $.ajax({
            url : contact_form.ajaxUrl,
            type: 'post',
            dataType: 'json',
            data: {
                action : 'contact_form',
                nonce : contact_form.contact_formNonce,
                name: $('#name').val(),
                email: $('#email').val(),
                message: $('#message').val(),
            },
            beforeSend: function(){
                $('.frm-message').show().removeClass(['alert-danger','alert-success', 'd-none']).text('Sending...');
                $('#button-addon2').prop('disabled', true);
            }})
            .done( function(res) {
                console.table(res);
                const noticeClass = res.status === 1 ? 'alert-success' : 'alert-danger';
                $('.frm-message').removeClass([['alert-danger','alert-success', 'd-none']]).addClass(noticeClass).text(res.message);
            })
            .always(function(){
                $('#button-addon2').prop('disabled', false);
                $('#contact_form')[0].reset();
            })
    });
})( jQuery );