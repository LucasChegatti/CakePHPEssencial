<h3>Nova Categoria</h3>

<?php

$config = [
	'class' => 'form-control',
	'templates' => 'app_form',
	'label' => [
		'class' => 'col-sm-2 control-label'
	]
];

echo $this->Form->create($categoria, ['class' => 'form-horizontal']); // categoria vem do controller, que contem uma newEntity
echo $this->Form->input('titulo', $config);
echo $this->Form->button('Submit', ['class' => 'btn btn-primary']);
echo $this->Form->end();