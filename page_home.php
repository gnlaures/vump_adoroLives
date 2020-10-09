<header class="l-headerHome">
	<img src="https://via.placeholder.com/1440x590" alt="" class="l-headerHome__banner">
	<div class="u-container">
		<div class="l-headerHome__content">
			<div class="l-headerHome__companyBrand">
				<a href="#"><img src="https://via.placeholder.com/135x20" alt="Americanas.com"></a>
			</div>
			<div class="l-headerHome__presentation">Apresenta</div>
			<h1 class="l-headerHome__title"><strong>Melim</strong> ao vivo</h1>
			<div class="l-headerHome__date">Dia 23/06 - 15:30</div>
			<div class="l-headerHome__btns c-defaultBtns">
				<a href="#" class="c-btn --primary --savedLived">Grave na sua agenda</a>
				<a href="#" class="c-linkShare">Ic</a>
			</div>
		</div>
	</div>
</header>

<main id="page__home">
	<section class="s-galleryLives">
		<div class="u-containerBig">
			<div class="s-galleryLives__header">
				<div class="header__select">
					<div class="c-subMenuHover --thisOpenInBottom">
						<a href="#">Escolha o estilo</a>
						<a href="#" class="u-dnone">Estilo</a>
						<ul class="c-subMenuHover__sub">
							<li><a href="#">Item secundário</a></li>
							<li><a href="#">Item secundário</a></li>
							<li><a href="#">Item secundário</a></li>
						</ul>
					</div>
				</div>
				<h2 class="header__title"><strong>lives</strong>do dia</h2>
				<div class="header__toggleCategorie">
					<div class="c-toggle">
						<ul>
							<li><a href="#">Brazuca</a></li>
							<li><a href="#">Gringa</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="s-galleryLives__content">
				<div class="swiper__galleryLives swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div class="c-cardLive --online --favorited">
								<figure class="c-cardLive__figure">
									<a href="#" class="u-aspectRatio u-aspectRatio--16-9" title="Título da Live">
										<img src="https://via.placeholder.com/1920x1080" alt="Título da Live">
										<span>ao vivo <strong>agora</strong></span>
									</a>
									<a href="#" class="c-cardLive__favorite" title="Adicionar aos favoritos">S2</a>
								</figure>
								<div class="c-cardLive__content">
									<h3 class="c-cardLive__title">Nayara Azevedo</h3>
									<p class="c-cardLive__descriptions">LIVE SIM - com part.de Rafa Kalimann</p>
									<ul class="c-cardLive__listTags">
										<li><a href="#">Sertanejo</a></li>
										<li><a href="#">Sofrencia</a></li>
										<li><a href="#">Moda</a></li>
									</ul>
									<div class="c-cardLive__companyBrand">
										<a href="#"><img src="https://via.placeholder.com/135x20" alt="Americanas.com"></a>
									</div>
									<div class="c-cardLive__comments">
										<ul class="comments__stars --stars4">
											<li>star</li>
											<li>star</li>
											<li>star</li>
											<li>star</li>
											<li>star</li>
										</ul>
										<div class="comments__num">5.345 comentários</div>
									</div>
									<div class="c-cardLive__btns c-defaultBtns">
										<a href="#" class="c-btn --primary --savedLived">Grave na sua agenda</a>
										<a href="#" class="c-linkShare">Ic</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="s-activeGalleries">
		<div class="u-containerBig">
			<div class="s-activeGalleries__header">
				<h1><strong>Lives</strong>Ativas</h1>
				<form action="#" class="header__orderBy c-simpleForm" method="post">
					<ul>
						<li class="u-fw100 liSelect">
							<label for="formOrderBy">Filtrar por</label>
							<div>
								<select name="estado" id="formOrderBy" class="field" required>
									<option value="mais_recentes">Mais Recentes</option>
									<option value="value">Item</option>
									<option value="value">Item</option>
								</select>
							</div>
						</li>
					</ul>
				</form>
			</div>
			<div class="s-activeGalleries__content">
				<ul class="c-responsiveGrid"
						data-maxw-breaks="1280, 1000, 780, 400"
						data-maxw-cols="4, 3, 2, 1"
						data-cols-init="5">
					<li>
						// card live
					</li>
				</ul>
			</div>
		</div>
	</section>
	<section class="s-registerLive">
		<div class="u-container">
			<div class="s-registerLive__form">
				<h1><strong>Cadastro</strong> de Live</h1>
				<form action="#" class="c-simpleForm" method="post" id="formCadastroLive">
					<ul>
						<li class="u-fw50">
							<input id="formCadastroLive_titulo" type="text" class="field" placeholder="Título" required>
						</li>
						<li class="u-fw50">
							<input id="formCadastroLive_descricao" type="text" class="field" placeholder="Descrição" required>
						</li>
						<li class="u-fw100 c-multiSelect">
							<div class="c-multiSelect__ipt">
								<select class="c-multiSelect__select">
									<option>Rock</option>
									<option>Rap</option>
									<option>Reggae</option>
									<option>Sertanejo</option>
									<option>POP</option>
									<option>Jazz</option>
								</select>
							</div>
							<div class="c-multiSelect__warn">Máximo: 5 opções</div>
							<ul class="c-multiSelect__selected">
								<li>
									<span class="js-removeSelect">x</span>
									<span class="selectedCategory">Rock</span>
								</li>
								<li>
									<span class="js-removeSelect">x</span>
									<span class="selectedCategory">Rap</span>
								</li>
							</ul>
						</li>
						<li class="u-fw25">
							<input id="formCadastroLive_data" type="text" class="field" placeholder="Data da live" required>
						</li>
						<li class="u-fw25">
							<input id="formCadastroLive_hora" type="text" class="field" placeholder="Hora da live" required>
						</li>
						<li class="u-fw100">
							<input id="formCadastroLive_link" type="text" class="field" placeholder="Link da Live" required>
						</li>
						<li class="u-fw100 liFile">
							<input id="formCadastroLive_file" class="inputAttach" name="#" type="file" required>
							<input id="formCadastroLive_fileName" class="inputText" type="text" placeholder="Carregar Capa">
							<label for="#">Máx de 1mb em jpg, png ou svg</label>
						</li>
						<li class="u-fw100">
							<button class="c-btn --primary --disabled">Salvar Live</button>
						</li>
					</ul>
				</form>
			</div>
			<div class="s-registerLive__preview">
				<h1><strong>Preview</strong></h1>
				<div class="c-cardLive --online --previewPage">
				</div>
			</div>
		</div>
	</section>
	<section class="s-feedbackRegisterLive">
		<div class="u-container">
			<i><?php include('media/img/icons/icon_video.svg'); ?></i>
			<h1>Sua live foi salva certinha, parabéns!</h1>
			<p>Nossa equipe vai conferir pra ver se está tudo ok do nosso lado e lhe avisaremos rapidinho, mas rapidinho mesmo.</p>
			<a href="#" class="c-btn --primary">Cadastrar outra live</a>
		</div>
	</section>
</main>