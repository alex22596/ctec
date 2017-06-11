$("#formValidate").validate({
    rules: {
        nombreUsuario: {
            required: true
        },
        password: {
            required: true
        }
    },
    messages: {
        nombreUsuario:{
            required: "Debe de Ingresar su Nombre de Usuario."
        },
        password:{
            required: "Debe de Ingresar su Contraseña."
        }
    },
    errorElement : 'div',
    errorPlacement: function(error, element) {
        var placement = $(element).data('error');
        if (placement) {
            $(placement).append(error);
        } else {
            error.insertAfter(element);
        }
    }
});