const button = document.getElementById("enviar")

button.addEventListener("click", (Event) => {
    Event.preventDefault()

    const name = document.getElementById("name")
    const nameobrigatorio = document.getElementById("nameobrigatorio")
    const email = document.getElementById("email")
    const emailobrigatorio = document.getElementById("emailobrigatorio")
    const mensagem = document.getElementById("mensagem")
    const mensagemobrigatorio = document.getElementById("mensagemobrigatorio")
    const tel = document.getElementById("tel")
    const telobrigatorio = document.getElementById("telobrigatorio")

    if (name.value == "") {
        name.classList.add("errorInput")
        nameobrigatorio.innerHTML = "Campo obrigatório.";
    } else {
        name.classList.add("successInput")
        nameobrigatorio.innerHTML = "";
    }

    if (email.value == "") {
        email.classList.add("errorInput")
        emailobrigatorio.innerHTML = "Campo obrigatório.";
    } else {
        email.classList.add("successInput")
        emailobrigatorio.innerHTML = "";
    }

    if (mensagem.value == "") {
        mensagem.classList.add("errorInput")
        mensagemobrigatorio.innerHTML = "Campo obrigatório.";
    } else {
        mensagem.classList.add("successInput")
        mensagemobrigatorio.innerHTML = "";
    }

    if (tel.value == "") {
        tel.classList.add("errorInput")
        telobrigatorio.innerHTML = "Campo obrigatório.";
    } else {
        tel.classList.add("successInput")
        telobrigatorio.innerHTML = "";
    }

    if (name.value == "" || tel.value == "" || email.value == "" || mensagem.value == "") {
        return false;
    } else {
        document.getElementById("formenvie").submit();
        return true;
    }
})