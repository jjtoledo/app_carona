<?php
App::uses('AppController', 'Controller');
/**
 * Acessorios Controller
 *
 * @property Acessorio $Acessorio
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AcessoriosController extends AppController {

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
		$this->Acessorio->recursive = 0;
		$this->set('acessorios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Acessorio->exists($id)) {
			throw new NotFoundException(__('Invalid acessorio'));
		}
		$options = array('conditions' => array('Acessorio.' . $this->Acessorio->primaryKey => $id));
		$this->set('acessorio', $this->Acessorio->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Acessorio->create();
			if ($this->Acessorio->save($this->request->data)) {
				$this->Session->setFlash(__('The acessorio has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acessorio could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$usuarios = $this->Acessorio->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Acessorio->exists($id)) {
			throw new NotFoundException(__('Invalid acessorio'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Acessorio->save($this->request->data)) {
				$this->Session->setFlash(__('The acessorio has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The acessorio could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Acessorio.' . $this->Acessorio->primaryKey => $id));
			$this->request->data = $this->Acessorio->find('first', $options);
		}
		$usuarios = $this->Acessorio->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Acessorio->id = $id;
		if (!$this->Acessorio->exists()) {
			throw new NotFoundException(__('Invalid acessorio'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Acessorio->delete()) {
			$this->Session->setFlash(__('The acessorio has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The acessorio could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
