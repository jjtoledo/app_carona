<?php
App::uses('AppController', 'Controller');
/**
 * Paisses Controller
 *
 * @property Paiss $Paiss
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PaissesController extends AppController {

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
		$this->Paiss->recursive = 0;
		$this->set('paisses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Paiss->exists($id)) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		$options = array('conditions' => array('Paiss.' . $this->Paiss->primaryKey => $id));
		$this->set('paiss', $this->Paiss->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paiss->create();
			if ($this->Paiss->save($this->request->data)) {
				$this->Session->setFlash(__('The paiss has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paiss could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Paiss->exists($id)) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Paiss->save($this->request->data)) {
				$this->Session->setFlash(__('The paiss has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paiss could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Paiss.' . $this->Paiss->primaryKey => $id));
			$this->request->data = $this->Paiss->find('first', $options);
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
		$this->Paiss->id = $id;
		if (!$this->Paiss->exists()) {
			throw new NotFoundException(__('Invalid paiss'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Paiss->delete()) {
			$this->Session->setFlash(__('The paiss has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The paiss could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
