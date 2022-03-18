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
									alt="Logo da empresa Prapé, maior e-commerce no Brasil de itens para seu pé"
									width="80">
							</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
								aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNavDropdown">
								<ul class="navbar-nav">
									<li class="nav-item">
										<a class="nav-link active" aria-current="page" href="./index.php">Home</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
											role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Produtos
										</a>
										<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
											<li><a class="dropdown-item" href="./indisponivel.php">Masculino</a>
											</li>
											<li><a class="dropdown-item" href="./indisponivel.php">Feminino</a>
											</li>
											<li><a class="dropdown-item" href="./indisponivel.php">Infantil</a>
											</li>
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
						<div class="row justify-content-center">
							<div class="col-8">
								<h3 class="text-secondary" style="margin-top: 10px;">Envie sua mensagem</h3>
								<form id="formenvie" action="./msgenviada.php" method="post">
									<div class="mb-3">
										<label for="name" id="form-name" class="form-label">Nome</label>
										<input type="text" class="form-control" id="name">
										<span id="nameobrigatorio">&nbsp;</span>
									</div>
									<div class="mb-3">
										<label for="email" id="form-email" class="form-label">Email</label>
										<input type="email" class="form-control" id="email"
											placeholder="nome@exemplo.com">
										<span id="emailobrigatorio">&nbsp;</span>
									</div>
									<div class="mb-3">
										<label for="tel" id="form-tel" class="form-label">Telefone</label>
										<input type="tel" class="form-control" id="tel" placeholder="(18) 99999-9999">
										<span id="telobrigatorio">&nbsp;</span>
									</div>
									<div class="mb-3">
										<label for="mensagem" id="form-mensagem" class="form-label">Deixe
											aqui sua
											mensagem</label>
										<textarea class="form-control" id="mensagem" rows="3"></textarea><span id="mensagemobrigatorio">&nbsp;</span>
									</div>
									<div class="mb-3">
										<button type="submit" form="formenvie" id="enviar"
											class="btn btn-secondary justify-content-md-end">Enviar</button>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer class="footerend">
		<div id="rodape" class="container bg-dark rounded-top">
			<div class="row h-100 align-items-end">
				<div class="col">
					<p class="text-secondary text-center">Prapé - CNPJ 00.000.000/0000-00 -
						Copyright 2022</p>
				</div>
			</div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
	<script src="./script/scripts.js"></script>
</body>

</html>