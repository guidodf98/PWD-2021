$(function () {
  $('#form-login').bootstrapValidator({

    message: 'Valor invalido',

    fields: {
      username: {
        validators: {
          notEmpty: {
            message: '<small class="text-danger">El nombre de usuario es requerido</small> <br>'
          },
          stringLength: {
            min: 4,
            message: '<small class="text-danger">Debe superar los 4 caracteres</small> <br>'
          }
        }
      },

      password: {
        validators: {
          notEmpty: {
            message: '<small class="text-danger">Completar campo</small>'
          },
          regexp: {
            message: '<small class="text-danger">Debe contener letras y numeros</small> <br>'
          },
          stringLength: {
            min: 8,
            message: '<small class="text-danger">Debe superar los 8 caracteres</small> <br>'
          },
          different: {
            field: 'username',
            message: '<small class="text-danger">La contraseña no debe ser igual al nombre del usuario</small>'
          }
        }
      },
    }
  })
});