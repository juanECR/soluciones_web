
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      font-family: "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
      background-color: #f4f4f4;
      color: #333;
      margin: 0;
      padding: 0;
    }
    .container {
      background-color: #ffffff;
      max-width: 600px;
      margin: 40px auto;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      overflow: hidden;
    }
    .header {
      background-color: #2c3e50;
      padding: 20px;
      text-align: center;
      color: #fff;
    }
    .content {
      padding: 30px;
    }
    .content h2 {
      margin-top: 0;
      color: #2c3e50;
    }
    .button {
      display: inline-block;
      padding: 12px 25px;
      margin-top: 20px;
      background-color: #3498db;
      color: #fff;
      text-decoration: none;
      border-radius: 6px;
      font-weight: bold;
    }
    .footer {
      background-color: #ecf0f1;
      padding: 15px;
      text-align: center;
      font-size: 12px;
      color: #7f8c8d;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Recuperar Contraseña</h1>
    </div>
    <div class="content">
      <p>Hola,</p>
      <p>Recibimos una solicitud para restablecer tu contraseña. Si tú no realizaste esta solicitud, puedes ignorar este mensaje.</p>
      <p>Haz clic en el siguiente botón para restablecer tu contraseña:</p>
      <a class="button" href="https://tusitio.com/reset_password.php?token=' . $token . '">Restablecer Contraseña</a>
      <p style="margin-top: 30px;">Este enlace expirará en 1 hora por motivos de seguridad.</p>
    </div>
    <div class="footer">
      &copy; ' . date("Y") . ' TuEmpresa. Todos los derechos reservados.
    </div>
  </div>
</body>
</html>

