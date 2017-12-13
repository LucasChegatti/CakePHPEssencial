<?php

namespace App\Controller\Admin;

use App\Controller\AppController;
use cake\Event\Event;

class UsersController extends AppController 
{
	/*public function beforeFilter (Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->deny(['view']); //bloqueia acesso a esse controller sem estar logado.
    }*/

	public function index ()
	{
		$this->paginate = [
			'limit' => 3
		];
		$data = $this->paginate($this->Users);
		$this->set(['results' => $data]);
	}

	public function login () 
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify(); // verifica se existe esse usuario
			if ($user) {
				$this->Auth->setUser($user); // usa esse usuario
				return $this->redirect($this->Auth->redirectUrl());
			}
		}
	}

	public function logout ()
	{
		return $this->redirect($this->Auth->logout());
	}

	public function view ($id = null)
	{
		$data = $this->Users->get($id);
		$this->set(['result' => $data]);
	}

	public function add ()
	{
		$user = $this->Users->newEntity();

		if ($this->request->is('post')) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				return $this->redirect([
					'action' => 'index'
				]);
			}
		}

	$this->set(['user' => $user]);
	}

	public function edit ($id = null) {
		$user = $this->Users->get($id);
		if ($this->request->is(['post', 'put'])) {
			$user = $this->Users->patchEntity($user, $this->request->data);
			if ($this->Users->save($user)) {
				return $this->redirect([
					'action' => 'index'
				]);
			}
		}

	$this->set(['user' => $user]);
	}

	public function delete ($id = null)
	{
		$this->request->allowMethod(['get', 'post', 'delete']);
		$user = $this->Users->get($id);
		$this->Users->delete($user);
		return $this->redirect([
					'action' => 'index'
				]);
	}

}