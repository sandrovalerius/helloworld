<!--
	
	*************************************
		ac é controle do nosso site
	*************************************
	u - usuário
	ul - login  - acao no form
	us - select - acao no banco
	un - novo cadastro - acao no form
	ui - insert - acao no banco

	t - tarefa -
	tn - novo - acao form
	ti - insere - acao banco
	ta - atualiza
	td - delete
	ts - status
	tc - lista completa
	tp - lista pendente

	lg - logoff - destroy
	ms - mensagem 
	
-->

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/estilo.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	</head>

	<body>
		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App Lista Tarefas
				</a>
				<div class="float-right"> 
					<p>Nome de usuário</p>
				</div>
			</div>
		</nav>

		<div class="container app">
			<div class="row">

				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item active">
							<a href="#">Nova tarefa</a>
						</li>

						<li class="list-group-item">
							<a href="#">Lista completa</a>
						</li>

						<li class="list-group-item">
							<a href="#">Pendentes</a>
						</li>

						<li class="list-group-item">
							<a href="#">Sair</a>
						</li>

						<li class="list-group-item">
							<a href="#">Login</a>
						</li>
						<li class="list-group-item">
							<a href="#">Cadastro</a>
						</li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">

								<h4>Cadastro de usuário</h4>
								<hr />
								<!-- tarefa_controller.php?acao=inserir" -->
								<form method="POST" action="">
									<div class="form-group">
										<label>Nome:</label>
										<input type="text" class="form-control" name="nome"  placeholder="Nome completo">
										<label>email:</label>
										<input type="email" class="form-control" name="email"  placeholder="nome@email.com">
										<label>Senha:</label>
										<input type="password" class="form-control" name="senha"  placeholder="digite sua senha">
									</div>

									<button class="btn btn-success">Cadastrar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>