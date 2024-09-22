<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Estilos gerais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Estilos específicos para o formulário de login */
        form {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .text-center {
            text-align: center;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Estilos para mensagens */
        .loading,
        .error-message,
        .sent-message {
            margin-top: 10px;
            display: none;
            text-align: center;
        }

        .loading {
            color: #4CAF50;
        }

        .error-message {
            color: #d9534f;
        }

        .sent-message {
            color: #4CAF50;
        }
    </style>
</head>
<body>
<section id="contact" class="contact section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-6">
                <form role="form" class="php-email-form" method="POST">
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="name" id="subject" placeholder="Seu nome" value="" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" id="email" class="form-control" name="email" id="subject" placeholder="Seu email" value="" required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="password" class="form-control" name="password" id="subject" placeholder="Sua senha" value="" required>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message"></div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Enviar</button>
                    </div>
                    <div class="response">
                        <a href="<?= url("/")?>"> voltar</a></br>
                        <a href="<?= url("/login")?>"> Faça seu login!</a></br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" async>
    const form = document.querySelector(".php-email-form");
    const email = document.querySelector("#email");

    form.addEventListener("submit", async (e) => {
        e.preventDefault();

        const nameInput = document.querySelector('input[name="name"]');
        const emailInput = document.querySelector('input[name="email"]');
        const passwordInput = document.querySelector('input[name="password"]');

        const name = nameInput.value;
        const email = emailInput.value;
        const password = passwordInput.value;

        // Adicionando logs para depuração
        console.log("Dados do formulário:");
        console.log("Nome:", name);
        console.log("Email:", email);
        console.log("Senha:", password);

        // Verifique se todos os campos estão preenchidos
        if (name === "" || email === "" || password === "") {
            const errorMessageDiv = document.querySelector(".error-message");
            errorMessageDiv.textContent = "Por favor, preencha todos os campos.";
            errorMessageDiv.style.display = "block";
            return;
        }

        // Restante do código para enviar os dados para o servidor
        console.log("Enviando dados para o servidor...");
        // Aqui pode ser feito o fetch ou AJAX para enviar os dados
    });
</script>
</body>
</html>
