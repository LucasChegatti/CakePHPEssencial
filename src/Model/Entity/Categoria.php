<?php 

namespace App\Model\Entity; // onde se localiza o arquivo dentro do diretorio SRC

use Cake\ORM\Entity; // da um include na classe Entity do ORM do cakephp
use Cake\Utility\Inflector;

class Categoria extends Entity // toda classe extende Entity
{
	public $_accessible = [ // declarar todos os campos que a entidade vai ter acesso
		'id'=>true,
		'titulo'=>true,
		'url'=>true,
		'created'=>true,
		'modified'=>true,
	];

	public function _setTitulo ($titulo)
	{
		$this->set('url', strtoLower(Inflector::slug($titulo)));
		return $titulo;
	}

	public function _setUrl ($url)
	{
		return strtoLower(Inflector::slug($titulo));
	}
}