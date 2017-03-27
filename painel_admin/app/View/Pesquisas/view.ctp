<div class="pesquisas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pesquisa'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Pesquisa'), array('action' => 'edit', $pesquisa['Pesquisa']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Pesquisa'), array('action' => 'delete', $pesquisa['Pesquisa']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pesquisa['Pesquisa']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pesquisas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pesquisa'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pesquisa Enderecos'), array('controller' => 'pesquisa_enderecos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pesquisa Endereco'), array('controller' => 'pesquisa_enderecos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($pesquisa['Pesquisa']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo $this->Html->link($pesquisa['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $pesquisa['Usuario']['id'])); ?>
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
	<h3><?php echo __('Related Pesquisa Enderecos'); ?></h3>
	<?php if (!empty($pesquisa['PesquisaEndereco'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Pesquisa Id'); ?></th>
		<th><?php echo __('Endereco Id'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($pesquisa['PesquisaEndereco'] as $pesquisaEndereco): ?>
		<tr>
			<td><?php echo $pesquisaEndereco['pesquisa_id']; ?></td>
			<td><?php echo $pesquisaEndereco['endereco_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'pesquisa_enderecos', 'action' => 'view', $pesquisaEndereco['pesquisa_id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'pesquisa_enderecos', 'action' => 'edit', $pesquisaEndereco['pesquisa_id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'pesquisa_enderecos', 'action' => 'delete', $pesquisaEndereco['pesquisa_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pesquisaEndereco['pesquisa_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Pesquisa Endereco'), array('controller' => 'pesquisa_enderecos', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
