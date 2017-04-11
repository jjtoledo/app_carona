<?php
App::uses('AppModel', 'Model');
/**
 * CaronaUsuario Model
 *
 * @property Carona $Carona
 * @property Usuario $Usuario
 */
class CaronaUsuario extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'carona_id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Carona' => array(
			'className' => 'Carona',
			'foreignKey' => 'carona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
