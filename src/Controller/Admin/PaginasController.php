<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\Event\Event;

class PaginasController extends AppController
{
	/*public function beforeFilter (Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add']); // libera acesso para adicionar paginas sem ter login
    }*/

	public function index () 
	{
		$this->paginate = [ // manipula o limiter de registros por pagina
			'limit' => 10
		];
		$data = $this->paginate($this->Paginas); // paginate passandoo model
		//$data = $this->Paginas->find()->all(); // Paginas = model que é o nome que esta em table mas sem o sufixo table... find retorna o querybuilder do cake e all para todos os resultados.
		$this->set(['results' => $data]); // envia valor para view
	}

	public function view ($id = null)
	{
		$data = $this->Paginas->get($id);
		$this->set(['result' => $data]);
	}

	public function add ()
	{
		$pagina = $this->Paginas->newEntity(); // cria uma entidade

		if ($this->request->is('post')) {
			//debug($this->request->data); // debug para ver o que esta vindo na requisição 
			//exit; // evitar renderizar a pagina
			$pagina = $this->Paginas->patchEntity($pagina, $this->request->data); // injeta os dados($this->request->data) dentro da entidade($categoria)
			if ($this->Paginas->save($pagina)) { // save responsavel por salvar os dados no banco
				return $this->redirect([
					'action' => 'index'
				]); // redireciona para url
			}
		}
		$categorias = $this->Paginas->Categorias->find('list', ['limit'=>200]);
		$this->set(compact('pagina', 'categorias')); // passando model para view, colocando em pagina o objeto da model, newEtity
	}

	public function edit ($id = null)
	{
		$pagina = $this->Paginas->get($id); 
		if ($this->request->is(['post', 'put'])) { // put responsavel por atualizar registros
			$pagina = $this->Paginas->patchEntity($pagina, $this->request->data); 
			if ($this->Paginas->save($pagina)) { 
				return $this->redirect([
					'action' => 'index'
				]); 
			}
		}

		$categorias = $this->Paginas->Categorias->find('list', ['limit'=>200]);
		$this->set(compact('pagina', 'categorias')); // passando model para view, colocando em pagina o objeto da model, newEtity
	}

	public function delete ($id = null)
	{
		$this->request->allowMethod(['get', 'post', 'delete']); 
		$pagina = $this->Paginas->get($id);
		$this->Paginas->delete($pagina);
		return $this->redirect([
					'action' => 'index'
				]);
	}

}
