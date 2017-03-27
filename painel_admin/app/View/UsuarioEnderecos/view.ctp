<div class="usuarioEnderecos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuario Endereco'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Usuario Endereco'), array('action' => 'edit', $usuarioEndereco['UsuarioEndereco']['usuario_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Usuario Endereco'), array('action' => 'delete', $usuarioEndereco['UsuarioEndereco']['usuario_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuarioEndereco['UsuarioEndereco']['usuario_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuario Enderecos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario Endereco'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
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
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo $this->Html->link($usuarioEndereco['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $usuarioEndereco['Usuario']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Endereco'); ?></th>
		<td>
			<?php echo $this->Html->link($usuarioEndereco['Endereco']['id'], array('controller' => 'enderecos', 'action' => 'view', $usuarioEndereco['Endereco']['id'])); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

