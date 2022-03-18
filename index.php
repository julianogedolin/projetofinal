<!DOCTYPE html>
  <html lang="pt-BR">

  <head>
    <title>PraPé # Um mundo para seus pés</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>

  <body>
    <header>
      <div id="menu" class="container bg-dark rounded-bottom">
        <div class="row h-100 align-items-center">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <div class="container-fluid">
                <a class="navbar-brand" href="./index.php">
                  <img src="./images/logowhite.png"
                    alt="Logo da empresa Prapé, maior e-commerce no Brasil de itens para seu pé" width="80">
                </a>
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
                        <li><a class="dropdown-item" href="./indisponivel.php">Masculino</a></li>
                        <li><a class="dropdown-item" href="./indisponivel.php">Feminino</a></li>
                        <li><a class="dropdown-item" href="./indisponivel.php">Infantil</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="./contato.php">Contato</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <section>
      <div id="meio" class="container">
        <div class="row">
          <div class="col">
            <div class="container">
              <div class="row">
                <div id="meio1" class="center col-sm-6">
                  <div class="container">
                    <div class="row" style="margin-top: 30px;">
                      <div class="col">
                        <img src="./images/capa1.svg" class="img-fluid rounded mx-auto d-block" width="350" alt="Tênis RunningX marca Prapé recomendado para corrida em qualquer terreno, anatôminco aos pés e maior conforto garantido">
                      </div>
                    </div>
                  </div>
                </div>
                <div id="meio2" class="col-sm-6 align-self-center">
                  <div class="container bordercapa">
                    <div class="row">
                      <div class="col">
                        <h3 class="text-dark">Prapé - RunningX - Branco</h3>
                        <h4 class="text-danger">R$ 450,00</h4>
                        <p class="text-secondary">Tênis recomendado para corrida em qualquer terreno, anatômico aos seus
                          pés, além de trazer maior conforto.</p>
                        <a href="./indisponivel.php" class="btn btn-secondary">Comprar</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="meio3" class="col-sm-12">
                  <div class="container p-5">
                    <div class="row ">
                      <h3 style="text-align: center; color: #FA8E0E;">DESTAQUES</h3>
                    </div>
                    <div class="row bordertitle">
                      <div class="col-sm-6">
                        <div class="container">
                          <div class="row" style="margin-top: 30px; margin-bottom: 30px;">
                            <div class="col">
                              <img src="./images/tenis3.svg" class="img-fluid rounded mx-auto d-block" width="200"
                                alt="Tênis Conquist marca Prapé melhor autonomia em suas caminhadas off-road">
                            </div>
                            <div class="col bordercard">
                              <h5 class="card-title">Prapé - Conquist</h5>
                              <p class="cart-text">Melhore sua autonomia em suas caminhadas off-road</p>
                              <h6 class="card-text">R$ 245,00</h6>
                              <p class="card-text">10x sem juros</p>
                              <a href="./indisponivel.php" class="btn btn-secondary btn-sm">Comprar</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="container">
                          <div class="row" style="margin-top: 30px;">
                            <div class="col">
                              <img src="./images/tenis2.svg" class="img-fluid rounded mx-auto d-block" width="200"
                                alt="Tênis Conquist marca Prapé combina com qualquer ocasião">
                            </div>
                            <div class="col bordercard">
                              <h5 class="card-title">Prapé - Basic</h5>
                              <p class="cart-text">Casual day, combina com qualquer ocasião</p>
                              <h6 class="card-text">R$ 100,00</h6>
                              <p class="card-text">10x sem juros</p>
                              <a href="./indisponivel.php" class="btn btn-secondary btn-sm">Comprar</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="footerend">
      <div id="rodape" class="container bg-dark rounded-top">
        <div class="row h-100">
          <div class="col">
            <p class="text-secondary text-center">Prapé - CNPJ 00.000.000/0000-00 - Copyright 2022</p>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
  </body>

  </html>