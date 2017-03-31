<div class="usuarios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuário'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="fa fa-list"></span>&nbsp&nbsp;Listar Usuários'), array('action' => 'index'), array('escape' => false)); ?> </li>
									<li><?php //echo $this->Html->link(__('<span class="fa fa-pencil"></span>&nbsp&nbsp;Editar Usuário'), array('action' => 'edit', $usuario['Usuario']['id']), array('escape' => false)); ?> </li>
									<li><?php 
										if($usuario['Usuario']['ativo'] == 1) {  
											echo $this->Form->postLink(__('<span class="fa fa-remove"></span>&nbsp;&nbsp;Desativar Usuário'), array('action' => 'delete', $usuario['Usuario']['id'], $usuario['Usuario']['ativo']), array('escape' => false), __('Você realmente deseja desativar o usuário: %s?', $usuario['Usuario']['nome'])); 
										} else {
											echo $this->Form->postLink(__('<span class="fa fa-check"></span>&nbsp;&nbsp;Ativar Usuário'), array('action' => 'delete', $usuario['Usuario']['id'], $usuario['Usuario']['ativo']), array('escape' => false), __('Você realmente deseja ativar o usuário: %s?', $usuario['Usuario']['nome']));
										} ?>
									</li>

									<li><?php 
										if($usuario['Usuario']['bloqueado'] == 0) {
											echo $this->Form->postLink(__('<span class="fa fa-lock"></span>&nbsp;&nbsp;Bloquear Usuário'), array('action' => 'block', $usuario['Usuario']['id'], $usuario['Usuario']['bloqueado']), array('escape' => false), __('Você realmente deseja bloquear o usuário: %s?', $usuario['Usuario']['nome']));
										} else {
											echo $this->Form->postLink(__('<span class="fa fa-unlock"></span>&nbsp;&nbsp;Desbloquear Usuário'), array('action' => 'block', $usuario['Usuario']['id'], $usuario['Usuario']['bloqueado']), array('escape' => false), __('Você realmente deseja desbloquear o usuário: %s?', $usuario['Usuario']['nome']));
										} ?>
									</li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<?php echo '<b>Nome:</b> ' . $usuario['Usuario']['nome']; ?><br><br>
			<?php echo '<b>Email:</b> ' . $usuario['Usuario']['email']; ?><br><br>
			<?php echo '<b>CPF:</b> ' . $usuario['Usuario']['cpf']; ?><br><br>
			<?php echo '<b>Data Nascimento:</b> ' . date("d/m/Y", strtotime(h($usuario['Usuario']['data_nascimento']))); ?><br><br>
			<?php echo '<b>Telefone1:</b> ' . $usuario['Usuario']['telefone1']; ?><br><br>
			<?php echo '<b>Telefone2:</b> ' . $usuario['Usuario']['telefone2']; ?><br><br>

			<?php echo '<b>Endereço:</b> ' . $usuario['Endereco']['rua'] . ', ' . $usuario['Endereco']['numero'] . ', ' . $usuario['Endereco']['bairro'] . ', ' . $usuario['Endereco']['complemento'] . ' - ' . $usuario['Endereco']['cep'] . ', ' . $usuario['Endereco']['Cidade']['nome'] . ', ' . $usuario['Endereco']['Cidade']['Estado']['nome'] . ', ' . $usuario['Endereco']['Cidade']['Estado']['Pais']['nome'] . '<br><br>'; ?>

			<?php if($usuario['Usuario']['motorista'] == 1) { ?>

				<?php echo '<b>Número Carteira Motorista:</b> ' . $usuario['Usuario']['num_carteira_motorista']; ?><br><br>
				<?php echo '<b>Marca Veículo:</b> ' . $usuario['Usuario']['marca_veiculo']; ?><br><br>
				<?php echo '<b>Placa Veículo:</b> ' . $usuario['Usuario']['placa_veiculo']; ?><br><br>
				<?php echo '<b>Cor Veículo:</b> ' . $usuario['Usuario']['cor_veiculo']; ?><br><br>
				<?php echo '<b>Modelo Veículo:</b> ' . $usuario['Usuario']['modelo_veiculo']; ?><br><br>

			<?php } ?>

			<?php echo '<b>Data de Inclusão do Registro:</b> ' . date("d/m/Y", strtotime(h($usuario['Usuario']['data_inclusao_registro'])));; ?>

		</div><!-- end col md 9 -->
	</div>
</div><br>

<div class="related row">
	<div class="col-md-12">

		<?php if($usuario['Usuario']['motorista'] == 1) { ?>

			<h3><?php echo __('Acessórios'); ?></h3>

			<?php if (!empty($usuario['Acessorio'])): ?>

				<table cellpadding = "0" cellspacing = "0" class="table table-striped">
					<thead>
						<tr>
							<th class="actions"></th>
						</tr>
					<thead>
					<tbody>
						<?php foreach ($usuario['Acessorio'] as $acessorio): ?>
							<tr>
								<td><?php echo $acessorio['nome']; ?></td>
								<td class="actions">
									<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'acessorios', 'action' => 'delete', $acessorio['id']), array('escape' => false), __('Tem certeza que deseja excluir este acessório?')); ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php endif; 
		} ?>

	</div><!-- end col md 12 -->
</div>

<div class="related row">
	<div class="col-md-12">
		<h3><?php echo __('Avaliações Realizadas'); ?></h3>

		<?php if (!empty($usuario['AvaliacaoRealizada'])) {

			if($this->Session->check('Admin')) {

				foreach ($usuario['AvaliacaoRealizada'] as $c): ?>

						<div class="jumbotron jumb">
							<?php echo 'Eu escrevi para ' . $c['UsuarioAvaliado']['nome'] . ': '; ?> <br /> <?php echo 'Nota: <b>' . $c['nota'] . '</b><br />'; 
										echo '<h4>' . $c['comentario'] . '</h4>' ?>
					  </div>

				<?php endforeach; 
			} 

		} else { 
			echo '<h4>Nenhuma avaliação realizada até o momento!</h4>'; 
		} ?>

	</div><!-- end col md 12 -->
</div>

<div class="related row">
	<div class="col-md-12">
		<h3><?php echo __('Avaliações Recebidas'); ?></h3>

		<?php if (!empty($usuario['AvaliacaoRecebida'])) {

			if($this->Session->check('Admin')) {

				foreach ($usuario['AvaliacaoRecebida'] as $c): ?>

						<div class="jumbotron jumb">
							<?php echo $c['UsuarioAvaliador']['nome'] . ' escreveu para mim:' ?> <br /> <?php echo 'Nota: <b>' . $c['nota'] . '</b><br />'; 
										echo '<h4>' . $c['comentario'] . '</h4>' ?>
					  </div>

				<?php endforeach; 
			} 

		} else { 
			echo '<h4>Nenhuma avaliação recebida até o momento!</h4>'; 
		} ?>

	</div><!-- end col md 12 -->
</div>

