<?php 

  global $tituloPagina;
  $tituloPagina = "Contato";
  include_once('partes/cabecalho.php');
  
  $nome = '';
  $email = '';
  $mensagem = '';
  $erroFormulario = '';
  $sucessoFormulario = '';
  if( isset($_POST['submit']) ){
	  $nome = $_POST['nome'];
	  $email = $_POST['email'];
	  $mensagem = $_POST['mensagem'];
	  if(
		  $nome != '' 
		  && $email != '' 
		  && $mensagem != '')
	  {
		  // usuario preencheu corretamente
		  $mensagemEmail = 'Nome: ' . $nome . ' - ';
		  $mensagemEmail .= 'Email: ' . $email . ' - ';
		  $mensagemEmail .= 'Mensagem: ' . $mensagem;
		  if(mail('contato@site.com.br', 'Mensagem de contato', $mensagemEmail)){
			  //email enviado
			  $sucessoFormulario = 'Mensagem enviado com sucesso!';
		  }
		  else{
			  //email nao enviado
			  $erroFormulario = "Falha ao enviar a mensagem, tente mais tarde ou através do e-mail xxx@xxx.com";
		  }
	  }
	  else{
		  // usuário não preencheu todos os campos
		  $erroFormulario = "Por favor verifique o preenchimento dos campos";
	  }
  }
?>
  <header class="pagina-cabecalho">
            <h1 class="pagina-cabecalho__titulo">Contato</h1>
			
        </header>
        <section class="container pagina-conteudo">
            <p class="text-center">Suspendisse convallis, turpis vitae placerat luctus, est felis dictum augue.</p>
            <form action="contato.php" class="formulario" method="post">
                <?php if($erroFormulario != ''): ?>
                    <div class="formulario__erro">
                        <?php echo $erroFormulario; ?>
                    </div>
                <?php endif; ?>
                <?php if($sucessoFormulario != ''): ?>
                    <div class="formulario__sucesso">
                        <?php echo $sucessoFormulario; ?>
                    </div>
                <?php endif; ?>
                <div class="formulario__grupo formulario__grupo--coluna-esq">
                    <label class="formulario__label" for="nome">Nome</label><br>
                    <input class="formulario__campo" id="nome" type="text" name="nome">
                </div>
                <div class="formulario__grupo formulario__grupo--coluna-dir">
                    <label class="formulario__label" for="email">E-mail</label><br>
                    <input class="formulario__campo" id="email" type="email" name="email">
                </div>
                <div class="formulario__grupo">
                    <label class="formulario__label" for="mensagem">Mensagem</label><br>
                    <textarea class="formulario__campo" name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" class="formulario__botao" value="Enviar" name="submit">
            </form>
            <p class="text-center">
                Maecenas facilisis volutpat ipsum, sed faucibus tortor aliquam non.<br>
                Aliquam erat volutpat. Vivamus cursus pulvinar turpis, nec blandit augue maximus ac.
            </p>
        </section>
        <div class="mapa">
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d44110.658118501015!2d-38.96649240722045!3d-12.25719834674733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1545506555126" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
<?php include('partes/rodape.php'); ?>