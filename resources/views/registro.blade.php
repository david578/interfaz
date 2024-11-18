<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear una cuenta</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header>
    <h1>EMPRESA</h1>
  </header>
  <main>
    <div class="form-container">
      <h2>Crear una cuenta</h2>
      <div class="icon-user">👤</div>
      <form>
        <input type="text" placeholder="Nombre de la empresa" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Contraseña" required>
        <div class="checkbox-container">
          <input type="checkbox" id="terms" required>
          <label for="terms">
            Acepto todas las políticas y condiciones de privacidad
          </label>
          <a href="#" class="terms-link">Ver términos y condiciones</a>
        </div>
        <button type="submit">Registrarme</button>
      </form>
    </div>
  </main>
  <footer>
    <p>© 2024 Bancapp. Todos los derechos reservados.</p>
    <div class="social-media">
      <a href="#" class="icon">🌐</a>
      <a href="#" class="icon">📷</a>
      <a href="#" class="icon">🎥</a>
      <a href="#" class="icon">❌</a>
    </div>
  </footer>
</body>
</html>
