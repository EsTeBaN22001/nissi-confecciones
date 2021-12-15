<section class="hero">
  <div class="hero-content container">
    <h3 class="welcome">Contáctate con nosotros</h3>
    <h2><a href="/" class="logo"><span>Carlos-</span>Guerra</a></h2>
    <p>Contactate con nosotros ante cualquier duda.</p>
  </div>
</section>

<section class="contact-form section">
  <div class="contact-form-container container">
    <h1>Formulario de contacto</h1>

    <?php include_once(__DIR__ . './../templates/alerts.php'); ?>

    <form method="POST" class="form container">
      <h2 class="titleSeparator">Ingrese los datos...</h2>
      <div class="fields-group container">
        <div class="form-group">
          <label for="name">Ingresa tu nombre:</label>
          <input type="text" id="name" name="name" placeholder="Ingrese su nombre">
        </div>
        <div class="form-group">
          <label for="email">Ingresa tu email:</label>
          <input type="email" id="email" name="email" placeholder="Ingrese su email">
        </div>
        <div class="form-group">
          <label for="affair">Ingresa el asunto:</label>
          <input type="text" id="affair" name="affair" placeholder="Ingresa el asunto del mail">
        </div>
        <div class="form-group">
          <label for="msg">Ingresa tu mensaje:</label>
          <textarea type="text" id="msg" name="msg" placeholder="Escribe tu mensaje"></textarea>
          
        </div>
        <input type="submit" value="Enviar" class="button-orange-block-width90">
      </div>
    </form>
  </div>
</section>