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
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Produtos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="./notproduct.php">Masculino</a></li>
                                <li><a class="dropdown-item" href="./notproduct.php">Feminino</a></li>
                                <li><a class="dropdown-item" href="./notproduct.php">Infantil</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./contato.php">Contato</a>
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

    <section class="new">
        <h1>Lançamentos</h1>
        <div class="new-div">
            <img src="./images/capa1.png" alt="Tenis">
            <div class="new-div-right">
                <h2>Prapé - RunningX - Branco</h2>
                <h3>R$ 450,00</h3>
                <p>Tênis recomendado para corrida em qualquer terreno, anatômico aos seus
                    pés, além de trazer maior conforto.</p>
                <a href="./notproduct.php" class="btn btn-secondary">Comprar</a>
            </div>
        </div>
    </section>
    <section class="offer">
        <h2>Ofertas</h2>
        <div class="container-card">
            <div class="card">
                <img src="./images/tenis1.png" alt="Tênis Conquist marca Prapé combina com qualquer ocasião">
                <div>
                    <h2>Prapé - Basic</h2>
                    <h3>R$ 100,00</h3>
                    <h4>R$ 250,00</h4>
                    <p>Casual day, combina com qualquer ocasião.</p>
                    <a href="./notproduct.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="card">
                <img src="./images/tenis2.png" alt="Tênis Conquist marca Prapé melhor autonomia em suas caminhadas off-road">
                <div>
                    <h2>Prapé - Conquist</h2>
                    <h3>R$ 245,00</h3>
                    <h4>R$ 350,00</h4>
                    <p>Melhore sua autonomia nas caminhadas off-road.</p>
                    <a href="./notproduct.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
            <div class="card">
                <img src="./images/tenis3.png" alt="Tenis">
                <div>
                    <h2>Prapé - Sapatênis</h2>
                    <h3>R$ 150,00</h3>
                    <h4>R$ 200,00</h4>
                    <p>De mais conforto aos seus pés para o dia a dia.</p>
                    <a href="./notproduct.php" class="btn btn-secondary">Comprar</a>
                </div>
            </div>
        </div>
    </section>
    <footer class="copyright">
        <h2>Prapé - CNPJ: 00.000.000/0001-00 Copyright @ 2022</h2>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>