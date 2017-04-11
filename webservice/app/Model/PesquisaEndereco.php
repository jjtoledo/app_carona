<?php
App::uses('AppModel', 'Model');
/**
 * PesquisaEndereco Model
 *
 * @property Pesquisa $Pesquisa
 * @property Endereco $Endereco
 */
class PesquisaEndereco extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'pesquisa_id';


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Pesquisa' => array(
			'className' => 'Pesquisa',
			'foreignKey' => 'pesquisa_id',
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
