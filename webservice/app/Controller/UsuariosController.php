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


	public function add() {
		
		$message = '';

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
}