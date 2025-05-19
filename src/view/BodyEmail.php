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
        
        .header-icon svg {
            width: 40px;
            height: 40px;
            fill: #a855f7;
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
        
        .verification-code {
            background: linear-gradient(to right, #f5f5f5, #ffffff, #f5f5f5);
            border: 2px dashed #e2e2e2;
            border-radius: 12px;
            padding: 20px;
            font-size: 32px;
            font-weight: 700;
            letter-spacing: 10px;
            color: #333;
            margin: 30px 0;
            text-align: center;
        }
        
        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #6366f1, #a855f7);
            color: white;
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
        
        .social-icons {
            margin: 15px 0;
        }
        
        .social-icons a {
            display: inline-block;
            margin: 0 8px;
            color: #777;
        }
        
        .social-icon {
            width: 24px;
            height: 24px;
            fill: #777;
        }
        
        @media screen and (max-width: 480px) {
            .container {
                border-radius: 0;
            }
            
            .header, .content {
                padding: 20px 15px;
            }
            
            .verification-code {
                font-size: 24px;
                letter-spacing: 5px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm0 10.99h7c-.53 4.12-3.28 7.79-7 8.94V12H5V6.3l7-3.11v8.8z"/>
                </svg>
            </div>
            <h1>Código de verificación</h1>
            <p>Hemos recibido tu solicitud para restablecer la contraseña</p>
        </div>
        
        <div class="content">
            <p>Hola,</p>
            <p>Recibimos una solicitud para restablecer la contraseña de tu cuenta. Ingresa el siguiente código de verificación para continuar con el proceso:</p>
            
            <div class="verification-code">
452545
            </div>
            
            <p class="expiry">Este código expirará en 10 minutos</p>
            
            <a href="#" class="btn">Restablecer contraseña</a>
            
            <div class="divider"></div>
            
            <p class="help-text">Si no solicitaste este código, por favor ignora este correo o contacta a nuestro servicio de soporte si tienes alguna duda.</p>
        </div>
        
        <div class="footer">
            <div class="social-icons">
                <a href="#">
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C18.34 21.21 22 17.06 22 12.06C22 6.53 17.5 2.04 12 2.04Z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M22.46 6C21.69 6.35 20.86 6.58 20 6.69C20.88 6.16 21.56 5.32 21.88 4.31C21.05 4.81 20.13 5.16 19.16 5.36C18.37 4.5 17.26 4 16 4C13.65 4 11.73 5.92 11.73 8.29C11.73 8.63 11.77 8.96 11.84 9.27C8.28 9.09 5.11 7.38 3 4.79C2.63 5.42 2.42 6.16 2.42 6.94C2.42 8.43 3.17 9.75 4.33 10.5C3.62 10.5 2.96 10.3 2.38 10V10.03C2.38 12.11 3.86 13.85 5.82 14.24C5.19 14.43 4.53 14.44 3.9 14.27C4.43 15.98 6.02 17.15 7.89 17.18C6.37 18.3 4.47 18.91 2.56 18.91C2.22 18.91 1.88 18.89 1.54 18.85C3.44 20.05 5.7 20.73 8.12 20.73C16 20.73 20.33 14.25 20.33 8.55C20.33 8.37 20.33 8.19 20.32 8.01C21.16 7.41 21.88 6.65 22.46 5.77V6Z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg class="social-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 19.4 19.4 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 4.6 4.6 2 7.8 2M7.6 4C5.61 4 4 5.61 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C18.39 20 20 18.39 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6M17.25 5.5C17.94 5.5 18.5 6.06 18.5 6.75C18.5 7.44 17.94 8 17.25 8C16.56 8 16 7.44 16 6.75C16 6.06 16.56 5.5 17.25 5.5M12 7C14.76 7 17 9.24 17 12C17 14.76 14.76 17 12 17C9.24 17 7 14.76 7 12C7 9.24 9.24 7 12 7M12 9C10.34 9 9 10.34 9 12C9 13.66 10.34 15 12 15C13.66 15 15 13.66 15 12C15 10.34 13.66 9 12 9Z"/>
                    </svg>
                </a>
            </div>
            <p>© 2025 Tu Empresa. Todos los derechos reservados.</p>
            <p>Si tienes problemas con el enlace de arriba, copia y pega la siguiente URL en tu navegador:</p>
            <p>https://tuempresa.com/restablecer-contrasena</p>
        </div>
    </div>
</body>
</html>

