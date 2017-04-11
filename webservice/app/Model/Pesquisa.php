<?php
App::uses('AppModel', 'Model');
/**
 * Pesquisa Model
 *
 * @property Usuario $Usuario
 * @property PesquisaEndereco $PesquisaEndereco
 */
class Pesquisa extends AppModel {


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
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'PesquisaEndereco' => array(
			'className' => 'PesquisaEndereco',
			'foreignKey' => 'pesquisa_id',
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
