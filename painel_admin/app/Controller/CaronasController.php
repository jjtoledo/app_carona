<?php
App::uses('AppController', 'Controller');
/**
 * Caronas Controller
 *
 * @property Carona $Carona
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CaronasController extends AppController {

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
		$this->Carona->recursive = 0;
		$this->set('caronas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Carona->exists($id)) {
			throw new NotFoundException(__('Invalid carona'));
		}
		$options = array('conditions' => array('Carona.' . $this->Carona->primaryKey => $id));
		$this->set('carona', $this->Carona->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Carona->create();
			if ($this->Carona->save($this->request->data)) {
				$this->Session->setFlash(__('The carona has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carona could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->Carona->exists($id)) {
			throw new NotFoundException(__('Invalid carona'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Carona->save($this->request->data)) {
				$this->Session->setFlash(__('The carona has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carona could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Carona.' . $this->Carona->primaryKey => $id));
			$this->request->data = $this->Carona->find('first', $options);
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
		$this->Carona->id = $id;
		if (!$this->Carona->exists()) {
			throw new NotFoundException(__('Invalid carona'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Carona->delete()) {
			$this->Session->setFlash(__('The carona has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The carona could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
