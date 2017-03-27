<?php
App::uses('AppController', 'Controller');
/**
 * UsuarioEnderecos Controller
 *
 * @property UsuarioEndereco $UsuarioEndereco
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsuarioEnderecosController extends AppController {

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
		$this->UsuarioEndereco->recursive = 0;
		$this->set('usuarioEnderecos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsuarioEndereco->exists($id)) {
			throw new NotFoundException(__('Invalid usuario endereco'));
		}
		$options = array('conditions' => array('UsuarioEndereco.' . $this->UsuarioEndereco->primaryKey => $id));
		$this->set('usuarioEndereco', $this->UsuarioEndereco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsuarioEndereco->create();
			if ($this->UsuarioEndereco->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario endereco has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario endereco could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$usuarios = $this->UsuarioEndereco->Usuario->find('list');
		$enderecos = $this->UsuarioEndereco->Endereco->find('list');
		$this->set(compact('usuarios', 'enderecos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsuarioEndereco->exists($id)) {
			throw new NotFoundException(__('Invalid usuario endereco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsuarioEndereco->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario endereco has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario endereco could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('UsuarioEndereco.' . $this->UsuarioEndereco->primaryKey => $id));
			$this->request->data = $this->UsuarioEndereco->find('first', $options);
		}
		$usuarios = $this->UsuarioEndereco->Usuario->find('list');
		$enderecos = $this->UsuarioEndereco->Endereco->find('list');
		$this->set(compact('usuarios', 'enderecos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsuarioEndereco->id = $id;
		if (!$this->UsuarioEndereco->exists()) {
			throw new NotFoundException(__('Invalid usuario endereco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UsuarioEndereco->delete()) {
			$this->Session->setFlash(__('The usuario endereco has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The usuario endereco could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
