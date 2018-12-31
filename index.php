 <?php 
  include_once('partes/cabecalho.php');
  ?>
	<header class="cabecalho-home">
		<h2  class="cabecalho-home__titulo"> Texto  grande bem  aqui </h2><!-- ideal para subtitulo ou slogam -->
		 <p class="cabecalho-home__subtitulo">
					texto menozinho aqui
		 </p>
		<a  class="cabecalho-home__role" href="#servicos"> role para ver mais</a><!-- usando um link para ir para uma parte da página  -->
	</header>
		<section id="servicos" class="servicos"><!-- seção de serviços-->
			<div class="container">
				<h2 class="home__titulo">O que fazemos</h2>
				<section  class="servicos__item">
					<img src="assets/img/icone-desenvolvimento-web.png" alt="Icone planeta terra">
					<h3>Desenvolvimento Web</h3>
					<p class="servicos__texto"> 
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti quibusdam laborum, quas eligendi possimus veritatis sed perferendis nobis earum fugit minus laboriosam voluptas, doloribus modi voluptates distinctio blanditiis et labore.
				</p>
				</section>
					<section  class="servicos__item">
					<img src="assets/img/icone-carrinho-compras.png" alt="Icone  do carrinho de  comprar">
					<h3>E-commerce</h3>
					<p class="servicos__texto"> 
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, velit amet laboriosam sunt nulla sint fugit suscipit beatae dolorem eveniet quidem ratione debitis molestias tenetur nemo itaque, veritatis, iusto. Quo.</p>
				</section>
					<section  class="servicos__item">
					<img src="assets/img/icone-cafe.png" alt="Icone  xicara de café ">
					<h3>Café</h3>
					<p class="servicos__texto"> 
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur eaque minus dolor aliquam saepe, consectetur quibusdam expedita officia nam magni recusandae quas odio fugit reprehenderit, consequatur. Illo adipisci, velit rerum.</p>
				</section>
			</div><!-- fim da dic container -->
	</section><!--  fim seção de serviços-->
		<section  class="depoimentos"><!--  seção de depoimentos-->
			<div class="container">
			<h2 class="home__titulo home__titulo--branco">O que falam de nós </h2>
			
			<div class="depoimentos__caixa">
				<section class="depoimentos__item">
					<img class="depoimentos__img" src="assets/img/depoimentos/pessoa-1.jpg" alt=" foto da pessoa x">
					<p class="depoimentos__texto">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptatum laborum veniam alias expedita ratione illo quibusdam, fugit velit nesciunt amet, asperiores. Vitae fugit placeat dolorum voluptatibus rerum excepturi est.
						</p>
					<p class="depoimentos__pessoa">
						Nome da Pessoa - Cargo 
					</p>
				</section>  

				<section class="depoimentos__item">
						<img class="depoimentos__img" src="assets/img/depoimentos/pessoa-1.jpg" alt=" foto da pessoa x">
						<p class="depoimentos__texto">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptatum laborum veniam alias expedita ratione illo quibusdam, fugit velit nesciunt amet, asperiores. Vitae fugit placeat dolorum voluptatibus rerum excepturi est.
							</p>
						<p class="depoimentos__pessoa">
							Nome da Pessoa - Cargo 
						</p>
				</section> 

				 <section class="depoimentos__item">
						<img class="depoimentos__img" src="assets/img/depoimentos/pessoa-1.jpg" alt=" foto da pessoa x">
						<p class="depoimentos__texto">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptatum laborum veniam alias expedita ratione illo quibusdam, fugit velit nesciunt amet, asperiores. Vitae fugit placeat dolorum voluptatibus rerum excepturi est.
							</p>
						<p class="depoimentos__pessoa">
							Nome da Pessoa - Cargo 
						</p>
					</section> 

			</div><!-- fim de depoimentos__ caixa-->

			</div>
	</section><!-- fim seção de depoimentos-->
	<?php 
  include_once('partes/rodape.php');
  ?>