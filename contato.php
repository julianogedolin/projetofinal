<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>PraPé # Um mundo para seus pés</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./notproduct.php">Masculino</a></li>
                                <li><a class="dropdown-item" href="./notproduct.php">Feminino</a></li>
                                <li><a class="dropdown-item" href="./notproduct.php">Infantil</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./contato.php">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <a href="./index.php">
            <img src="./images/logowhite.png"
                alt="Logo da empresa Prapé, maior e-commerce no Brasil de itens para seu pé">
        </a>
    </header>

    <section class="contact">
        <h1>Envie sua mensagem</h1>
        <div class="contact-container">
            <form id="formenvie" action="./msgsubmit.php" method="post">
                <div class="mb-3">
                    <label for="name" id="form-name">Nome</label>
                    <input type="text" class="form-control" id="name">
                    <span id="nameobrigatorio">&nbsp;</span>
                </div>
                <div class="mb-3">
                    <label for="email" id="form-email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="nome@exemplo.com">
                    <span id="emailobrigatorio">&nbsp;</span>
                </div>
                <div class="mb-3">
                    <label for="tel" id="form-tel">Telefone</label>
                    <input type="tel" class="form-control" id="tel" placeholder="(18) 99999-9999">
                    <span id="telobrigatorio">&nbsp;</span>
                </div>
                <div class="mb-3">
                    <label for="mensagem" id="form-mensagem">Deixe
                        aqui sua
                        mensagem</label>
                    <textarea id="mensagem" class="form-control" rows="3"></textarea><span id="mensagemobrigatorio">&nbsp;</span>
                </div>
                <div class="mb-3">
                    <button type="submit" form="formenvie" id="enviar"
                        class="btn btn-secondary justify-content-md-end">Enviar</button>
                </div>
            </form>
        </div>
    </section>

    <footer class="copyright">
        <h2>Prapé - CNPJ: 00.000.000/0001-00 Copyright @ 2022</h2>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="./script/scripts.js"></script>
</body>

</html>