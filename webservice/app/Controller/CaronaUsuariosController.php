<?php
App::uses('AppController', 'Controller');
/**
 * CaronaUsuarios Controller
 *
 * @property CaronaUsuario $CaronaUsuario
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class CaronaUsuariosController extends AppController {

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
		$this->CaronaUsuario->recursive = 0;
		$this->set('caronaUsuarios', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CaronaUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid carona usuario'));
		}
		$options = array('conditions' => array('CaronaUsuario.' . $this->CaronaUsuario->primaryKey => $id));
		$this->set('caronaUsuario', $this->CaronaUsuario->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CaronaUsuario->create();
			if ($this->CaronaUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The carona usuario has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carona usuario could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$caronas = $this->CaronaUsuario->Carona->find('list');
		$usuarios = $this->CaronaUsuario->Usuario->find('list');
		$this->set(compact('caronas', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CaronaUsuario->exists($id)) {
			throw new NotFoundException(__('Invalid carona usuario'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CaronaUsuario->save($this->request->data)) {
				$this->Session->setFlash(__('The carona usuario has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carona usuario could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('CaronaUsuario.' . $this->CaronaUsuario->primaryKey => $id));
			$this->request->data = $this->CaronaUsuario->find('first', $options);
		}
		$caronas = $this->CaronaUsuario->Carona->find('list');
		$usuarios = $this->CaronaUsuario->Usuario->find('list');
		$this->set(compact('caronas', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CaronaUsuario->id = $id;
		if (!$this->CaronaUsuario->exists()) {
			throw new NotFoundException(__('Invalid carona usuario'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CaronaUsuario->delete()) {
			$this->Session->setFlash(__('The carona usuario has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The carona usuario could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
