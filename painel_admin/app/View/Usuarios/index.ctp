<div class="Franqueados index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Usuários'); ?></h1>
			</div>
		</div><!-- end col md 12 -->
	</div><!-- end row -->

	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-stats"></span>&nbsp;&nbsp;'.__('Relatórios'), array('controller' => 'admins', 'action' => 'home'), array('escape' => false)); ?></li>
								<li><?php echo $this->Html->link('<span class="fa fa-car"></span>&nbsp;&nbsp;'.__('Caronas'), array('controller' => 'caronas', 'action' => 'index'), array('escape' => false)); ?></li>
								<li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Usuários</a></li>
								<!--<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-star-empty"></span>&nbsp;&nbsp;'.__('Avaliações'), array('controller' => 'avaliacaos', 'action' => 'index'), array('escape' => false)); ?></li>-->
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-barcode"></span>&nbsp;&nbsp;'.__('Gerar boletos'), array('action' => 'gera_boleto'), array('escape' => false)); ?></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">

			<?php if(!empty($usuarios)) { ?>

				<table cellpadding="0" cellspacing="0" class="table table-striped">
					<thead>
						<tr>
							<th nowrap><?php echo $this->Paginator->sort('nome'); ?></th>
							<th nowrap><?php echo $this->Paginator->sort('email'); ?></th>
							<th nowrap><?php echo $this->Paginator->sort('telefone1'); ?></th>
							<th nowrap><?php echo $this->Paginator->sort('telefone2'); ?></th>
							<th nowrap><?php echo $this->Paginator->sort('ativo'); ?></th>
							<th nowrap><?php echo $this->Paginator->sort('bloqueado'); ?></th>
							<th class="actions"></th>
						</tr>
					</thead>
					<tbody>
					<?php foreach ($usuarios as $usuario): ?>
						<tr>
							<td nowrap><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
							<td nowrap><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
							<td nowrap><?php echo h($usuario['Usuario']['telefone1']); ?>&nbsp;</td>
							<td nowrap><?php echo h($usuario['Usuario']['telefone2']); ?>&nbsp;</td>
							<td nowrap><?php if($usuario['Usuario']['ativo'] == 1){
												echo '<span class="fa fa-check"></span>';
											 } else {
											 	echo '<span class="fa fa-close"></span>';
											 } ?>&nbsp;</td>
							<td nowrap><?php if($usuario['Usuario']['bloqueado'] == 0) {
												echo 'Não';
											 } else {
											 	echo 'Sim';
											 } ?>&nbsp;</td>
							<td class="actions">
								<?php echo $this->Html->link('<span class="fa fa-search"></span>', array('action' => 'view', $usuario['Usuario']['id']), array('escape' => false)); ?>
								<?php //echo $this->Html->link('<span class="fa fa-pencil"></span>', array('action' => 'edit', $usuario['Usuario']['id']), array('escape' => false)); ?>

								<?php if($usuario['Usuario']['ativo'] == 1) { 
										echo $this->Form->postLink('<span class="fa fa-remove"></span>', array('action' => 'delete', $usuario['Usuario']['id'], $usuario['Usuario']['ativo']), array('escape' => false), __('Tem certeza que deseja desativar o usuário: %s?', $usuario['Usuario']['nome'])); 
									  } else {
									  	echo $this->Form->postLink('<span class="fa fa-check"></span>', array('action' => 'delete', $usuario['Usuario']['id'], $usuario['Usuario']['ativo']), array('escape' => false), __('Tem certeza que deseja ativar o usuário: %s?', $usuario['Usuario']['nome'])); 
									  } ?>

								<?php if($usuario['Usuario']['bloqueado'] == 0) { 
										echo $this->Form->postLink('<span class="fa fa-lock"></span>', array('action' => 'block', $usuario['Usuario']['id'], $usuario['Usuario']['bloqueado']), array('escape' => false), __('Tem certeza que deseja bloquear o usuário: %s?', $usuario['Usuario']['nome'])); 
									  } else {
									  	echo $this->Form->postLink('<span class="fa fa-unlock"></span>', array('action' => 'block', $usuario['Usuario']['id'], $usuario['Usuario']['bloqueado']), array('escape' => false), __('Tem certeza que deseja desbloquear o usuário: %s?', $usuario['Usuario']['nome']));
									  } ?>
							</td>
						</tr>
					<?php endforeach; ?>
					</tbody>
				</table>

			<?php } else { 

				echo '<h4>Nenhum usuário cadastrado !</h4>';

			} ?>

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