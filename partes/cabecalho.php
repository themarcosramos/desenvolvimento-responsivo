<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php
        $titulo = "Design Responsivo";
        global $tituloPagina;
        if($tituloPagina != ''){
            $titulo .= ' | ' . $tituloPagina;
        }
    ?>
	<title><?php echo $titulo ?></title>
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="../Projeto/assets/img/favicon.png">
  
</head>
<body>
	<header class="cabecalho">
	<div class="container">
        <?php if($tituloPagina == ''): ?>
           <h1 class="logo">Design Responsivo</h1><!--titulo e/ou logo do site -->
        <?php else: ?>
            <a href="../Projeto/index.php" class="logo">Design Responsivo</a>
        <?php endif ?>
		<nav class="menu-principal menu-principal--fechado">
			<button class="menu-principal__btn "> abrir / fechar menu </button>
			<ul class="menu-principal__lista">
            <li><a class="menu-principal__item <?php echo $tituloPagina == '' ? 'menu-principal__item--atual' : '' ?>" href="index.php">Home</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Sobre nós' ? 'menu-principal__item--atual' : '' ?>" href="sobre.php">Sobre nós</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Portifolio' ? 'menu-principal__item--atual' : '' ?>" href="portifolio.php">Portifolio</a></li>
                    <li><a class="menu-principal__item <?php echo $tituloPagina == 'Contato' ? 'menu-principal__item--atual' : '' ?>" href="contato.php">Contato</a></li>
			</ul>
		</nav>
	</div><!-- fim do container -->
	</header>
   <main>