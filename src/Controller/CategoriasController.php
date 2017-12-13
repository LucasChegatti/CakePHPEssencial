<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriasController extends AppController
{
    public function view($url = null)
    {
        $categoria = $this->Categorias->find()
            ->contain(['Paginas'])
            ->where(['Categorias.url'=>$url])
            ->first();

        $this->set(compact('categoria'));
    }
}
