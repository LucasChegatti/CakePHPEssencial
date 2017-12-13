<h1>Meus Usuários</h1>

<table class="table table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>username</th>
			<th class="text-right">ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($results as $v) : ?>
			<tr>
				<td><?php echo $v->id; ?></td>
				<td><?php echo $v->name; ?></td>
				<td><?php echo $v->email; ?></td>
				<td><?php echo $v->username; ?></td>
				<td class="text-right">
					<?php
						echo $this->Html->link('Ver', [
								'controller' => 'users',
								'action' => 'view',
								$v->id
							],
							['class' => 'btn btn-success btn-xs']
						); // link para url de view
					?>
					<?php
						echo $this->Html->link('Editar', [
								'controller' => 'users',
								'action' => 'edit',
								$v->id
							],
							['class' => 'btn btn-primary btn-xs']
						); // link para url de edit
					?>
					<?php
						echo $this->Html->link( // link para controller paginas e action delete
							'Remover',
							[
								'controller' => 'users',
								'action' => 'delete',
								$v->id
							], [
								'confirm' => 'Tem certeza?',
								'class' => 'btn btn-danger btn-xs'
							]
						);
					?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<?php
	echo $this->Html->link('Novo', [
								'controller' => 'users',
								'action' => 'add'
							],
							[
								'class' => 'btn btn-primary bt-lg'
							]
						);
?>

<?php echo $this->element('pagination'); //busca arquivo da pasta element