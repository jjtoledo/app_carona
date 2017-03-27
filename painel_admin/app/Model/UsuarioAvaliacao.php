<?php
App::uses('AppModel', 'Model');
/**
 * UsuarioAvaliacao Model
 *
 * @property Usuario $Usuario
 * @property Avaliacao $Avaliacao
 */
class UsuarioAvaliacao extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'usuario_id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Avaliacao' => array(
			'className' => 'Avaliacao',
			'foreignKey' => 'avaliacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
