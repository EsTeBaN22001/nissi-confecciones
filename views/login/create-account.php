<section class="hero">
  <div class="hero-content container">
    <h3 class="welcome">Crear cuenta como administrador</h3>
    <h2><a href="/" class="logo"><span>Carlos-</span>Guerra</a></h2>
    <p>*Crear usuarios solo para administrador</p>
  </div>
</section>

<section class="login section">
  <div class="login-container container">
    <h1>Crea una cuenta como administrador</h1>
    <?php include_once __DIR__ . '/../templates/alerts.php'; ?>
    <form action="/login" method="POST" class="form container">
        <h2 class="titleSeparator">Ingrese los datos...</h2>
        <div class="fields-group container">
          <div class="form-group">
            <label for="email">Ingresa tu email:</label>
            <input type="email" id="email" name="email" placeholder="Ingrese su email">
          </div>
          <div class="form-group">
            <label for="password">Ingresa tu contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
          </div>
          <input type="submit" value="Enviar" class="button-orange-block-width90">
        </div>
      </form>
  </div>
</section>