<?php
App::uses('AppModel', 'Model');
/**
 * UsuarioEndereco Model
 *
 * @property Usuario $Usuario
 * @property Endereco $Endereco
 */
class UsuarioEndereco extends AppModel {

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
		'Endereco' => array(
			'className' => 'Endereco',
			'foreignKey' => 'endereco_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
