<div class="paginator">
	<ul class="pagination">
		<?php
			echo $this->Paginator->prev('< Anterior');
			echo $this->Paginator->numbers();
			echo $this->Paginator->next('Próxima >');
			
		?>
	</ul>
</div>
<center>
<?php echo $this->Paginator->counter(); ?>
</center>