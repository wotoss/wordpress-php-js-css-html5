<!--estou importando a semantica do html5-->
<!DOCTYPE html>
<html>
<head>
	<title>Woto Informatica - Tema</title>
    <!--para garantir que não vamos ter problemas com acentuação.-->
	<meta charset="utf-8">
	<!--incluindo icone-->
	<link rel="icon"  href="images/batman.ico" type="image/x-icon">
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

	<section class="diferenciais">

		<div class="center">
			<h2>Contribuímos de ponta a ponta</h2>

			<div class="icons-diferenciais">

				<div class="box-single-diferenciais">
					<img src="images/icon1.png">
					<h3>Ambientes Mobile</h3>
					<p>Garanta que toda sua comunicação esteja alinhada com seu propôsito, cada palavra conta.</p>
				</div><!--box-single-diferenciais-->

				<div class="box-single-diferenciais">
					<img src="images/icon2.png">
					<h3>Ambientes Mobile</h3>
					<p>Garanta que toda sua comunicação esteja alinhada com seu propôsito, cada palavra conta.</p>
				</div><!--box-single-diferenciais-->

				<div class="box-single-diferenciais">
					<img src="images/icon3.png">
					<h3>Ambientes Mobile</h3>
					<p>Garanta que toda sua comunicação esteja alinhada com seu propôsito, cada palavra conta.</p>
				</div><!--box-single-diferenciais-->
				
			</div><!--icons-diferenciais-->
		</div>

	</section>

	<section class="sobre-time">
		<div class="center">
			<!--w50 representa a divisão da tela => configurada no css-->
			<div class="w50 time-descricao-2">
				<h2>Um time experiente, <br/>comunicador e coeso</h2>

				<p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira flâmula.
				<br /><br/>
				Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina como vamos te ajuda.</p>				
			</div><!--w50-->
            <!--w50 representa a divisão da tela => configurada no css-->
            <div class="w50 img-time">
            	<img src="images/time.png" />
            </div>
            <!--como estamos usando float não podemos esquecer da class=clear que esta configurada no css-->
            <!--tenho que sempre limpar a flutuação-->
            <div class="clear"></div>
		</div>
	</section>

	<!--inicio => vamos para a sessão de depoimentos-->
	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimentos-box">
				<div class="depoimentos-single">
				  <p>" Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."
				  </p>
				  <p>Woto Santana</p>
				  <img src="images/autor.jpg" />
				</div><!--depoimentos-single-->

				<div class="depoimentos-single">
				  <p>" Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."
				  </p>
				  <p>Woto Santana</p>
				  <img src="images/autor.jpg" />
				</div><!--depoimentos-single-->

				<div class="depoimentos-single">
				  <p>" Aliqua quis ut duis eiusmod laboris aliquip elit consequat incididunt occaecat minim in consequat ut id culpa veniam. Ut mollit culpa laboris reprehenderit esse id anim anim quis in sed laborum irure mollit culpa."
				  </p>
				  <p>Woto Santana</p>
				  <img src="images/autor.jpg" />
				</div><!--depoimentos-single-->
			</div><!--depoimentos-box-->
		</div>
	</section>

	<!--fim => depoimentos-->



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

        $('section.depoimentos .depoimentos-box').slick({
	        dots: true,
	        arrows: false,
	        infinite: true,
	        speed: 1000,
	        slidesToShow: 1, /*colocamos (1) pois é (um) depoimento por mês.*/
	        autoplay: true,
	        centerMode:false
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

    <!--
    	menu responsivo em jquery lembrando que no css 
    	.menu-mobile ul{ display: none; } que faz (ocultar sumir) o menu
    	e aqui após o click no icone  $('.menu-mobile i')montamos a logica.
    -->
	<script type="text/javascript">
        $('.menu-mobile i').click(function(){
        	$('.menu-mobile').find('ul').slideToggle();
        })
	</script>
</body>
</html>