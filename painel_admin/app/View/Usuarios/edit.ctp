<div class="usuarios form">

	<script type="text/javascript">
		
		jQuery(function($){	
		  $("#data_nasc").mask("99/99/9999",{autoclear: false}); 
		});
	
	</script>

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Editar Usuário'); ?></h1>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3">
			<div class="actions">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo __('Ações'); ?></div>
						<div class="panel-body">
							<ul class="nav nav-pills nav-stacked">
								<li><?php echo $this->Html->link('<span class="fa fa-search"></span>&nbsp;&nbsp;'.__('Detalhes do Usuário'), array('action' => 'view', $this->Form->value('Usuario.id')), array('escape' => false)); ?> </li>
								<li><?php echo $this->Html->link('<span class="fa fa-list"></span>&nbsp;&nbsp;'.__('Listar Usuários'), array('action' => 'index'), array('escape' => false)); ?></li>
							</ul>
						</div>
					</div>
				</div>			
		</div><!-- end col md 3 -->
		<div class="col-md-9">
			<?php echo $this->Form->create('Usuario', array('role' => 'form')); ?>

				<div class="form-group">
					<?php echo $this->Form->input('id', array('class' => 'form-control', 'placeholder' => 'Id'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('nome', array('class' => 'form-control', 'placeholder' => 'Nome'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('email', array('class' => 'form-control', 'placeholder' => 'Email'));?>
				</div>
				<div class="form-group">
					<?php echo $this->Form->input('data_nascimento', array('class' => 'form-control', 'type' => 'text', 'placeholder' => 'Data Nascimento', 'id' => 'data_nasc'));?>
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
					<?php echo $this->Form->input('placa_veiculo', array('class' => 'form-control', 'placeholder' => 'Placa Veiculo', 'id' => 'placa'));?>
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
					<?php echo $this->Form->submit(__('Salvar'), array('class' => 'btn btn-primary')); ?>
				</div>

			<?php echo $this->Form->end() ?>

		</div><!-- end col md 12 -->
	</div><!-- end row -->
</div>
