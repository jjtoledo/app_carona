<div class="Franqueados index">

	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1><?php echo __('Relatórios'); ?></h1>
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
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;'.__('Usuários'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?></li>
								<li class="active"><a href="#"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;&nbsp;Avaliações</a></li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-barcode"></span>&nbsp;&nbsp;'.__('Gerar boletos'), array('action' => 'gera_boleto'), array('escape' => false)); ?></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">

			<?php 

			$existe = false;

			if($this->Session->check('Admin')) {

				foreach ($avaliacaos as $c): 

					if(isset($c)) { ?>

						<div class="jumbotron jumb">

							<?php echo $c['Usuario']['nome'] . ' escreveu:' ?> <br /> <?php echo 'Nota: <b>' . $c['Avaliacao']['nota'] . '</b><br />';

							echo '<br /><b>' . $c['Restaurante']['nome'] . '</b>'; 

					        echo '<h4>' . $c['Classificacao']['comentario'] . '</h4>' ?>

					    </div>

					<?php $existe = true; }  

				endforeach; 

				if ($existe == false) {
					echo '<h4>Nenhuma avaliação realizada até o momento!</h4>'; 
				}

			} ?>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->