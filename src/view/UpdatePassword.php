
<?php

$data  = $_GET['data']  ?? null;
$data2 = urldecode($_GET['data2']) ?? null;

// Validar y sanitizar
$data  = htmlspecialchars($data);
$data2 = htmlspecialchars($data2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
   <link href="<?php echo BASE_URL ?>src/view/pp/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <script>
      const base_url = '<?php echo BASE_URL; ?>';
      const base_url_server = '<?php echo BASE_URL_SERVER; ?>';
    </script>
    <style>
body{
  width: 100%;
  margin-top: 90px;
  background: black;
}
.create-account-container {
  margin: 0 auto;
  background: black;
  max-width: 275px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  font-family: sans-serif;
  text-align: center;
  padding: 30px 50px;
  border-radius: 20px;
  border: 1px solid hsla(240, 5%, 65%, 0.2);
}

.create-account-header,
.create-account-content {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 1em;
}

.create-account-header {
  gap: 0.25em;
}

.create-account-container h2 {
  font-size: 1.5em;
  color: #f9f9f9;
  font-weight: 700;
}

.create-account-container p,
.create-account-container a,
.create-account-container input::placeholder {
  font-size: 0.8rem;
  color: hsl(240 5% 64.9%);
}

.create-account-container form {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 0.5em;
}

.create-account-container input,
.create-account-gmail {
  max-height: 34px;
  width: 100%;
  padding: 8px 10px;
  border-radius: 5px;
  color: hsl(240 5% 64.9%);
  border: 1px solid hsl(240 3.7% 15.9%);
  background-color: transparent;
  cursor: pointer;
  transition: 250ms ease;
}

.create-account-container input:focus {
  outline: none;
}

.create-account-container input[type="email"] {
  cursor: initial;
}

.create-account-container input[type="submit"]:hover {
  background-color: hsla(0, 0%, 95%, 0.9);
}

.create-account-gmail:hover {
  background-color: hsl(240 3.7% 15.9%);
}

.create-account-container input[type="submit"]:active {
  background-color: hsla(0, 0%, 80%, 0.9);
}

.create-account-gmail:active {
  background-color: hsl(240, 3%, 12%);
}

.create-account-container input:last-child {
  background-color: #f9f9f9;
  color: black;
}

.create-account-continue-with {
  position: relative;
  text-transform: uppercase;
}

.create-account-continue-with::before,
.create-account-continue-with::after {
  content: "";
  position: absolute;
  left: -55%;
  top: 50%;
  width: 45%;
  height: 1px;
  background-color: hsl(240 3.7% 15.9%);
}

.create-account-continue-with::after {
  left: unset;
  right: -55%;
}

.create-account-gmail {
  color: #f9f9f9;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
  gap: 0.5em;
}

.create-account-gmail svg {
  width: 20px;
  height: 20px;
}

.invalid{
  display: none;
}

    </style>
</head>
<body>
<!-- From Uiverse.io by xerith_8140 --> 
<div class="create-account-container">
  <div class="create-account-header">
    <h2 class="texr-p">Restablecer Contraseña</h2>
    <p class="texr-p">Ingresa una contraseña segura</p>
  </div>
  <div class="create-account-content">
    <form id="reset_pass_form">
      <input class="input" type="hidden" id="data" name="data" value="<?php echo $data ?>">
      <input class="input" type="hidden" id="data2" name="data2" value="<?php echo $data2 ?>">
      <input type="password" id="Password" name="Password" placeholder="Nueva contraseña" />
      <input type="password" id="Password1" name="Password1" placeholder="Repetir Contraseña" />

      <input type="button" value="Cambiar contraseña" onclick="validar_inputs_password();" />
    </form>
    <p class="create-account-continue-with texr-p">o continuar con</p>
    <button class="create-account-gmail" id="button_r_pass">
      <svg
        aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg"
        fill="currentColor"
        viewBox="0 0 24 24"
      >
        <path
          fill-rule="evenodd"
          d="M12.006 2a9.847 9.847 0 0 0-6.484 2.44 10.32 10.32 0 0 0-3.393 6.17 10.48 10.48 0 0 0 1.317 6.955 10.045 10.045 0 0 0 5.4 4.418c.504.095.683-.223.683-.494 0-.245-.01-1.052-.014-1.908-2.78.62-3.366-1.21-3.366-1.21a2.711 2.711 0 0 0-1.11-1.5c-.907-.637.07-.621.07-.621.317.044.62.163.885.346.266.183.487.426.647.71.135.253.318.476.538.655a2.079 2.079 0 0 0 2.37.196c.045-.52.27-1.006.635-1.37-2.219-.259-4.554-1.138-4.554-5.07a4.022 4.022 0 0 1 1.031-2.75 3.77 3.77 0 0 1 .096-2.713s.839-.275 2.749 1.05a9.26 9.26 0 0 1 5.004 0c1.906-1.325 2.74-1.05 2.74-1.05.37.858.406 1.828.101 2.713a4.017 4.017 0 0 1 1.029 2.75c0 3.939-2.339 4.805-4.564 5.058a2.471 2.471 0 0 1 .679 1.897c0 1.372-.012 2.477-.012 2.814 0 .272.18.592.687.492a10.05 10.05 0 0 0 5.388-4.421 10.473 10.473 0 0 0 1.313-6.948 10.32 10.32 0 0 0-3.39-6.165A9.847 9.847 0 0 0 12.007 2Z"
          clip-rule="evenodd"
        ></path>
      </svg>
      Github
    </button>
  </div>
  <p>
    By clicking continue, you agree to our <a href="">Terms of Service</a> and
    <a href="">Privacy Policy</a>.
  </p>
</div>
<script src="<?php echo BASE_URL ?>src/view/pp/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo  BASE_URL;?>src/view/js/principal.js"></script>
<script>
  validar_datos_reset_password();
</script>
</body>
</html>



