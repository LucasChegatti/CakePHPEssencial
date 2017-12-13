<h1>Minhas Categorias</h1>

<table class="table table-hover">
	<thead>
		<tr>
			<th>id</th>
			<th>titulo</th>
			<th>url</th>
			<th class="text-right">ações</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($results as $v) : ?> <!-- foreach pega o result e joga para v -->
			<tr>
				<td><?php echo $v->id; ?></td> <!--acessaConteudo-->
				<td><?php echo $v->titulo; ?></td>
				<td><?php echo $v->url; ?></td>
				<td class="text-right">
					<?php
						echo $this->Html->link('Ver', [
								'controller' => 'categorias',
								'action' => 'view',
								$v->id
							],
							['class' => 'btn btn-success btn-xs']
						); // link para url de view
					?>
					<?php
						echo $this->Html->link('Editar', [
								'controller' => 'categorias',
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
								'controller' => 'categorias',
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
								'controller' => 'categorias',
								'action' => 'add'
							],
							[
								'class' => 'btn btn-primary bt-lg'
							]
						);
?>
<?php echo $this->element('pagination'); //busca arquivo da pasta element