<?php
App::uses('AppController', 'Controller');
/**
 * Avaliacaos Controller
 *
 * @property Avaliacao $Avaliacao
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class AvaliacaosController extends AppController {

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
		$this->Avaliacao->recursive = 0;
		$this->set('avaliacaos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Avaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid avaliacao'));
		}
		$options = array('conditions' => array('Avaliacao.' . $this->Avaliacao->primaryKey => $id));
		$this->set('avaliacao', $this->Avaliacao->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Avaliacao->create();
			if ($this->Avaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The avaliacao has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The avaliacao could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
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
		if (!$this->Avaliacao->exists($id)) {
			throw new NotFoundException(__('Invalid avaliacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Avaliacao->save($this->request->data)) {
				$this->Session->setFlash(__('The avaliacao has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The avaliacao could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Avaliacao.' . $this->Avaliacao->primaryKey => $id));
			$this->request->data = $this->Avaliacao->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Avaliacao->id = $id;
		if (!$this->Avaliacao->exists()) {
			throw new NotFoundException(__('Invalid avaliacao'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Avaliacao->delete()) {
			$this->Session->setFlash(__('The avaliacao has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The avaliacao could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
