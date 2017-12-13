<?php echo $this->Html->script('/tinymce/js/tinymce/tinymce.min', ['block' => 'script']); ?>
<?php
	echo $this->Html->scriptBlock('
			tinymce.init({selector:".editor"});
		', ['block' => 'script']);
?>