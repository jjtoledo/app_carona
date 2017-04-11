<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsuariosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Usuario->recursive = 0;
		$this->set('usuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}

		$options = array(
			'contain' => array(
				'AvaliacaoRealizada'=> array(
					'UsuarioAvaliado' => array(
						'fields' => 'UsuarioAvaliado.nome'
					)
				),
				'AvaliacaoRecebida' => array(
					'UsuarioAvaliador' => array(
						'fields' => 'UsuarioAvaliador.nome'
					)
				),
				'Endereco' => array(
					'Cidade' => array(
						'Estado' => array(
							'Pais'
						)
					)
				),
				'Acessorio'
			),
			'conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id)
		);

		$this->set('usuario', $this->Usuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) {
	            $message = 'Saved';
	        } else {
	            $message = 'Error';
	        }
	        $this->set(array(
	            'message' => $message,
	            '_serialize' => array('message')
	        ));
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Usuario->exists($id)) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Usuario->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Usuario.' . $this->Usuario->primaryKey => $id));
			$usuario = $this->Usuario->find('first', $options);
			$usuario['Usuario']['data_nascimento'] = date('d/m/Y', strtotime($usuario['Usuario']['data_nascimento']));
			$this->request->data = $usuario;
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $ativo = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->onlyAllow('post', 'delete');

		if($ativo == 1) {
			$this->Usuario->id = $id; 
			if($this->Usuario->saveField('ativo', 0)) {
				$this->Session->setFlash(__('O usuário foi desativado com sucesso.'), 'success', array('class' => 'alert alert-success'));
			}else {
				$this->Session->setFlash(__('O usuário não foi desativado. Por favor, tente novamente.'), 'erro', array('class' => 'alert alert-danger'));
			}
		} else {
			$this->Usuario->id = $id; 
			if($this->Usuario->saveField('ativo', 1)) {
				$this->Session->setFlash(__('O usuário foi ativado com sucesso.'), 'success', array('class' => 'alert alert-success'));
			}else {
				$this->Session->setFlash(__('O usuário não foi ativado. Por favor, tente novamente.'), 'erro', array('class' => 'alert alert-danger'));
			}
		}
		return $this->redirect($this->referer());
	}

	public function block($id = null, $bloqueado = null) {
		$this->Usuario->id = $id;
		if (!$this->Usuario->exists()) {
			throw new NotFoundException(__('Invalid usuario'));
		}
		$this->request->onlyAllow('post', 'delete');

		if($bloqueado == 1) {
			$this->Usuario->id = $id; 
			if($this->Usuario->saveField('bloqueado', 0)) {
				$this->Session->setFlash(__('O usuário foi desbloqueado com sucesso.'), 'success', array('class' => 'alert alert-success'));
			}else {
				$this->Session->setFlash(__('O usuário não foi desbloqueado. Por favor, tente novamente.'), 'erro', array('class' => 'alert alert-danger'));
			}
		} else {
			$this->Usuario->id = $id; 
			if($this->Usuario->saveField('bloqueado', 1)) {
				$this->Session->setFlash(__('O usuário foi bloqueado com sucesso.'), 'success', array('class' => 'alert alert-success'));
			}else {
				$this->Session->setFlash(__('O usuário não foi bloqueado. Por favor, tente novamente.'), 'erro', array('class' => 'alert alert-danger'));
			}
		}

		return $this->redirect($this->referer());
	}
}
