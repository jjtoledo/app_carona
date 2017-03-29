<div class="usuarios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuario'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;Listar Usuários'), array('action' => 'index'), array('escape' => false)); ?> </li>
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Editar Usuário'), array('action' => 'edit', $usuario['Usuario']['id']), array('escape' => false)); ?> </li>
									<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Excluir Usuário'), array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => false), __('Você realmente deseja excluir: %s?', $usuario['Usuario']['nome'])); ?> </li>
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
</div>

<div class="related row">
	<div class="col-md-12">
		<h3><?php echo __('Acessórios'); ?></h3>
		<?php if (!empty($usuario['Acessorio'])): ?>
			<table cellpadding = "0" cellspacing = "0" class="table table-striped">
				<thead>
					<tr>
						<th><?php echo __('Nome'); ?></th>
						<th class="actions"></th>
					</tr>
				<thead>
				<tbody>
					<?php foreach ($usuario['Acessorio'] as $acessorio): ?>
						<tr>
							<td><?php echo $acessorio['nome']; ?></td>
							<td class="actions">
								<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'acessorios', 'action' => 'view', $acessorio['id']), array('escape' => false)); ?>
								<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'acessorios', 'action' => 'edit', $acessorio['id']), array('escape' => false)); ?>
								<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'acessorios', 'action' => 'delete', $acessorio['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $acessorio['id'])); ?>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		<?php endif; ?>
	</div><!-- end col md 12 -->
</div>

<div class="related row">
	<div class="col-md-12">
		<h3><?php echo __('Avaliações Realizadas'); ?></h3>
		<?php if (!empty($usuario['UsuarioAvaliacao'])):

			$existe = false;

			if($this->Session->check('Admin')) {

				foreach ($usuario['UsuarioAvaliacao'] as $c): 

					if($c['flag_avaliado'] == 0) { ?>

						<div class="jumbotron jumb">
							<?php echo $usuario['Usuario']['nome'] . ' escreveu:' ?> <br /> <?php echo 'Nota: <b>' . $c['Avaliacao']['nota'] . '</b><br />'; 
										echo '<h4>' . $c['Avaliacao']['comentario'] . '</h4>' ?>
					  </div>

					<?php $existe = true; }  

				endforeach; 

				if ($existe == false) {
					echo '<h4>Nenhuma avaliação realizada até o momento!</h4>'; 
				}

			} 
		endif; ?>
	</div><!-- end col md 12 -->
</div>

<div class="related row">
	<div class="col-md-12">
		<h3><?php echo __('Avaliações Recebidas'); ?></h3>

		<?php if (!empty($usuario['UsuarioAvaliacao'])):

			$existe = false;

			if($this->Session->check('Admin')) {

				foreach ($usuario['UsuarioAvaliacao'] as $c): 

					if($c['flag_avaliado'] == 1) { ?>

						<div class="jumbotron jumb">
							<?php echo $usuario['Usuario']['nome'] . ' escreveu:' ?> <br /> <?php echo 'Nota: <b>' . $c['Avaliacao']['nota'] . '</b><br />'; 
										echo '<h4>' . $c['Avaliacao']['comentario'] . '</h4>' ?>
					  </div>

					<?php $existe = true; }  

				endforeach; 

				if ($existe == false) {
					echo '<h5>Nenhuma avaliação realizada até o momento!</h5>'; 
				}

			} 
		endif; ?>
	</div><!-- end col md 12 -->
</div>


<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Usuario Enderecos'); ?></h3>
	<?php if (!empty($usuario['UsuarioEndereco'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Endereco Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($usuario['UsuarioEndereco'] as $usuarioEndereco): ?>
		<tr>
			<td><?php echo $usuarioEndereco['usuario_id']; ?></td>
			<td><?php echo $usuarioEndereco['endereco_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'usuario_enderecos', 'action' => 'view', $usuarioEndereco['usuario_id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'usuario_enderecos', 'action' => 'edit', $usuarioEndereco['usuario_id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'usuario_enderecos', 'action' => 'delete', $usuarioEndereco['usuario_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuarioEndereco['usuario_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Usuario Endereco'), array('controller' => 'usuario_enderecos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
