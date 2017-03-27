<?php
App::uses('AppController', 'Controller');
/**
 * Pesquisas Controller
 *
 * @property Pesquisa $Pesquisa
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PesquisasController extends AppController {

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
		$this->Pesquisa->recursive = 0;
		$this->set('pesquisas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pesquisa->exists($id)) {
			throw new NotFoundException(__('Invalid pesquisa'));
		}
		$options = array('conditions' => array('Pesquisa.' . $this->Pesquisa->primaryKey => $id));
		$this->set('pesquisa', $this->Pesquisa->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pesquisa->create();
			if ($this->Pesquisa->save($this->request->data)) {
				$this->Session->setFlash(__('The pesquisa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pesquisa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$usuarios = $this->Pesquisa->Usuario->find('list');
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
		if (!$this->Pesquisa->exists($id)) {
			throw new NotFoundException(__('Invalid pesquisa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pesquisa->save($this->request->data)) {
				$this->Session->setFlash(__('The pesquisa has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pesquisa could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Pesquisa.' . $this->Pesquisa->primaryKey => $id));
			$this->request->data = $this->Pesquisa->find('first', $options);
		}
		$usuarios = $this->Pesquisa->Usuario->find('list');
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
		$this->Pesquisa->id = $id;
		if (!$this->Pesquisa->exists()) {
			throw new NotFoundException(__('Invalid pesquisa'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pesquisa->delete()) {
			$this->Session->setFlash(__('The pesquisa has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The pesquisa could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
