<?php
App::uses('AppController', 'Controller');
/**
 * PesquisaEnderecos Controller
 *
 * @property PesquisaEndereco $PesquisaEndereco
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PesquisaEnderecosController extends AppController {

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
		$this->PesquisaEndereco->recursive = 0;
		$this->set('pesquisaEnderecos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PesquisaEndereco->exists($id)) {
			throw new NotFoundException(__('Invalid pesquisa endereco'));
		}
		$options = array('conditions' => array('PesquisaEndereco.' . $this->PesquisaEndereco->primaryKey => $id));
		$this->set('pesquisaEndereco', $this->PesquisaEndereco->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PesquisaEndereco->create();
			if ($this->PesquisaEndereco->save($this->request->data)) {
				$this->Session->setFlash(__('The pesquisa endereco has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pesquisa endereco could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$pesquisas = $this->PesquisaEndereco->Pesquisa->find('list');
		$enderecos = $this->PesquisaEndereco->Endereco->find('list');
		$this->set(compact('pesquisas', 'enderecos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PesquisaEndereco->exists($id)) {
			throw new NotFoundException(__('Invalid pesquisa endereco'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PesquisaEndereco->save($this->request->data)) {
				$this->Session->setFlash(__('The pesquisa endereco has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pesquisa endereco could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PesquisaEndereco.' . $this->PesquisaEndereco->primaryKey => $id));
			$this->request->data = $this->PesquisaEndereco->find('first', $options);
		}
		$pesquisas = $this->PesquisaEndereco->Pesquisa->find('list');
		$enderecos = $this->PesquisaEndereco->Endereco->find('list');
		$this->set(compact('pesquisas', 'enderecos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PesquisaEndereco->id = $id;
		if (!$this->PesquisaEndereco->exists()) {
			throw new NotFoundException(__('Invalid pesquisa endereco'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PesquisaEndereco->delete()) {
			$this->Session->setFlash(__('The pesquisa endereco has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The pesquisa endereco could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
