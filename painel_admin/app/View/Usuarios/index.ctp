<div class="usuarios index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuarios'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->



	<div class="row">

		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Actions'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Usuario'), array('action' => 'add'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Acessorios'), array('controller' => 'acessorios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Acessorio'), array('controller' => 'acessorios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Pesquisas'), array('controller' => 'pesquisas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Pesquisa'), array('controller' => 'pesquisas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Usuario Avaliacaos'), array('controller' => 'usuario_avaliacaos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Usuario Avaliacao'), array('controller' => 'usuario_avaliacaos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;List'.__('Usuario Enderecos'), array('controller' => 'usuario_enderecos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New'.__('Usuario Endereco'), array('controller' => 'usuario_enderecos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<thead>
					<tr>
						<th nowrap><?php echo $this->Paginator->sort('id'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('nome'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('email'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('senha'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('ativo'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('bloqueado'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('data_nascimento'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('telefone1'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('telefone2'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('foto'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('cpf'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('num_carteira_motorista'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('marca_veiculo'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('placa_veiculo'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('cor_veiculo'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('modelo_veiculo'); ?></th>
						<th nowrap><?php echo $this->Paginator->sort('data_inclusao_registro'); ?></th>
						<th class="actions"></th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($usuarios as $usuario): ?>
					<tr>
						<td nowrap><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['senha']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['ativo']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['bloqueado']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['data_nascimento']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['telefone1']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['telefone2']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['foto']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['cpf']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['num_carteira_motorista']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['marca_veiculo']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['placa_veiculo']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['cor_veiculo']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['modelo_veiculo']); ?>&nbsp;</td>
						<td nowrap><?php echo h($usuario['Usuario']['data_inclusao_registro']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-search"></span>', array('action' => 'view', $usuario['Usuario']['id']), array('escape' => false)); ?>
							<?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span>', array('action' => 'edit', $usuario['Usuario']['id']), array('escape' => false)); ?>
							<?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>', array('action' => 'delete', $usuario['Usuario']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>

			<p>
				<small><?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));?></small>
			</p>

			<?php
			$params = $this->Paginator->params();
			if ($params['pageCount'] > 1) {
			?>
			<ul class="pagination pagination-sm">
				<?php
					echo $this->Paginator->prev('&larr; Previous', array('class' => 'prev','tag' => 'li','escape' => false), '<a onclick="return false;">&larr; Previous</a>', array('class' => 'prev disabled','tag' => 'li','escape' => false));
					echo $this->Paginator->numbers(array('separator' => '','tag' => 'li','currentClass' => 'active','currentTag' => 'a'));
					echo $this->Paginator->next('Next &rarr;', array('class' => 'next','tag' => 'li','escape' => false), '<a onclick="return false;">Next &rarr;</a>', array('class' => 'next disabled','tag' => 'li','escape' => false));
				?>
			</ul>
			<?php } ?>

		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->