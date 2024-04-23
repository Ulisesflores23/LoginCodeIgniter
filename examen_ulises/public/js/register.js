$(document).ready(function(){

    $( "#btn-registrar" ).click(function(){
        validator();
    });

    var validator = function(){
        $("#form-register").validate({

            rules: {
                "email": {
                    required: !0,
                    email: !0,
                },
                "password": {
                    required: !0,
                    minLength: 6,
                },
                "password2": {
                    required: !0,
                    equalTo: "#password",
                }
            },
            messages: {
                "email": "<b style='color:red'>Por favor ingresa un correo valido. </b>",
                "password": {
                    required: "<b style='color:red'>Por favor ingrea una contraseña.</b>",
                    minLength: "<b style='color:red'>La contraseña debe de tener minimo 6 caracteres </b>",
                },
                "password2": {
                    required: "<b style='color:red'>Por favor reingrea una contraseña.</b>",
                    minLength: "<b style='color:red'>La contraseña debe de tener minimo 6 caracteres </b>",
                    equalTo: "<b style='color:red'>La contraseña deben ser iguales </b>",
                },
            },
            ignore:[],
            errorClass: "invalid-feedback animated fadeInUp",
            errorElement: "div",
            errorPlacement: function(e , a){
                JQuery(a).parents("#mb-3").append(e);
            },
            highlight: function(e){
                JQuery(e).closest("#mb-3").removeClass("is-invalid").addClass("is-invalid");
            },
            success:function(e){
                JQuery(e).closest("#mb-3").removeClass("is-invalid"), JQuery(e).remove();
            },

            submitHandler: function(form, event){

                event.preventDefault();

                var formData = new FormData($('#form-register')[0]);

                $.ajax({

                });
            }
        });
    }
});