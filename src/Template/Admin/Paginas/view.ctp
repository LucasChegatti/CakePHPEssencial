<h3><?php echo $result->titulo; ?></h3>
<hr>
<div class="container">
    <dl>
        <dt>Url:</dt>
        <dd><?php echo $result->url; ?></dd>
    </dl>
    <dl>
        <dt>Criado em:</dt>
        <dd><?php echo $result->created; ?></dd>
    </dl>
    <dl>
        <dt>Modificado em:</dt>
        <dd><?php echo $result->modified; ?></dd>
    </dl>
</div>


<?php echo $result->conteudo; ?>

<hr>

<?php echo $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-primary']);