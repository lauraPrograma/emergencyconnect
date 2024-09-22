
<?php
  $this->start("specific-script");
?>
<script type="module" src="<?= url("assets/js/web/login.js"); ?>" async></script>
<?php
    $this->end();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing page</title>

<!-- Formulário de login -->

<form id="formLogin">
    <label>
        <span>Email:</span>
        <input type="email" name="email" value="fabiosantos@ifsul.edu.br">
    </label>
    <label>
        <span>Senha:</span>
        <input type="password" name="password" value="12345678">
    </label>
    <button>Entrar</button>
</form>