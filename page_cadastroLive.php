<?php $h1 = 'Contato'; include('components/l_headerInner.php'); ?>
<main id="page__contato">
    <div class="u-container">
		<ul class="c-infosContato">
			<li>
				<a href="#">
					<i><?php include('media/img/icons/icon_phone.svg'); ?></i>
					<span class="caption">(48) 999.999.999</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i><?php include('media/img/icons/icon_mail.svg'); ?></i>
					<span class="caption">contato@dominio.com.br</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i><?php include('media/img/icons/icon_map.svg'); ?></i>
					<address class="caption">
						Av. Getúlio Vargas, 153 - Centro, Criciúma - SC, 88801-500
					</address>
				</a>
			</li>
		</ul>
        <form action="envia-contato" id="formContato" class="c-simpleForm" method="post">
            <h3>Formulário de contato</h3>
            <ul>
                <li class="u-fw50">
                    <label for="formContato_nome">Nome completo</label>
                    <input id="formContato_nome" type="text" name="nome" class="field" placeholder="Digite seu nome" required>
                </li>
                <li class="u-fw50">
                    <label for="formContato_email">E-mail</label>
                    <input id="formContato_email" type="email" name="email" class="field" placeholder="example@site.com" required>
                </li>
                <li class="u-fw50">
                    <label for="formContato_telefone">Telefone</label>
                    <input id="formContato_telefone" type="tel" class="field foneMask" name="telefone" placeholder="(__) ____-_____" required>
                </li>
                <li class="u-fw50">
                    <label for="formContato_assunto">Assunto</label>
                    <input id="formContato_assunto" type="text" name="assunto" class="field" placeholder="Sobre o que gostaria de conversar?" required>
                </li>
                <li class="u-fw50 liSelect">
                    <label for="formContato_estado">Estado</label>
                    <select name="estado" id="formContato_estado" class="field" required>
                        <option value="">Selecione</option>
                        <option value="ac">Acre</option>
                        <option value="al">Alagoas</option>
                        <option value="ap">Amapá</option>
                        <option value="am">Amazonas</option>
                        <option value="ba">Bahia</option>
                        <option value="ce">Ceará</option>
                        <option value="df">Distrito Federal</option>
                        <option value="es">Espirito Santo</option>
                        <option value="go">Goiás</option>
                        <option value="ma">Maranhão</option>
                        <option value="ms">Mato Grosso do Sul</option>
                        <option value="mt">Mato Grosso</option>
                        <option value="mg">Minas Gerais</option>
                        <option value="pa">Pará</option>
                        <option value="pb">Paraíba</option>
                        <option value="pr">Paraná</option>
                        <option value="pe">Pernambuco</option>
                        <option value="pi">Piauí</option>
                        <option value="rj">Rio de Janeiro</option>
                        <option value="rn">Rio Grande do Norte</option>
                        <option value="rs">Rio Grande do Sul</option>
                        <option value="ro">Rondônia</option>
                        <option value="rr">Roraima</option>
                        <option value="sc">Santa Catarina</option>
                        <option value="sp">São Paulo</option>
                        <option value="se">Sergipe</option>
                        <option value="to">Tocantins</option>
                    </select>
                </li>
                <li class="u-fw50 liSelect">
                    <label for="formContato_cidade">Cidade</label>
                    <select name="cidade" id="formContato_cidade" class="field" required>
                        <option value="">Aguardando</option>
                    </select>
                </li>
                <li class="u-fw100">
                    <label for="formContato_mensagem">Mensagem</label>
                    <textarea id="formContato_mensagem" name="mensagem" class="field" placeholder="Digite sua mensagem" required></textarea>
                </li>
                <li class="u-fw100 liBtn">
                    <input type="text" name="mail" id="mail" class="field" style="display: block;border: 0;height: 0;opacity: 0"/>
                    <button type="submit" id="btnContato" class="c-btn c-btn--simple">
                        <span>Enviar</span>
                    </button>
                </li>
            </ul>
            <div class="c-stsSend u-dnone" id="status-envio">
                <div class="c-stsSend__feedback c-stsSend__feedback--error  u-dnone">
                    <i><?php include("media/img/boilerplate/c-stsSend_error.svg");?></i>
                    <span>Formulário não enviado, tente novamente.</span>
                </div>
                <div class="c-stsSend__feedback c-stsSend__feedback--load  u-dnone">
                    <i><?php include("media/img/boilerplate/c-stsSend_load.svg");?></i>
                    <span>Enviando...</span>
                </div>
                <div class="c-stsSend__feedback c-stsSend__feedback--success  u-dnone">
                    <i><?php include("media/img/boilerplate/c-stsSend_success.svg");?></i>
                    <span>Mensagem enviada com sucesso.</span>
                </div>
            </div>
        </form>
    </div>
</main>