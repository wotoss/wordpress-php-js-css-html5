<!--estou importando a semantica do html5-->
<!DOCTYPE html>
<html>
<head>
	<title>Woto Informatica - Tema</title>
    <!--para garantir que não vamos ter problemas com acentuação.-->
	<meta charset="utf-8">
	<!--esta tag meta garante que fique design responsivo sempre de acordo com o despositivo exemplo: tablet, computador, celular e outros-->
     <meta name="viewport"content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
     <!--link para usar o fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <!--esta font (roboto) foi buscada do fonts-google-->
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
	<!--estou importanto o meu css => style.css--> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--estou abrindo uma sessão em minha pagina com class=topo para manipulação-->
	<section class="topo">
	<!--esta div class="center" é para limitar o meu contexto-->
	  <div class="center">
		<header>
			<div class="logo"><img src="images/logo.png"/></div>
		</header>
		<ul class="menu-desktop">
			<li><a href="">Home</a></li>
			<li><a href="">Sobre</a></li>
			<li><a href="">Contato</a></li>
		</ul>
		<!--menu celular tablet moblile-->
		<div class="menu-mobile">
		 <i class="fas fa-align-right"></i>
		   <ul>
			 <li><a href="">Home</a></li>
			 <li><a href="">Sobre</a></li>
			 <li><a href="">Contato</a></li>
		   </ul>
		</div><!--menu-mobile-->
		<div class="clear"></div>
	  </div><!--cente-limitar o contexto-->			
	</section><!--topo-->

	<section class="sobre-equipe">
	 <div class="center">
		<div class="w50 equipe-sobre-texto">
			<h2>Uma equipe estratégica para um trabalho incrível</h2>
			<p>Com foco permanente na geração de resultados para empresas, atuamos na consultoria estratégica e na criação e implementação de soluções de comunicação criativas, consistentes e adequadas às necessidades e características de cada companhia. Para isso, trabalhamos sempre em parceria e colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os negócios de cada cliente.</p>
		</div>
		<div class="w50">
			<img src="images/foto-equipe.jpg" />
		</div>
		<div class="clear"></div>
	</div>	
	</section>

	<!--imagens-sobre-->
	<section class="sobre-imagens">
		<div class="center">
		  <div class="img-sobre">
		  	<img src="images/imagem-sobre.jpg" />
		  </div>

		   <div class="img-sobre">
		  	<img src="images/imagem-sobre.jpg" />
		  </div>	

		   <div class="img-sobre">
		  	<img src="images/imagem-sobre.jpg" />
		  </div>	

		   <div class="img-sobre">
		  	<img src="images/imagem-sobre.jpg" />
		  </div>	

		</div>
	</section>

		<!--inicio => rodapé footer-->
     <footer>
     <!--inicio => tela com efeito => cobrepondo o azul-->
	   <section class="metodologia">
		 <div class="center">
			<h2>Conheça nossa Metodologia</h2>
			<p>O que você acha de fazermos o que mais gostamosde fazer? Conversar! <br />
			Entre em contato por e-mail ou telefone.</p>
			<a href="/contato">Entrar Contato</a>
		 </div>
	  </section>

     	<div class="center">

     	  <div class="col-footer">
     	  	<h2>Suporte</h2>
     	  	<a href="">Contato</a>
     	  	<a href="">FAQ</a>
     	  </div>	

     	  <div class="col-footer">
     	  	<h2>Consultoria</h2>
     	  	<a href="">Contato</a>
     	  	<a href="">FAQ</a>
     	  </div>	

     	  <div class="col-footer">
     	  	<h2>Empresa</h2>
     	  	<a href="">Contato</a>
     	  	<a href="">FAQ</a>
     	  </div>	

     	   <div style="width: 40%; text-align: right;" class="col-footer">
     	  	 <img src="images/logo-footer.png" />
     	  </div>	

     	</div>
     </footer>
	<!--fim => rodapé footer-->

 </body>
</html>