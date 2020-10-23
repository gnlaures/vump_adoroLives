<div class="m-defaultModal m-userNewPassword u-dnone" id="nova-senha">
	<div class="m-defaultModal__close">
		<?php include('media/img/icons/icon_close.svg'); ?>
	</div>
	<h2><strong>Criar</strong> nova senha</h2>
	<p>Insira no campo abaixo o email cadastrado para criar uma nova senha</p>
	<form action="#" class="c-simpleForm" id="formNewPass">
		<fieldset>
			<ul>
				<li class="u-fw100">
					<input id="formNewPass_senha" type="password" name="senha" class="field" placeholder="senha" required>
				</li>
				<li class="u-fw100">
					<input id="formNewPass_senhaRpt" type="password" name="senhaRpt" class="field" placeholder="repita a senha" required>
				</li>
				<li class="liBtn u-fw100">
					<button class="c-btn --primary">Criar nova senha</button>
				</li>
			</ul>
		</fieldset>
	</form>
</div>