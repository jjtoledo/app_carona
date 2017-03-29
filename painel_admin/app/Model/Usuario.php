<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Acessorio $Acessorio
 * @property Pesquisa $Pesquisa
 * @property UsuarioAvaliacao $UsuarioAvaliacao
 * @property UsuarioEndereco $UsuarioEndereco
 */
class Usuario extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */

	public $belongsTo = array(
		'Endereco' => array(
			'className' => 'Endereco',
			'foreignKey' => 'endereco_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Acessorio' => array(
			'className' => 'Acessorio',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Pesquisa' => array(
			'className' => 'Pesquisa',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UsuarioAvaliacao' => array(
			'className' => 'UsuarioAvaliacao',
			'foreignKey' => 'usuario_id',
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
