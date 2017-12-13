<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;

class PaginasController extends AppController
{

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		$this->Auth->allow('view');
	}

	public function view ($url)
	{
		$query = $this->Paginas->find()
						->contain(['Categorias'])
						->where([
							'Paginas.url' => $url
						]);
		$pagina = $query->first();

		if (empty($pagina)) {
			throw new NotFoundException('Página não encontrada');
		}

		$this->set(compact('pagina'));
	}

}