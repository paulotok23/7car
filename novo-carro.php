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
	<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<div class="card">
			<div class="card-header">
				<h2>Cadastrar Carro</h2>
			</div>
			<div class="card-body" style="direction: ltr; text-align: left">
				<form action="?p=salvar" method="POST">
					<input type="hidden" name="acao" value="novo-usuario">
					<div class="form-group">
						<label>Marca</label>
                            <select name="tipo_servico" class="form-control" style="direction: ltr">
                                <option>- Escolha a Marca do seu veículo -</option>
                                <option value="Alfa Romeo">Alfa Romeo</option>
                                <option value="Aston Martin">Aston Martin</option>
                                <option value="Audi">Audi</option>

                                <option value="Autovaz">Autovaz</option>
                                <option value="Bentley">Bentley</option>
                                <option value="Bmw">Bmw</option>
                                <option value="Cadillac">Cadillac</option>

                                <option value="Caterham">Caterham</option>
                                <option value="Chevrolet">Chevrolet</option>
                                <option value="Chrysler">Chrysler</option>
                                <option value="Citroen">Citroen</option>

                                <option value="Daihatsu">Daihatsu</option>
                                <option value="Dodge">Dodge</option>
                                <option value="Ferrari">Ferrari</option>
                                <option value="Fiat">Fiat</option>

                                <option value="Ford">Ford</option>
                                <option value="Honda">Honda</option>
                                <option value="Hummer">Hummer</option>
                                <option value="Hyundai">Hyundai</option>

                                <option value="Isuzu">Isuzu</option>
                                <option value="Jaguar">Jaguar</option>
                                <option value="Jeep">Jeep</option>
                                <option value="Kia">Kia</option>

                                <option value="Lamborghini">Lamborghini</option>
                                <option value="Lancia">Lancia</option>
                                <option value="Land Rover">Land Rover</option>
                                <option value="Lexus">Lexus</option>

                                <option value="Lotus">Lotus</option>
                                <option value="Maserati">Maserati</option>
                                <option value="Mazda">Mazda</option>
                                <option value="Mercedes Benz">Mercedes Benz</option>

                                <option value="MG">MG</option>
                                <option value="Mini">Mini</option>
                                <option value="Mitsubishi">Mitsubishi</option>
                                <option value="Morgan">Morgan</option>

                                <option value="Nissan">Nissan</option>
                                <option value="Opel">Opel</option>
                                <option value="Peugeot">Peugeot</option>
                                <option value="Porsche">Porsche</option>

                                <option value="Renault">Renault</option>
                                <option value="Rolls Royce">Rolls Royce</option>
                                <option value="Rover">Rover</option>
                                <option value="Saab">Saab</option>

                                <option value="Seat">Seat</option>
                                <option value="Skoda">Skoda</option>
                                <option value="Smart">Smart</option>
                                <option value="Ssangyong">Ssangyong</option>

                                <option value="Subaru">Subaru</option>
                                <option value="Suzuki">Suzuki</option>
                                <option value="Tata">Tata</option>
                                <option value="Toyota">Toyota</option>

                                <option value="Volkswagen">Volkswagen</option>
                                <option value="Volvo">Volvo</option>
                            </select>
					</div>
					<div class="form-group">
						<label>Modelo</label>
						<input type="email" name="email_usuario" class="form-control" placeholder="Digite o modelo do carro">
					</div>
					<div class="form-group">
						<label>Placa</label>
						<input type="password" name="senha_usuario" class="form-control" placeholder="Digite a placa do carro">
					</div>
                    
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Cadastrar</button>
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