<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<div class="row" style="text-align: left; direction: ltr">
	<div class="col-lg-8 offset-lg-2">
		<div class="card">
			<div class="card-header">
				<h2>Serviços</h2>
			</div>
			<div class="card-body">
				<form action="cad-car.php" method="POST">
					<input type="hidden" name="acao" value="novo-usuario">
					<div class="form-group">
						<div class="form-group">
                            <label>Tipos de Serviços</label>
                            <select name="tipo_servico" class="form-control">
                                <option>- Escolha -</option>
                                <option value="1">Lavar a seco</option>
                                <option value="2">Americana</option>
                                <option value="3">Polimento</option>
                                <option value="4">Balanciamento</option>
                                <option value="5">Pintura</option>
                                <option value="5">kkk-Destruição-kkk</option>
                            </select>
                        </div>
                    </div>                    
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Solicitar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script> <!-- Menu Toggle Script -->
            <script>
              $(function(){
                $("#menu-toggle").click(function(e) {
                    e.preventDefault();
                    $("#wrapper").toggleClass("toggled");
                });

                $(window).resize(function(e) {
                  if($(window).width()<=768){
                    $("#wrapper").removeClass("toggled");
                  }else{
                    $("#wrapper").addClass("toggled");
                  }
                });
              });
               
            </script>