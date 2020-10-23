<?php
	$http = 'http://';
	$urllocal = '/vump_adoroLives';
	$title = 'Adoro Lives';

	#Retorna a página
	$URL = str_replace($urllocal, '', $_SERVER['REQUEST_URI']);
	$geturl = explode('/', $URL);
	$params = count($geturl);
	$pagina = explode('?', $geturl[1]);
	$pagina = reset($pagina);
	$fileSys = 'index.php';

	#Identifica se é home ou inner page
	$classOnBody = 'p-inner';
	
	switch ($pagina) {
		case 'componentslist':
			$file = 'page_components.php';
			$title_page = 'Components - '.$title;
			break;

		case 'lives-ativas':
			$file = 'page_livesAtivas.php';
			$title_page = 'Lives Ativas - '.$title;
			break;

		case 'cadastro-live':
			$file = 'page_cadastroLive.php';
			$title_page = 'Cadastrar Live - '.$title;
			break;

		case 'feedback-cadastro-live':
			$file = 'page_cadastroLiveFeedback.php';
			$title_page = 'Feedback Cadastro Live - '.$title;
			break;

		default :
			$file = 'page_home.php';
			$title_page = $title;
			$classOnBody = 'p-home';
			break;
	}

#Monta a base url
	$url_site = $http . $_SERVER['SERVER_NAME'] . $urllocal;
	$base_page = '<base href="' . $url_site . '/" />';
	include($fileSys);
?>