<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriasTable extends Table 
{
    public function initialize (Array $config)
    {
        $this->addBehavior('Timestamp');
        $this->hasMany('Paginas');
        $this->displayField('titulo');
    }
}