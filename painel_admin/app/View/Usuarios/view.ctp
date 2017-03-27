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
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Acessorios'), array('controller' => 'acessorios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Acessorio'), array('controller' => 'acessorios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pesquisas'), array('controller' => 'pesquisas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pesquisa'), array('controller' => 'pesquisas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuario Avaliacaos'), array('controller' => 'usuario_avaliacaos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario Avaliacao'), array('controller' => 'usuario_avaliacaos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuario Enderecos'), array('controller' => 'usuario_enderecos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario Endereco'), array('controller' => 'usuario_enderecos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Id'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nome'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['nome']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Email'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Senha'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['senha']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Ativo'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['ativo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Bloqueado'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['bloqueado']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Data Nascimento'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['data_nascimento']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone1'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['telefone1']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Telefone2'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['telefone2']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Foto'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['foto']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cpf'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['cpf']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Num Carteira Motorista'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['num_carteira_motorista']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Marca Veiculo'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['marca_veiculo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Placa Veiculo'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['placa_veiculo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Cor Veiculo'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['cor_veiculo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Modelo Veiculo'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['modelo_veiculo']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Data Inclusao Registro'); ?></th>
		<td>
			<?php echo h($usuario['Usuario']['data_inclusao_registro']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Acessorios'); ?></h3>
	<?php if (!empty($usuario['Acessorio'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($usuario['Acessorio'] as $acessorio): ?>
		<tr>
			<td><?php echo $acessorio['id']; ?></td>
			<td><?php echo $acessorio['nome']; ?></td>
			<td><?php echo $acessorio['usuario_id']; ?></td>
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

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Acessorio'), array('controller' => 'acessorios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Pesquisas'); ?></h3>
	<?php if (!empty($usuario['Pesquisa'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($usuario['Pesquisa'] as $pesquisa): ?>
		<tr>
			<td><?php echo $pesquisa['id']; ?></td>
			<td><?php echo $pesquisa['usuario_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'pesquisas', 'action' => 'view', $pesquisa['id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'pesquisas', 'action' => 'edit', $pesquisa['id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'pesquisas', 'action' => 'delete', $pesquisa['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pesquisa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pesquisa'), array('controller' => 'pesquisas', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
<div class="related row">
	<div class="col-md-12">
	<h3><?php echo __('Related Usuario Avaliacaos'); ?></h3>
	<?php if (!empty($usuario['UsuarioAvaliacao'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Avaliacao Id'); ?></th>
		<th><?php echo __('Flag Avaliado'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($usuario['UsuarioAvaliacao'] as $usuarioAvaliacao): ?>
		<tr>
			<td><?php echo $usuarioAvaliacao['usuario_id']; ?></td>
			<td><?php echo $usuarioAvaliacao['avaliacao_id']; ?></td>
			<td><?php echo $usuarioAvaliacao['flag_avaliado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'usuario_avaliacaos', 'action' => 'view', $usuarioAvaliacao['usuario_id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'usuario_avaliacaos', 'action' => 'edit', $usuarioAvaliacao['usuario_id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'usuario_avaliacaos', 'action' => 'delete', $usuarioAvaliacao['usuario_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuarioAvaliacao['usuario_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Usuario Avaliacao'), array('controller' => 'usuario_avaliacaos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
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
