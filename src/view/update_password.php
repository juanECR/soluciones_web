<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cambiar Contraseña</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background-color: white;
      padding: 40px 30px;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      color: #555;
    }

    input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: border-color 0.3s ease;
      font-size: 14px;
    }

    input[type="password"]:focus {
      border-color: #667eea;
      outline: none;
    }

    button[type="submit"] {
      width: 100%;
      background-color: #667eea;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
      background-color: #5a67d8;
    }

    .success-message {
      text-align: center;
      color: green;
      margin-top: 15px;
    }

    .error-message {
      text-align: center;
      color: red;
      margin-top: 15px;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <h2>Cambiar Contraseña</h2>
    <form id="changePasswordForm">
      <div class="form-group">
        <label for="currentPassword">Contraseña Actual</label>
        <input type="password" id="currentPassword" name="currentPassword" required minlength="6" />
      </div>
      <div class="form-group">
        <label for="newPassword">Nueva Contraseña</label>
        <input type="password" id="newPassword" name="newPassword" required minlength="6" />
      </div>
      <div class="form-group">
        <label for="confirmPassword">Confirmar Nueva Contraseña</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required minlength="6" />
      </div>
      <button type="submit">Cambiar Contraseña</button>
      <div id="message"></div>
    </form>
  </div>

  <script>
    document.getElementById('changePasswordForm').addEventListener('submit', function(e) {
      e.preventDefault();

      const newPassword = document.getElementById('newPassword').value;
      const confirmPassword = document.getElementById('confirmPassword').value;
      const messageDiv = document.getElementById('message');

      if (newPassword !== confirmPassword) {
        messageDiv.textContent = "Las contraseñas no coinciden.";
        messageDiv.className = "error-message";
      } else {
        messageDiv.textContent = "Contraseña cambiada exitosamente.";
        messageDiv.className = "success-message";

        // Aquí puedes enviar los datos al servidor mediante fetch o AJAX
        // Ejemplo:
        /*
        fetch('/api/change-password', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({
            currentPassword: document.getElementById('currentPassword').value,
            newPassword: newPassword
          })
        }).then(res => res.json())
          .then(data => {
            messageDiv.textContent = data.message || "Éxito";
            messageDiv.className = "success-message";
          })
          .catch(err => {
            messageDiv.textContent = "Error al cambiar la contraseña.";
            messageDiv.className = "error-message";
          });
        */
      }
    });
  </script>

</body>
</html>