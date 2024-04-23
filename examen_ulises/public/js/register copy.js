$(document).ready(function () {

    $("#btn-registrar").click(function () {
        validator();
    });

    var validator = function () {
        $("#form-register").validate({
            rules: {
                "email": {
                    required: true,
                    email: true,
                },
                "password": {
                    required: true,
                    minlength: 6,
                },
                "password2": {
                    required: true,
                    minlength: 6,
                    equalTo: "#password",
                }
            },
            messages: {
                "email": "<b style='color:#0055FF'>Por favor ingresa un correo valido. </b>",
                "password": {
                    required: "<b style='color:#0055FF'>Por favor ingrea una contraseña.</b>",
                    minlength: "<b style='color:#0055FF'>La contraseña debe de tener minimo 6 caracteres </b>",
                },
                "password2": {
                    required: "<b style='color:#0055FF'>Por favor reingrea una contraseña.</b>",
                    minlength: "<b style='color:#0055FF'>La contraseña debe de tener minimo 6 caracteres </b>",
                    equalTo: "<b style='color:#0055FF'>La contraseña deben ser iguales </b>",
                },
            },
            ignore: [],
            errorClass: "invalid-feedback animated fadeInUp",
            errorElement: "div",
            errorPlacement: function (e, a) {
                jQuery(a).parents(".mb-3").append(e);
            },
            highlight: function (e) {
                jQuery(e).closest(".mb-3").removeClass("is-invalid").addClass("is-invalid");
            },
            success: function (e) {
                jQuery(e).closest(".mb-3").removeClass("is-invalid"), jQuery(e).remove();
            },

            submitHandler: function (form, event) {

                event.preventDefault();

                var formData = new FormData($("#form-register")[0]);

                $.ajax({
                    url: base_url + '/registroUsuarios',
                    type: 'POST',
                    data: formData,
                    dataType: 'JSON',
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function(data){
                       // $('#page-loader').fadeIn('fast');
                    },
                    success : function(data){
                       // $('#page-loader').fadeOut('fast');

                        if(data.respuesta === "si"){
                            $('#msj-toast-success').html(data.msj);
                            $("#form-register")[0].reset();
                            $('#toast-success').toast('show');
                        }
                        else if(data.respuesta === "no"){
                            $('#msj-toast-error').html(data.msj);
                            $('#toast-error').toast('show');
                        }
                    }
                });
            }
        });
    }
});
