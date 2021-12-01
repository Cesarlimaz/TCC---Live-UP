 <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/resete.css" type="text/css" />
		<link rel="stylesheet" href="css/bairros.css" type="text/css" />
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
    <title>Areás de Lazer</title>
  </head>
<header class="cabeca">
			<img src="images/logo/logo3.png" />

			<div class="navbar" id="nav">
				<ul>
					<li>
						<a href="../index.php"
							>Inicio<br />

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
                     	<a href="../contato.php">
                        <span class="glyphicon glyphicon-log-in"></span>
								Contato
                        <div class="barra">
                        </div></a
							>
					</li>
					 <li>
                     	<a href="../login.php">
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
    <?php
            include_once("Arealazer.php");
            try {
                $arealazer = new arealazer();
                $listaarea = $arealazer->listar(); } catch(Exception $e) { //
  }
    ?>
	<div class="containereses">	
		<?php
	 
			foreach ($listaarea as $linha){
				$page = "";
				$page .= "<div class='product-details'>";
				$page .= "<br>";
				$page .= "<h2>" . $linha['NomeArea'] . "</h2>";
				$page .= "<br>";
				$page .= "<p>" .  $linha['Descricao'] . "</p>";
				$page .= "<div class='product-image'>";
				$page .= "<img src='./uploads/" . $linha['Foto'] . "'/>";
				$page .= "<div class='info'>";
				$page .= "<ul>";
				$page .= "<li><strong><h3> Informações:</h3> </strong></li>";
				$page .= "<li><strong>Localização: </strong>" . $linha['Endereco']  . "</li>";
				$page .= "<li><strong>Bairro: </strong>" . $linha['Bairro']  . "</li>";
				$page .= "<li><strong>Telefone:  </strong>" . $linha['Telefone']  . "</li>";
				$page .= "</div>";
				$page .= "</ul>";
				$page .= "</div>";
				$page .= "</div>";

				echo $page;
			}
			?>
		
	</div>
	</div>
  
      <footer class="footer-distributed">

			<div class="footer-left">

				<h3><span> <img src="../images/logo/logo5.png"width="160" height="130"> </span></h3>

				<p class="footer-links">
					<a href="../index.php" class="link-1">Voltar para a Home</a>
				
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
