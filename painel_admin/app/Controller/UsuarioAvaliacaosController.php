<?php
App::uses('AppController', 'Controller');
/**
 * UsuarioAvaliacaos Controller
 *
 * @property UsuarioAvaliacao $UsuarioAvaliacao
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class UsuarioAvaliacaosController extends AppController {

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
		$this->UsuarioAvaliacao->recursive = 0;
		$this->set('usuarioAvaliacaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsuarioAvaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid usuario avaliacao'));
		}
		$options = array('conditions' => array('UsuarioAvaliacao.' . $this->UsuarioAvaliacao->primaryKey => $id));
		$this->set('usuarioAvaliacao', $this->UsuarioAvaliacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsuarioAvaliacao->create();
			if ($this->UsuarioAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario avaliacao has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario avaliacao could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$usuarios = $this->UsuarioAvaliacao->Usuario->find('list');
		$avaliacaos = $this->UsuarioAvaliacao->Avaliacao->find('list');
		$this->set(compact('usuarios', 'avaliacaos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UsuarioAvaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid usuario avaliacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsuarioAvaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The usuario avaliacao has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usuario avaliacao could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('UsuarioAvaliacao.' . $this->UsuarioAvaliacao->primaryKey => $id));
			$this->request->data = $this->UsuarioAvaliacao->find('first', $options);
		}
		$usuarios = $this->UsuarioAvaliacao->Usuario->find('list');
		$avaliacaos = $this->UsuarioAvaliacao->Avaliacao->find('list');
		$this->set(compact('usuarios', 'avaliacaos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UsuarioAvaliacao->id = $id;
		if (!$this->UsuarioAvaliacao->exists()) {
			throw new NotFoundException(__('Invalid usuario avaliacao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UsuarioAvaliacao->delete()) {
			$this->Session->setFlash(__('The usuario avaliacao has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The usuario avaliacao could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
