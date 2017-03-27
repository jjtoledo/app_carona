<div class="caronaUsuarios view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Carona Usuario'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Carona Usuario'), array('action' => 'edit', $caronaUsuario['CaronaUsuario']['carona_id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Carona Usuario'), array('action' => 'delete', $caronaUsuario['CaronaUsuario']['carona_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $caronaUsuario['CaronaUsuario']['carona_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Carona Usuarios'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Carona Usuario'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Caronas'), array('controller' => 'caronas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Carona'), array('controller' => 'caronas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">			
			<table cellpadding="0" cellspacing="0" class="table table-striped">
				<tbody>
				<tr>
		<th><?php echo __('Carona'); ?></th>
		<td>
			<?php echo $this->Html->link($caronaUsuario['Carona']['id'], array('controller' => 'caronas', 'action' => 'view', $caronaUsuario['Carona']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Usuario'); ?></th>
		<td>
			<?php echo $this->Html->link($caronaUsuario['Usuario']['id'], array('controller' => 'usuarios', 'action' => 'view', $caronaUsuario['Usuario']['id'])); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Flag Motorista'); ?></th>
		<td>
			<?php echo h($caronaUsuario['CaronaUsuario']['flag_motorista']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

