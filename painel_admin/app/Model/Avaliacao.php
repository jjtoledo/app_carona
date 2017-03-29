<?php
App::uses('AppModel', 'Model');
/**
 * Avaliacao Model
 *
 */
class Avaliacao extends AppModel {

	public $belongsTo = array(
		'UsuarioAvaliador' => array(
			'className' => 'Usuario',
			'foreignKey' => 'avaliador_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UsuarioAvaliado' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
