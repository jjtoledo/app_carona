<div class="pesquisaEnderecos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Pesquisa Endereco'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Pesquisa Endereco'), array('action' => 'edit', $pesquisaEndereco['PesquisaEndereco']['pesquisa_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Pesquisa Endereco'), array('action' => 'delete', $pesquisaEndereco['PesquisaEndereco']['pesquisa_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $pesquisaEndereco['PesquisaEndereco']['pesquisa_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pesquisa Enderecos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pesquisa Endereco'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Pesquisas'), array('controller' => 'pesquisas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Pesquisa'), array('controller' => 'pesquisas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Enderecos'), array('controller' => 'enderecos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Endereco'), array('controller' => 'enderecos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Pesquisa'); ?></th>
		<td>
			<?php echo $this->Html->link($pesquisaEndereco['Pesquisa']['id'], array('controller' => 'pesquisas', 'action' => 'view', $pesquisaEndereco['Pesquisa']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo $this->Html->link($pesquisaEndereco['Endereco']['id'], array('controller' => 'enderecos', 'action' => 'view', $pesquisaEndereco['Endereco']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

