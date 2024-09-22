import {getBackendUrl, getBackendUrlApi, showToast} from "./../_shared/functions.js";

const formRegister = document.querySelector("#formRegister");

formRegister.addEventListener("submit", async (e) => {
    e.preventDefault();
    try {
        const response = await fetch(getBackendUrlApi("users"), {
            
            method: "POST",
            body: new FormData(formRegister)
        });
        console.log('resposta');
        const data = await response.json();
        if (response.ok) {
            showToast(data.message);
        } else {
            showToast("Erro no registro: " + data.message);
        }
    } catch (error) {
        showToast("Erro ao tentar se registrar.");
        console.error("Erro no registro:", error);
    }
});

const formLogin = document.querySelector("#formLogin");

formLogin.addEventListener("submit", async (e) => {
    e.preventDefault();
    try {
        const response = await fetch(getBackendUrlApi("users/login"), {
            method: "POST",
            body: new FormData(formLogin)
        });

        const data = await response.json();
        if (response.ok && data.type !== "error") {
            localStorage.setItem("userAuth", JSON.stringify(data.user));
            showToast(`Olá, ${data.user.name} como vai!`);
            setTimeout(() => {
                window.location.href = getBackendUrl("app");
            }, 3000);
        } else {
            showToast(data.message || "Erro ao tentar logar.");
        }
    } catch (error) {
        showToast("Erro ao tentar logar.");
        console.error("Erro no login:", error);
    }
});
