<div class="caronas view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Carona'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Carona'), array('action' => 'edit', $carona['Carona']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Carona'), array('action' => 'delete', $carona['Carona']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $carona['Carona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Caronas'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Carona'), array('action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Carona Usuarios'), array('controller' => 'carona_usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Carona Usuario'), array('controller' => 'carona_usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($carona['Carona']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Qtd Vagas'); ?></th>
		<td>
			<?php echo h($carona['Carona']['qtd_vagas']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Data Hora'); ?></th>
		<td>
			<?php echo h($carona['Carona']['data_hora']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Status'); ?></th>
		<td>
			<?php echo h($carona['Carona']['status']); ?>
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
	<h3><?php echo __('Related Carona Usuarios'); ?></h3>
	<?php if (!empty($carona['CaronaUsuario'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-striped">
	<thead>
	<tr>
		<th><?php echo __('Carona Id'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Flag Motorista'); ?></th>
		<th class="actions"></th>
	</tr>
	<thead>
	<tbody>
	<?php foreach ($carona['CaronaUsuario'] as $caronaUsuario): ?>
		<tr>
			<td><?php echo $caronaUsuario['carona_id']; ?></td>
			<td><?php echo $caronaUsuario['usuario_id']; ?></td>
			<td><?php echo $caronaUsuario['flag_motorista']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-search"></span>'), array('controller' => 'carona_usuarios', 'action' => 'view', $caronaUsuario['carona_id']), array('escape' => false)); ?>
				<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>'), array('controller' => 'carona_usuarios', 'action' => 'edit', $caronaUsuario['carona_id']), array('escape' => false)); ?>
				<?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>'), array('controller' => 'carona_usuarios', 'action' => 'delete', $caronaUsuario['carona_id']), array('escape' => false), __('Are you sure you want to delete # %s?', $caronaUsuario['carona_id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;New Carona Usuario'), array('controller' => 'carona_usuarios', 'action' => 'add'), array('escape' => false, 'class' => 'btn btn-default')); ?> 
	</div>
	</div><!-- end col md 12 -->
</div>
