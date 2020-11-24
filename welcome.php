<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
 
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
                        <li class="sidebar-brand"> 7CAR </a> </li>
                        <li> <a href="novo-carro.php">Cadastre seu Carro</a> </li>                        
                        <li> <a href="servicos.php">Agendar Serviços</a> </li>
                        <li> <a href="logout.php">Sair</a> </li>
                    </ul>
                </div> <!-- /#sidebar-wrapper -->
                <!-- Page Content -->
                <div id="page-content-wrapper">                   
                   <div class="row">
                    <div class="col-lg-4 my-5">
                        <div class="jumbotron">
                          <h1 class="display-5">Aberto</h1>                  
                          <a class="btn btn-success btn-lg" href="?p=tickets&status=1" role="button"><i class="fas fa-sign-in-alt"></i></a>
                        </div>
                    </div>          
                    <div class="col-lg-4 my-5">
                        <div class="jumbotron">
                          <h1 class="display-5">Aguardando</h1>                  
                          <a class="btn btn-warning btn-lg" href="?p=tickets&status=2" role="button"><i class="fas fa-sign-in-alt"></i></a>
                        </div>
                    </div>          
                    <div class="col-lg-4 my-5">
                        <div class="jumbotron">
                          <h1 class="display-5">Fechado</h1>                 
                          <a class="btn btn-danger btn-lg" href="?p=tickets&status=3" role="button"><i class="fas fa-sign-in-alt"></i></a>
                        </div>
                    </div>          
                   </div> 
                </div> <!-- /#page-content-wrapper -->
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
</body>
</html>