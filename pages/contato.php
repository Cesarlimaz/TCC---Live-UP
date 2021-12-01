<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contato Live up</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>


	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">

	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">

	<link rel="stylesheet" type="text/css" href="css/formstyle.css">
	<link rel="stylesheet" type="text/css" href="css/contato.css">
		<head>
		<title>Live up</title>

		<meta charset="utf-8" />
		<link rel="stylesheet" href="css/reset.css" type="text/css" />

		<link rel="stylesheet" href="css/home.css" type="text/css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="fonts/iconic/css/material-design-iconic-font.min.css"
		/>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada:wght@700&display=swap" rel="stylesheet">	

      

	</head>

	
		<header>
			<img src="images/logo/logo3.png" />

			<div class="navbar" id="nav">
				<ul>
					<li>
						<a href="index.php"
							>Home<br />

							<div class="barra">
                        </div>
                  </a>
					</li>
				      
               <li>
                     	<a href="area-restrita/areaslazer.php">
                        <span class="glyphicon glyphicon-log-in"></span>
								Areás cadastradas
                        <div class="barra">
                        </div></a
							>
					</li>
					 <li>
                     	<a href="contato.php">
                        <span class="glyphicon glyphicon-log-in"></span>
								Contato
                        <div class="barra">
                        </div></a
							>
					</li>
					 <li>
                     	<a href="login.php">
                        <span class="glyphicon glyphicon-log-in"></span>
								Login
                        <div class="barra">
                        </div></a
							>
					</li>
				</ul>
			</div>
		</header>
      <body>
				<body>

	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/logo/logo3.png" alt="IMG">
			</div>

			<form class="contact1-form validate-form">
				<div class="labels">
				<span class="contact1-form-title">
					Contato
				</span>

				<div class="wrap-input1 validate-input" data-validate = "Name is required">
					<input class="input1" type="text" name="name" placeholder="Nome">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input1" type="text" name="email" placeholder="Email">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Subject is required">
					<input class="input1" type="text" name="subject" placeholder="Titulo">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Message is required">
					<textarea class="input1" name="message" placeholder="Mensagem"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button class="contact1-form-btn">
						<span>
							Enviar 
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				</div>
			</form>
		</div>
	</div>




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
					
				
					
<footer class="footer-distributed">

			<div class="footer-left">

				<h3><span> <img src="images/logo/logo5.png" width="160" height="130"> </span></h3>

				<p class="footer-links">
					<a href="index.php" class="link-1">Voltar para a Home</a>
				
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


      </div>      
      

		<script type="text/javascript">
			var nav = document.getElementById("nav");

			window.onscroll = function () {
				if (window.pageYOffset > 100) {
					nav.style.background = "#030303e5";
				} else {
					nav.style.background = "transparent";
					nav.style.boxShadow = "none";
				}
			};
		</script>
	</body>
</html>

