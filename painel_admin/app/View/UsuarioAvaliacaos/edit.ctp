<div class="usuarioAvaliacaos form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Edit Usuario Avaliacao'); ?></h1>
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

																<li><?php echo $this->Form->postLink('<span class="glyphicon glyphicon-remove"></span>&nbsp;&nbsp;'.__('Delete'), array('action' => 'delete', $this->Form->value('UsuarioAvaliacao.usuario_id')), array('escape' => false), __('Are you sure you want to delete # %s?', $this->Form->value('UsuarioAvaliacao.usuario_id'))); ?></li>
																<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Usuario Avaliacaos'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Avaliacaos'), array('controller' => 'avaliacaos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Avaliacao'), array('controller' => 'avaliacaos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('UsuarioAvaliacao', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('usuario_id', array('class' => 'form-control', 'placeholder' => 'Usuario Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('avaliacao_id', array('class' => 'form-control', 'placeholder' => 'Avaliacao Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('flag_avaliado', array('class' => 'form-control', 'placeholder' => 'Flag Avaliado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
