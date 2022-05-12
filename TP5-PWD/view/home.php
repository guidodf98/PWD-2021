<?php include_once "../configuracion.php" ?>

<?php $title = 'Home';
include_once 'includes/head.php' ?>
<?php include_once 'includes/navbar.php' ?>

<div class="container text-center mt-20vh">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Usuario</th>
        <th scope="col">Contraseña</th>
        <th scope="col">Roles</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>admin</td>
        <td>123123</td>
        <td>administrador - miembro</td>
      </tr>
      <tr>
        <td>editor</td>
        <td>31947</td>
        <td>editor</td>
      </tr>
      <tr>
        <td>miembro</td>
        <td>40279</td>
        <td>miembro</td>
      </tr>
      <tr>
        <td>llanchberry5</td>
        <td>54184</td>
        <td>editor - miembro</td>
      </tr>
      <tr>
        <td>rpiggin3</td>
        <td>22224</td>
        <td>miembro</td>
      </tr>
      <tr>
        <td>sstern6</td>
        <td>21029</td>
        <td>administrador - editor - miembro</td>
      </tr>
      <tr>
        <td>test</td>
        <td>68816</td>
        <td>administrador</td>
      </tr>
    </tbody>
  </table>

  <div class="d-flex justify-content-center align-items-start text-center mt-5">
    <div class="alert alert-primary w-50 " role="alert">
      <h1>
        Datos de usuario para probar
      </h1>
      <h2>Verificar en el archivo configuracion.php que el nombre del proyecto sea el mismo.</h2>
      <p>> Los administradores pueden editar todos los usuarios menos otros administradores.</p>
      <p>> Los editores solo pueden editar los miembros.</p>
      <p>> Los miembros solo pueden acceder al sitio.</p>
      <p>> Cada usuario puede editar sus propios datos sin importar su rol.</p>

    </div>
  </div>
</div>



<?php include_once 'includes/foot.php' ?>