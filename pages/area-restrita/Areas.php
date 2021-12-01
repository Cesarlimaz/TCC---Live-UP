
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro Cliente</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/utilidade.css">
	<link rel="stylesheet" type="text/css" href="css/stilos.css">
	<link rel="stylesheet" type="text/css" href="../css/home.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/logo/logo4.png" alt="IMG">
			</div>

			 <form class="contact1-form validate-form" method="post" action="cadastro-area.php" enctype="multipart/form-data">
				<span class="contact1-form-title">
					Cadastro de áreas de lazer
				</span>

				<div class="wrap-input1 validate-input" >
					<input class="input1" type="text"  name="Nome" placeholder="Nome da areá de Lazer">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" >
					<input class="input1" type="text"  name="Telefone" placeholder="Telefone do local ou responsavel">
					<span class="shadow-input1"></span>

				</div>
					<div class="wrap-input1 validate-input" >
					<input class="input1" type="text"  name="Endereco" placeholder="Endereço">
					<span class="shadow-input1"></span>
				</div>


				<div class="wrap-input1 validate-input" >
					<input class="input1" type="text"  name="Bairro" placeholder="Bairro">
					<span class="shadow-input1"></span>
				</div>

					<div class="wrap-input1 validate-input" >
					<input class="input1" type="text"  name="Descricao" placeholder="Descrição">
					<span class="shadow-input1"></span>
				</div>
				
				<div  class="wrap-input1 validate-input" >
						<input class="input2" type="file" name="Foto"/>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn" type="submit" >
						<span>
							Cadastrar
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				<Br>
				<div class="container-contact1-form-btn">
				<li class="nav-item"><a id="btn-to-top" style="color: #f7960b;" class="nav-link" href="index-adm.php">Voltar a Home</a></li>
					</button>
				</div>
			</form>
			<br>

		

		</div>
	</div>
	<footer class="footer-distributed">

<div class="footer-left">

	<h3><span> <img src="../images/logo/logo5.png" width="160" height="130"> </span></h3>

	<p class="footer-links">
		<a href="index-adm.php" class="link-1">Voltar para a Home</a>
	
	</p>

	<p class="footer-company-name">New directions © 2021</p>
</div>

<div class="footer-center">

	<div>
		<i class="fa fa-map-marker"></i>
		<p><span>Rua Igarapé Ägua Azul n° 70</span> Cidade Tiradentes, São Paulo</p>
	</div>

	<div>
		<i class="fa fa-phone"></i>
		<p> 11 94353 - 7719</p>
	</div>

	<div>
		<i class="fa fa-envelope"></i>
		<p><a href="mailto:support@company.com">newdirections@support.com</a></p>
	</div>

</div>

<div class="footer-right">

	<p class="footer-company-about">
		<span>New directions</span>
		Somos uma empresa desenvolvedora que busca inovar e criar projetos.
	</p>

	<div class="footer-icons">

		<a href="#"><i class="fa fa-facebook"></i></a>
		<a href="#"><i class="fa fa-twitter"></i></a>
		<a href="#"><i class="fa fa-linkedin"></i></a>
		<a href="#"><i class="fa fa-github"></i></a>

	</div>

</div>

</footer>
	



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
