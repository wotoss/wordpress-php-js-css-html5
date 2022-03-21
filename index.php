<!--estou importando a semantica do html5-->
<!DOCTYPE html>
<html>
<head>
	<title>Woto Informatica - Tema</title>
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
		<div class="clear"></div>
		<br />
		<br />
		<!--estou usando uma classe para divisão class="w50" -->
		<!--veja a otimização com a classe time-descricao foi configurado no css=> h2, p, a -->
        <div class="w50 time-descricao">
        	<h2>Melhore a comunicação com seu cliente e time</h2>
        	<p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
        	<a target="_blank" href="https://dankicode.com">Ver demonstração</a>
        </div><!--w50-->
        
        <div class="w50 time-imagem">
        	<img src="images/equipe.png" />
        </div><!--w50-->
        <!--como estamos usando float no css w50 temos que limpar a flutuação-->
        <div class="clear"></div> 

	  </div><!--cente-limitar o contexto-->			
	</section><!--topo-->

    <!--icone tela principal => cirulo e v -->
    <div class="circle"><i class="fas fa-angle-down"></i></div>
	<section class="clientes-slider">		
		<div class="center">
	    <div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">		
          <img src="images/amazon.jpg" />
			<img src="images/costco.jpg" />
			<img src="images/dominos.jpg" />
			<img src="images/uber.jpg" />
			<img src="images/walmart.jpg" />
			<img src="images/amazon.jpg" />
			<img src="images/costco.jpg" />
			<img src="images/dominos.jpg" />
			<img src="images/uber.jpg" />
			<img src="images/walmart.jpg" />

         </div>
		</div><!--center-->	
	</section>

    <!--no html5 isto (type="text/javascript") já foi retirado não precisa acrescentar -->
	<script src="js/jquery.js"></script>
	<script src="js/slick.min.js"></script>
	<!--inicio - javaScript-->
     <script type="text/javascript">
       $('section.clientes-slider .slider-container').slick({
	        dots: true,
	        arrows: false,
	        infinite: false,
	        speed: 1000,
	        slidesToShow: 4,
	        autoplay: true,
	        centerMode:false,
	        autoplaySpeed: 3000,
	        pauseOnHover: false,
	        responsive:
	        [
	        {
	        	breakpoint: 768,
	        	settings: {
	        		slidesToShow: 2
	        	}
	        }
	        ]
       }); 	
     </script>
	<!--fim js-->
</body>
</html>