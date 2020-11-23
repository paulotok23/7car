<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="page.css">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-primary"> <a href="#menu-toggle" id="menu-toggle" class="navbar-brand"><span class="navbar-toggler-icon"></span></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarsExample02">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"> <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link" href="welcome.php">7Car</a> </li>
                    </ul>
                    <form class="form-inline my-2 my-md-0"> </form>
                </div>
            </nav>
            <div id="wrapper" class="toggled">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <ul class="sidebar-nav">
                        <li class="sidebar-brand"> <a href="#"> 7CAR </a> </li>
                        <li> <a href="novo-carro.php">Cadastre seu Carro</a> </li>                        
                        <li> <a href="servicos.php">Agendar Serviços</a> </li>
                        <li> <a href="logout.php">Sair</a> </li>
                    </ul>
                </div> <!-- /#sidebar-wrapper -->
                <br><br>
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<div class="card">
			<div class="card-header">
				<h2>Novo Usuário</h2>
			</div>
			<div class="card-body" style="text-align: left">
				<form action="?p=salvar" method="POST">
					<input type="hidden" name="acao" value="novo-usuario">
					<div class="form-group">
						<label>Nome</label>
						<input type="text" name="nome_usuario" class="form-control">
					</div>
					<div class="form-group">
						<label>E-mail</label>
						<input type="email" name="email_usuario" class="form-control">
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" name="senha_usuario" class="form-control">
					</div>
					<div class="form-group">
						<label>Nível de Acesso</label>
						<select name="tipo_usuario" class="form-control">
							<option>- Escolha -</option>
							<option value="1">Administrador</option>
							<option value="2">Usuário Comum</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>