<div class="usuarioAvaliacaos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuario Avaliacao'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Usuario Avaliacao'), array('action' => 'edit', $usuarioAvaliacao['UsuarioAvaliacao']['usuario_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Usuario Avaliacao'), array('action' => 'delete', $usuarioAvaliacao['UsuarioAvaliacao']['usuario_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $usuarioAvaliacao['UsuarioAvaliacao']['usuario_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuario Avaliacaos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario Avaliacao'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Avaliacaos'), array('controller' => 'avaliacaos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Avaliacao'), array('controller' => 'avaliacaos', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo $this->Html->link($usuarioAvaliacao['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $usuarioAvaliacao['Usuario']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Avaliacao'); ?></th>
		<td>
			<?php echo $this->Html->link($usuarioAvaliacao['Avaliacao']['id'], array('controller' => 'avaliacaos', 'action' => 'view', $usuarioAvaliacao['Avaliacao']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Flag Avaliado'); ?></th>
		<td>
			<?php echo h($usuarioAvaliacao['UsuarioAvaliacao']['flag_avaliado']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

