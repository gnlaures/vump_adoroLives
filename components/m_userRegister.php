<div class="m-defaultModal m-userRegister u-dnone" id="cadastro-usuario">
	<div class="m-defaultModal__close">
		<?php include('media/img/icons/icon_close.svg'); ?>
	</div>
	<h2><strong>Cadastre-se</strong> no AdoroLives</h2>
	<form action="#" class="c-simpleForm" id="formUserRegister">
		<fieldset>
			<ul>
				<li class="u-fw100">
					<input id="formUserRegister_nome" type="text" name="nome" placeholder="Nome completo" required>
				</li>
				<li class="u-fw100">
					<input id="formUserRegister_email" type="email" name="email" placeholder="E-mail" required>
				</li>
				<li class="u-fw20" style="min-width: 70px">
					<input id="formUserRegister_ddd" type="text" name="ddd" placeholder="DDD" required>
				</li>
				<li class="u-fw50">
					<input id="formUserRegister_telefone" type="tel" name="telefone" placeholder="Telefone" required>
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<h3>Que estilos de lives gostaria de assistir?</h3>
			<ul>
				<li class="u-fw35 liSelect c-multiSelect js-menuCategories">
					<div class="c-subMenu c-multiSelect__options">
						<div class="c-subMenu__call js-subMenuPrimary fakeInput">Categorias</div>
						<div class="c-subMenu__content">
							<div class="liCheckbox">
								<div data-id-category="1">
									<label for="option1">Option 01</label>
									<input type="checkbox" id="option1">
								</div>
								<div data-id-category="2">
									<label for="option2">Option 02</label>
									<input type="checkbox" id="option2">
								</div>
								<div data-id-category="3">
									<label for="option3">Option 03</label>
									<input type="checkbox" id="option3">
								</div>
								<div data-id-category="4">
									<label for="option4">Option 04</label>
									<input type="checkbox" id="option4">
								</div>
								<div data-id-category="5">
									<label for="option5">Option 05</label>
									<input type="checkbox" id="option5">
								</div>
							</div>
						</div>
					</div>
					<ul class="c-multiSelect__selecteds"></ul>
				</li>
				<li class="u-fw35 liSelect c-multiSelect js-menuSubCategories">
					<div class="c-subMenu c-multiSelect__options">
						<div class="c-subMenu__call js-subMenuPrimary fakeInput">Sub categorias</div>
						<div class="c-subMenu__content">
							<div class="liCheckbox">
								<div data-id-category="1" class="u-dnone">
									<label for="option1A">Option 01 - Sub A</label>
									<input type="checkbox" id="option1A">
								</div>
								<div data-id-category="1" class="u-dnone">
									<label for="option1B">Option 01 - Sub B</label>
									<input type="checkbox" id="option1B">
								</div>
								<div data-id-category="1" class="u-dnone">
									<label for="option1C">Option 01 - Sub C</label>
									<input type="checkbox" id="option1C">
								</div>
								<div data-id-category="2" class="u-dnone">
									<label for="option2A">Option 02 - Sub A</label>
									<input type="checkbox" id="option2A">
								</div>
								<div data-id-category="2" class="u-dnone">
									<label for="option2B">Option 02 - Sub B</label>
									<input type="checkbox" id="option2B">
								</div>
								<div data-id-category="2" class="u-dnone">
									<label for="option2C">Option 02 - Sub C</label>
									<input type="checkbox" id="option2C">
								</div>
								<div data-id-category="3" class="u-dnone">
									<label for="option3A">Option 03 - Sub A</label>
									<input type="checkbox" id="option3A">
								</div>
								<div data-id-category="3" class="u-dnone">
									<label for="option3B">Option 03 - Sub B</label>
									<input type="checkbox" id="option3B">
								</div>
								<div data-id-category="3" class="u-dnone">
									<label for="option3C">Option 03 - Sub C</label>
									<input type="checkbox" id="option3C">
								</div>
								<div data-id-category="4" class="u-dnone">
									<label for="option4A">Option 04 - Sub A</label>
									<input type="checkbox" id="option4A">
								</div>
								<div data-id-category="4" class="u-dnone">
									<label for="option4B">Option 04 - Sub B</label>
									<input type="checkbox" id="option4B">
								</div>
								<div data-id-category="4" class="u-dnone">
									<label for="option4C">Option 04 - Sub C</label>
									<input type="checkbox" id="option4C">
								</div>
								<div data-id-category="5" class="u-dnone">
									<label for="option5A">Option 05 - Sub A</label>
									<input type="checkbox" id="option5A">
								</div>
								<div data-id-category="5" class="u-dnone">
									<label for="option5B">Option 05 - Sub B</label>
									<input type="checkbox" id="option5B">
								</div>
								<div data-id-category="5" class="u-dnone">
									<label for="option5C">Option 05 - Sub C</label>
									<input type="checkbox" id="option5C">
								</div>
							</div>
						</div>
					</div>
					<ul class="c-multiSelect__selecteds"></ul>
				</li>
				<li class="u-fw20">
					<p class="observation">Máx. 3 opções</p>
				</li>
			</ul>
		</fieldset>
		<fieldset>
			<ul>
				<li class="u-fw33">
					<input id="formUserRegister_login" type="text" name="login" placeholder="login" required>
				</li>
				<li class="u-fw33">
					<input id="formUserRegister_senha" type="password" name="senha" placeholder="senha" required>
				</li>
				<li class="u-fw33">
					<input id="formUserRegister_senhaRpt" type="password" name="senhaRpt" placeholder="repita a senha" required>
				</li>
				<li class="u-fw100 liBtn">
					<button class="c-btn --primary">Confirmar</button>
				</li>
			</ul>
		</fieldset>
	</form>
</div>