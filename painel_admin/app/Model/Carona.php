<?php
App::uses('AppModel', 'Model');
/**
 * Carona Model
 *
 * @property CaronaUsuario $CaronaUsuario
 */
class Carona extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CaronaUsuario' => array(
			'className' => 'CaronaUsuario',
			'foreignKey' => 'carona_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
