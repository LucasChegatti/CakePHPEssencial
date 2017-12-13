<?php

namespace App\Controller\Admin; // para declarar um namespace, começa pelo SRC(App) e vai ate a pasta em questao.

use App\Controller\AppController; // para usar uma classe começa pelo SRC(App) e vai ate o arquivo.

class CategoriasController extends AppController // todo controller estende AppController.
{
	public function index () 
	{
		$this->paginate = [ // manipula o limite de registros por pagina
			'limit' => 3
		];

		$data = $this->paginate($this->Categorias); // paginate passandoo model
		//$data = $this->Paginas->find()->all(); // Paginas = model que é o nome que esta em table mas sem o sufixo table... find retorna o querybuilder do cake e all para todos os resultados.
		$this->set(['results' => $data]); // envia valor results para view
	}

	public function view ($id = null)
	{
		$data = $this->Categorias->get($id, ['contain'=>'Paginas']); // joga em $data os dados referente ao ID.

		$this->set(['result' => $data]); // devolve result para view
	}

	public function add ()
	{
		$categoria = $this->Categorias->newEntity(); // cria uma entidade da model Categorias

		if ($this->request->is('post')) {
			//debug($this->request->data); // debug para ver o que esta vindo na requisição 
			//exit; // evitar renderizar a pagina
			$categoria = $this->Categorias->patchEntity($categoria, $this->request->data); // injeta os dados($this->request->data) dentro da entidade($categoria)
			if ($this->Categorias->save($categoria)) { // save responsavel por salvar os dados no banco
				return $this->redirect([
					'action' => 'index'
				]); // redireciona para url
			}
		}

		$this->set(compact('categoria')); // passando model para view, colocando em pagina o objeto da model, newEtity (compact recurso PHP que gera um array com valor passado)
	}

	public function edit ($id = null)
	{
		$categoria = $this->Categorias->get($id); // pega o id para editar e o resto é parecido com o metodo add

		if ($this->request->is(['post', 'put'])) { // put responsavel por atualizar registros
			$categoria = $this->Categorias->patchEntity($categoria, $this->request->data); //
			if ($this->Categorias->save($categoria)) { 
				return $this->redirect([
					'action' => 'index'
				]);
			} 
		}

		$this->set(compact('categoria'));
	}

	public function delete ($id = null)
	{
		$this->request->allowMethod(['get', 'post', 'delete']); // verifica o tipo de requisição
		$categoria = $this->Categorias->get($id); // pega o id 
		$this->Categorias->delete($categoria); // faz ação de deletar
		return $this->redirect([
					'action' => 'index'
				]); // redireciona 
	} 
}