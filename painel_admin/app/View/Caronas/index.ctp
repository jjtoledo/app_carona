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
								<li class="active"><a href="#"><span class="fa fa-car"></span>&nbsp;&nbsp;Caronas</a></li>
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;'.__('Usuários'), array('controller' => 'usuarios', 'action' => 'index'), array('escape' => false)); ?></li>
								<!--<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-star-empty"></span>&nbsp;&nbsp;'.__('Avaliações'), array('controller' => 'avaliacaos', 'action' => 'index'), array('escape' => false)); ?></li>-->
								<li><?php echo $this->Html->link('<span class="glyphicon glyphicon-barcode"></span>&nbsp;&nbsp;'.__('Gerar boletos'), array('action' => 'gera_boleto'), array('escape' => false)); ?></li>
							</ul>
						</div><!-- end body -->
				</div><!-- end panel -->
			</div><!-- end actions -->
		</div><!-- end col md 3 -->

		<div class="col-md-9">

			<?php 
				if (empty($caronas)) {
					echo '<h4>Nenhuma carona realizada!</h4>';
				} else {
					echo '<div class="row">';
					$count = 0;
						foreach ($caronas as $c) {	

							if ($count % 2 == 0 && $count > 0) {
								echo '</div>';
								echo '<hr>';
								echo '<div class="row" style="margin-top:20px">';
							}

							echo '<div class="col-md-6 carona1">';

								echo '<div class="carona2">';

									$valor = $c['Carona']['valor_com'];
									$users = count($c['CaronaUsuario']) - 1;
									$result = $valor * $users; 

									echo date('d/m/Y' , strtotime($c['Carona']['data_hora'])) . ' - <b>Saída:</b> ' . date('h:i' , strtotime($c['Carona']['data_hora'])) . 'h <div class="pull-right"><span class="fa fa-money"> $' . $result . '</span>&nbsp;&nbsp;<span class="badge">' . $status[$c['Carona']['status']] . '</span>&nbsp;&nbsp;</div><br><hr class="hr1">';

									echo '<span class="fa fa-map-marker"></span>&nbsp;&nbsp;' . 

									'<p class="p_inline" title="' .  $c['EnderecoOrigem']['rua'] . ', ' . $c['EnderecoOrigem']['numero'] . ', ' . $c['EnderecoOrigem']['bairro'] . '">' . 
										$c['EnderecoOrigem']['Cidade']['nome'] . 
									'</p> / ' . 

									'<p class="p_inline" title="' .  $c['EnderecoOrigem']['rua'] . ', ' . $c['EnderecoOrigem']['numero'] . ', ' . $c['EnderecoOrigem']['bairro'] . '">' .
										$c['EnderecoOrigem']['Cidade']['Estado']['nome'] . 
									'</p> ' . 

									'&nbsp;&nbsp;<span class="fa fa-arrow-right"></span>&nbsp;&nbsp;' .

									'<p class="p_inline" title="' .  $c['EnderecoOrigem']['rua'] . ', ' . $c['EnderecoOrigem']['numero'] . ', ' . $c['EnderecoOrigem']['bairro'] . '">' .
										$c['EnderecoDestino']['Cidade']['nome'] . ' / ' .
									'</p> ' .

									'<p class="p_inline" title="' .  $c['EnderecoOrigem']['rua'] . ', ' . $c['EnderecoOrigem']['numero'] . ', ' . $c['EnderecoOrigem']['bairro'] . '">' .  
										$c['EnderecoOrigem']['Cidade']['Estado']['nome'] .
									'</p><br><br>';

									foreach ($c['CaronaUsuario'] as $cu) {

										if($cu['flag_motorista'] == true) {
											echo '<span class="fa fa-car"></span>&nbsp;&nbsp;' . $cu['Usuario']['nome'];

											$media = 0;

											foreach ($c['Avaliacao'] as $a) {
											 	if($a['usuario_id'] == $cu['Usuario']['id']) {
											 		$media += $a['nota'];
											 	}
											} 

											echo ' - ' . round(($media / (count($cu) - 1)),2) . '<br>';
										}
									}

									foreach ($c['CaronaUsuario'] as $cu) {

										if($cu['flag_motorista'] == false) {
											echo '<span class="fa fa-user"></span>&nbsp;&nbsp;' . $cu['Usuario']['nome'];

											$nota = 0;

											foreach ($c['Avaliacao'] as $a) {
											 	if($a['usuario_id'] == $cu['Usuario']['id']) {
											 		$nota = $a['nota'];
											 	}
											} 

											echo ' - ' . $nota . '<br>';
										}
									}




									

								echo '</div>';

							echo '</div>';

							$count++;
						}
					echo '</div>';
				}
			?>
		</div> <!-- end col md 9 -->
	</div><!-- end row -->


</div><!-- end containing of content -->