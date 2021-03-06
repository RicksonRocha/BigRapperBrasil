<?php 
include("conexao.php");

?>

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/my.css">
	<link rel="stylesheet" type="text/css" href="CSS/sidebar.css">
	<meta charset="utf-8">
	<title>Cadastro de Concorrentes - Big Rapper Brasil</title>
</head>
<body>
	<div id="wrapper">

		<!-- Sidebar -->
		<div id="sidebar-wrapper">
			<ul class="sidebar-nav">
				<li class="sidebar-brand border-bottom border-primary">
					<a href="#">
						Big Rapper Brasil
					</a>
				</li>
				<hr>
				<li>
					<a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
						<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
					</svg> Cadastrar Concorrentes</a>
				</li>
				<li>
					<a href="listar.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
						<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
						<path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
					</svg> Listar Concorrentes</a>
				</li>
				
				<li>
					<a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16">
						<path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5H3z"/>
						<path d="M8.354 10.354l7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0z"/>
					</svg> Vota????o</a>
				</li>
				<li>
					<a href="vencedor.php"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="margin-top: -2px;"><path d="M3 16l-3-10 7.104 4 4.896-8 4.896 8 7.104-4-3 10h-18zm0 2v4h18v-4h-18z"/></svg> Ver vencedores</a>
				</li>
			</ul>
		</div>
		<div id="page-content-wrapper">
			<div class="container-fluid">
				<div class="nav border-bottom" style="margin: -15px 0 0 -35px; width: auto;">
					<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><div class="div-menu-toggle">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div></a>
				</div>
				<h1 align="center" class="mb-4 mt-4">Cadastro de Concorrentes</h1>
				<div class="container col-12 divcadastro rounded border border-primary mb-5">
					<form name="tTeste" action="insert.php" method="POST" enctype="multipart/form-data" class="ml-2 mr-2">

						<label class="mb-0 mt-4">Nome:</label> 
						<input type="text" class="form-control input rounded-0" placeholder="Digite o Nome do concorrente"  name="nome" required="">


						<label class="mb-0 mt-2">M??sica de Refer??ncia:</label>
						<input type="text" class="form-control input rounded-0" placeholder="Digite uma m??sica de refer??ncia" name="musica" required="">	


						<label form="labelFoto" class="mt-2 mb-0">Foto do concorrente:</label>
						<input type="file" class="form-control-file input mb-3" name="foto" required="">

						<input type="submit" value="Cadastrar" id="cadastro" class="btn btn-primary btn-sm btn-rounded font-weight-bold mb-3 mt-3 ">

					</form> 

				</div>
			</div>
		</div>
		<script>
			$("#menu-toggle").click(function(e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
				this.classList.toggle("change");
			});
		</script>
	</body>
	</html>