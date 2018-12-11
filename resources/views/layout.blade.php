<!DOCTYPE html>
<html>
<head>
	<title>Help!</title>
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="../css/index.css"/>
  		<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css"/>
<!-- 
navbar navbar-dark bg-dark
-->
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <nav class="container">
        	<!-- 
                            <a class="nav-link" href="?">Help</a>
        	-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
 				           <a class="navbar-brand h1 nb-0" href="/">Help!</a>
                        </li>
                        <li class="nav-item ml-2">
                            <a class="nav-link" href="cadastro">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?">Mapa</a>
                        </li>
                        <li class="nav-item">
                             <a class="nav-link" href="guia">Guia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?">Contatos</a>
                        </li>
                    </ul>
                        
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Entrar</a>
                                
                            <div class="dropdown-menu">
                                
                                <form class="px-4 py-2" method="POST" action="home/login.php">
                                    <div class="form-group">
                                        
                                        <label for="exampleDropdownFormEmail1">CPF</label>
                                        
                                        <input type="text" class="form-control" id="exampleDropdownFormEmail1" size="11" placeholder="Somente números" name="cpf">
                                    </div>
                                        
                                    <div class="form-group">                                       
                                        <label for="exampleDropdownFormPassword1">Senha</label>
                                        
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Senha" name="senha">
                                    </div>
                                    
                                    <div class="form-check">
                                        
                                        <input type="checkbox" class="form-check-input ml-1 mt-1" id="dropdownCheck">
                                        
                                        <label class="form-check-label" for="dropdownCheck">
                                                Lembrar
                                        </label>
                                    </div>
                                <button type="submit" class="btn btn-outline-info my-2 my-sm-0">Entrar</button>
                                
                                </form>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Ainda não possui conta? <strong>Cadastre-se!</strong></a>
                                    <a class="dropdown-item" href="#">Esqueceu a senha?</a>
                            </div>
                        </li>
                    </ul>
                    
                    <form class="form-inline">
                            <input class="form-control ml-4 mr-1" type="search" placeholder="Buscar..">
                            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Ok</button>
                    </form>
            </div>
        </nav>
    </nav>





	<main lass="container-fluid">
		<center>			

			@section('conteudo-principal')

			@show


		<footer class="row justify-content-sm-center mt-6">
			Copyright © 2018 - Help!. Todos os direitos reservados		
		</footer>

		</center>

	</main>
	<script src="../js/jquery-3.2.1.slim.min.js"></script>
	<script src="../js/popper.min.js"></script>
  	<script src="../js/bootstrap.min.js"></script>
</body>
</html>