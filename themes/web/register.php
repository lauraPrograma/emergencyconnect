

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            background-color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container do formulário */
        form {
            background-color: #f7f7f7;
            border-radius: 8px;
            padding: 30px;
            width: 100%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Estilos para os campos do formulário */
        form div {
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 2px solid #cc0000;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="text"]:focus, input[type="password"]:focus {
            outline: none;
            border-color: #ff0000;
        }

        /* Estilos para o botão */
        button {
            width: 100%;
            background-color: #cc0000;
            color: #fff;
            border: none;
            padding: 12px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff0000;
        }

        /* Estilos para os rótulos dos campos */
        div {
            font-size: 16px;
            color: #cc0000;
        }
    </style>
</head>
<body>
<form>
    <div>
        Nome: <input name="name" type="text">
    </div>
    <div>
        E-mail: <input name="email" type="text">
    </div>
    <div>
        Senha: <input name="password" type="password">
    </div>
    <div>
        <button>Enviar</button>
    </div>
</form>
<script type="text/javascript" async>
    const form = document.querySelector("form");
    const headers = {
        email: "fabiosantos@ifsul.edu.br",
        password: "12345678"
    };
    form.addEventListener("submit", async (e) => {
        e.preventDefault();
        const data = await fetch(`<?= url("api/user");?>`,{
            method: "POST",
            body: new FormData(form),
            headers: headers
        });
        const user = await data.json();
        console.log(user.success.user);
    });
</script>
</body>
</html>
