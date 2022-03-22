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
        <!--como estamos usando float no css w50 temos que limpar a flutuação-->
        <div class="clear"></div> 
      </div><!--center-->  
    </section>    
         <!--inicio => contato-pagina-->
     <section class="contato">
     	<div class="center">
     		<div class="w50 contato-info">
     			<h2>A mais importante, <br />primeira conversa.</h2>
     			<br />
     			<p><b>Telefone:</b> (48) 9901-3620</p>
     			<p><b>Telefone:</b> (11) 94704-7361</p>
     			<p><b>Telefone:</b> (11) 9901-3620</p>

     			<!--mapa dentro da sessão contatos-->
     		<div class="mapa-container">
     			<div id="mapa"></div>
                <!--colocarei o mapa pelo arquivo mapa.js-->
     		   </div><!--mapa-->
     	   </div>

     	   <!--iniciando formulario-->
            <div class="w50 contato-form">
            	<form>
            		<input placeholder="Nome" type="text" />
            		<input placeholder="E-mail" type="text" />
            		<input placeholder="Telefone" type="text" />
            		<select>
            			<option>Geral</option>
            			<option>Suporte</option>
            		</select>
            		<textarea placeholder="Mensagem"></textarea>
            		<input type="submit" value="Enviar!">
            	</form>
            </div>
     		<div class="clear"></div>
     	</div>
     </section>
    <!--fim => contato-pagina-->


	  </div><!--cente-limitar o contexto-->			
	</section><!--topo-->

	<!--inicio => rodapé footer-->
	<!--controlando o espaçamento do footer superior e inferior 60px-->
     <footer style="padding: 60px 0;">
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
    <!--minha key gerada para o uso do google maps -->
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>
    <!--chamada do arquivo map.js-->
    <script src="js/map.js"></script>
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