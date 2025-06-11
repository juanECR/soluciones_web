
<?php
$expiracion = new DateTime('+10 minutes');
$expiraEnTexto = $expiracion->format('H:i'); // Hora en formato 24h (por ejemplo, 14:32)

$tokenn = urlencode($token)

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecimiento de Contraseña</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            background: linear-gradient(135deg, #6366f1, #a855f7);
            padding: 30px;
            text-align: center;
        }
        
        .header-icon {
            width: 80px;
            height: 80px;
            background-color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }
        
        .header-icon img {
            width: 100%;
            height: 100%;
            fill: #a855f7;
            border-radius: 50%;
        }
        
        .header h1 {
            color: white;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .header p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 16px;
        }
        
        .content {
            padding: 40px 30px;
            text-align: center;
        }
        
        .content p {
            margin-bottom: 20px;
            font-size: 15px;
            color: #555;
        }
        
        .token-box{
            text-align: start;
        }
        .id-box{
            text-align: start;
        }
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            color: #ffffff;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }
        
        .btn:hover {
            transform: translateY(-3px);
        }
        
        .divider {
            height: 1px;
            background: #eaeaea;
            margin: 30px 0;
        }
        
        .expiry {
            font-size: 14px;
            color: #777;
            margin-bottom: 30px;
        }
        
        .help-text {
            font-size: 14px;
            color: #888;
        }
        
        .footer {
            background-color: #f8f8f8;
            padding: 20px;
            text-align: center;
            font-size: 12px;
            color: #999;
        }
        
        
        @media screen and (max-width: 480px) {
            .container {
                border-radius: 0;
            }
            
            .header, .content {
                padding: 20px 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-icon">
              <img src="https://play-lh.googleusercontent.com/UrTU6h_78zYb6l4mk_vE74cDSm9xlCq5AbLVXBNvbYiw8YlOxIP0AcW98SMk5l5pEQ" alt="logo">
            </div>
            <h1>Restablecer constraseña</h1>
            <p>Hemos recibido tu solicitud para restablecer la contraseña</p>
        </div>
        
        <div class="content">
            <p>Hola, <?= htmlspecialchars($nombre_usuario)?></p>
            <p>Recibimos una solicitud para restablecer la contraseña de tu cuenta. Ingresa el siguiente enlace para continuar con el proceso:</p>
            
            <p>Este código expirará a las <strong><?= $expiraEnTexto ?> (hora local)</strong>.</p>
            
            <a href="<?php echo BASE_URL?>UpdatePassword/?data=<?php echo $id_usuario?>&data2=<?php echo $tokenn?>" class="btn">Restablecer contraseña</a>
            
            <div class="divider"></div>
            
            <p class="help-text">Si no solicitaste restablecer tu contraseña, por favor ignora este correo o contacta a nuestro servicio de soporte si tienes alguna duda.</p>
        </div>
        
        <div class="footer">
                <table role="presentation" cellpadding="0" cellspacing="0" border="0" align="center" style="margin: 20px auto;">
                <tr>
                    <td align="center">
                    <a href="https://facebook.com/tupagina" target="_blank" style="text-decoration: none;">
                        <img src="https://cdn-icons-png.flaticon.com/48/145/145802.png" alt="Facebook" width="32" style="display: block; border: 0;">
                    </a>
                    </td>
                    <td width="10"></td>
                    <td align="center">
                    <a href="https://twitter.com/tupagina" target="_blank" style="text-decoration: none;">
                        <img src="https://cdn-icons-png.flaticon.com/48/145/145812.png" alt="Twitter" width="32" style="display: block; border: 0;">
                    </a>
                    </td>
                    <td width="10"></td>
                    <td align="center">
                    <a href="https://instagram.com/tupagina" target="_blank" style="text-decoration: none;">
                        <img src="https://cdn-icons-png.flaticon.com/48/2111/2111463.png" alt="Instagram" width="32" style="display: block; border: 0;">
                    </a>
                    </td>
                </tr>
                </table>
            <p>© 2025 sisdoc. Todos los derechos reservados.</p>
            <p>Si tienes problemas con el enlace de arriba, copia y pega la siguiente URL en tu navegador:</p>
            <p>https://sisdoc.limon-cito.com</p>
        </div>
    </div>
</body>
</html>

