<div class="avaliacaos view">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Avaliacao'); ?></h1>
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
									<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-edit"></span>&nbsp&nbsp;Edit Avaliacao'), array('action' => 'edit', $avaliacao['Avaliacao']['id']), array('escape' => false)); ?> </li>
		<li><?php echo $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;Delete Avaliacao'), array('action' => 'delete', $avaliacao['Avaliacao']['id']), array('escape' => false), __('Are you sure you want to delete # %s?', $avaliacao['Avaliacao']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-list"></span>&nbsp&nbsp;List Avaliacaos'), array('action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('<span class="glyphicon glyphicon-plus"></span>&nbsp&nbsp;New Avaliacao'), array('action' => 'add'), array('escape' => false)); ?> </li>
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
			<?php echo h($avaliacao['Avaliacao']['id']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Nota'); ?></th>
		<td>
			<?php echo h($avaliacao['Avaliacao']['nota']); ?>
			&nbsp;
		</td>
</tr>
<tr>
		<th><?php echo __('Comentario'); ?></th>
		<td>
			<?php echo h($avaliacao['Avaliacao']['comentario']); ?>
			&nbsp;
		</td>
</tr>
				</tbody>
			</table>

		</div><!-- end col md 9 -->

	</div>
</div>

