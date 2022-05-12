$(function () {
  $('#form-login').bootstrapValidator({

    message: 'Valor invalido',

    fields: {
      usnombre: {
        validators: {
          notEmpty: {
            message: '<small class="text-danger">El nombre de usuario es requerido</small> <br>'
          },
          stringLength: {
            min: 1,
            max: 50,
            message: '<small class="text-danger">>Debe tener entre 1 y 50 caracteres</small> <br>'
          }
        }
      },

      uspass: {
        validators: {
          notEmpty: {
            message: '<small class="text-danger">La contraseña es requerida</small>'
          },
          regexp: {
            regexp: /^[0-9]*$/,
            message: '<small class="text-danger">Debe contener solo numeros</small> <br>'
          },
          stringLength: {
            min: 1,
            max: 11,
            message: '<small class="text-danger">Debe tener entre 1 y 11 caracteres</small> <br>'
          },
          different: {
            field: 'usnombre',
            message: '<small class="text-danger">La contraseña no debe ser igual al nombre del usuario</small>'
          }
        }
      },
    }
  })
});