<div class="usuarios form">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Add Usuario'); ?></h1>
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

																<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Usuarios'), array('action' => 'index'), array('escape' => false)); ?></li>
									<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Acessorios'), array('controller' => 'acessorios', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Acessorio'), array('controller' => 'acessorios', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Pesquisas'), array('controller' => 'pesquisas', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Pesquisa'), array('controller' => 'pesquisas', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Usuario Avaliacaos'), array('controller' => 'usuario_avaliacaos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Usuario Avaliacao'), array('controller' => 'usuario_avaliacaos', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-list"></span>&nbsp;&nbsp;'.__('List Usuario Enderecos'), array('controller' => 'usuario_enderecos', 'action' => 'index'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;'.__('New Usuario Endereco'), array('controller' => 'usuario_enderecos', 'action' => 'add'), array('escape' => false)); ?> </li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Usuario', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('senha', array('class' => 'form-control', 'placeholder' => 'Senha'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('ativo', array('class' => 'form-control', 'placeholder' => 'Ativo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('bloqueado', array('class' => 'form-control', 'placeholder' => 'Bloqueado'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('data_nascimento', array('class' => 'form-control', 'placeholder' => 'Data Nascimento'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone1', array('class' => 'form-control', 'placeholder' => 'Telefone1'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('telefone2', array('class' => 'form-control', 'placeholder' => 'Telefone2'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('foto', array('class' => 'form-control', 'placeholder' => 'Foto'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cpf', array('class' => 'form-control', 'placeholder' => 'Cpf'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('num_carteira_motorista', array('class' => 'form-control', 'placeholder' => 'Num Carteira Motorista'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('marca_veiculo', array('class' => 'form-control', 'placeholder' => 'Marca Veiculo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('placa_veiculo', array('class' => 'form-control', 'placeholder' => 'Placa Veiculo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('cor_veiculo', array('class' => 'form-control', 'placeholder' => 'Cor Veiculo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('modelo_veiculo', array('class' => 'form-control', 'placeholder' => 'Modelo Veiculo'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('data_inclusao_registro', array('class' => 'form-control', 'placeholder' => 'Data Inclusao Registro'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->submit(__('Submit'), array('class' => 'btn btn-default')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
