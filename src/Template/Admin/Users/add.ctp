<h3>Novo Usuário</h3>

<?php

$config = [
	'class' => 'form-control',
	'templates' => 'app_form',
	'label' => [
		'class' => 'col-sm-2 control-label'
	]
];


echo $this->Form->create($user, ['class' => 'form-horizontal']);
echo $this->Form->input('name', $config);
echo $this->Form->input('email', $config);
echo $this->Form->input('username', $config);
echo $this->Form->input('password', $config);
echo $this->Form->button('Submit', ['class' => 'btn btn-primary']);
echo $this->Form->end();