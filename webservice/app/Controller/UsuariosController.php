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


	public function login() {

		$message = '';

		if ($this->request->is('post')) {

			if (!empty($this->data['Usuario']['email']) and
	        	!empty($this->data['Usuario']['senha'])) {
	        	 
	        	if ($this->validar()) {

	        		$message = 'Logou';

	        	} else {

	        		$message = 'Não Logou';

			    	$user1 = $this->Usuario->findAllByEmail($this->data['Usuario']['email']);

					if (empty($user1)) {
						$message = 'Usuário não existe !';
					} else {
						$message = 'Login e/ou senha inválidos !';
					}
			    }

			} else {
				$message = 'Ocorreu algum erro. Tente novamente.';
			}

			$this->set(array(
	            'message' => $message,
	            '_serialize' => array('message')
	        ));
		}
	}

	public function validar(){
		
		$user = $this->Usuario->findAllByEmailAndSenha(
    				$this->data['Usuario']['email'],
    				md5($this->data['Usuario']['senha']));
		if (!empty($user)) {
			return true;
		} else {
			return false;
		}
	}


	public function add() {
		
		$message = '';

		if ($this->request->is('post')) {

			$this->request->data['Usuario']['senha'] = md5($this->request->data['Usuario']['senha']);

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