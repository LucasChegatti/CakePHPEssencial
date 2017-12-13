<h3>Editar Página</h3>

<?php

$config = [
	'class' => 'form-control',
	'templates' => 'app_form',
	'label' => [
		'class' => 'col-sm-2 control-label'
	]
];

echo $this->Form->create($pagina, ['class' => 'form-horizontal']);
echo $this->Form->input('id');
echo $this->Form->input('titulo', $config);
echo $this->Form->input('conteudo', array_merge($config, ['class' => 'form-control editor']));
echo $this->Form->input('url', $config);
echo $this->Form->input('categoria_id', $config);
echo $this->Form->button('Submit', ['class' => 'btn btn-primary']);
echo $this->Form->end();

?>

<?php echo $this->element('editor'); ?>