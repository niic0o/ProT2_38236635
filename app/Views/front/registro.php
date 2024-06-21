<!-- ------Esto funciona, dejar comentado por si rompemos todo
<section>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="supertitulo">Registro de usuario</h2>
        <form>
          <div class="row">
            <div class="col-md-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" id="apellido" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" id="usuario" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" id="password" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="provincia" class="form-label">Provincia</label>
              <select id="provincia" class="form-select" required>
                <option value="">Seleccione una provincia</option>
                opciones de provincia
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="ciudad" class="form-label">Ciudad</label>
              <select id="ciudad" class="form-select" required>
                <option value="">Seleccione una ciudad</option>
                 opciones de ciudad 
              </select>
            </div>
            <div class="col-md-6">
              <label for="domicilio" class="form-label">Domicilio</label>
              <input type="text" id="domicilio" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="dni" class="form-label">DNI</label>
              <input type="text" id="dni" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
              <input type="date" id="fecha_nacimiento" class="form-control" required>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-lg btn-comprar supertitulo focus">Registrarse</button>
        </form>
      </div>
    </div>
  </div>
</section>
-->

<section class="container-fluid">
  <div class="container registro">
    <br><br><br><br>
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2 class="supertitulo" id="login">Registro de Usuario</h2>
        <br><br><br>
        <form>
          <div class="row">
            <div class="col-md-6">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" id="nombre" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="apellido" class="form-label">Apellido</label>
              <input type="text" id="apellido" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="usuario" class="form-label">Usuario</label>
              <input type="text" id="usuario" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" id="password" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="provincia" class="form-label">Provincia</label>
              <select id="provincia" class="form-select" required>
                <option value="">Seleccione una provincia</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="ciudad" class="form-label">Ciudad</label>
              <select id="ciudad" class="form-select" required>
                <option value="">Seleccione una ciudad</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="domicilio" class="form-label">Domicilio</label>
              <input type="text" id="domicilio" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="dni" class="form-label">DNI</label>
              <input type="text" id="dni" class="form-control" required>
            </div>
            <div class="col-md-6">
              <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
              <input type="date" id="fecha_nacimiento" class="form-control" required>
            </div>
          </div>
          <br><br>
          <button type="submit" class="btn btn-success btn-lg btn-comprar supertitulo focus">Registrarse</button>
          <button type="reset" class="btn btn-danger btn-lg btn-comprar supertitulo focus">Cancelar</button>
        </form>
        <br><br>
      </div>
    </div>
  </div>
</section>