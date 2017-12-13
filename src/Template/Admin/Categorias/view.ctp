<h3><?php echo $result->titulo; ?></h3>
<hr>
<div class="container">
    <dl>
        <dt>Titulo:</dt>
        <dd><?php echo $result->titulo; ?></dd>
    </dl>
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
<h3>Páginas relacionadas</h3>

<ul>
    <?php foreach($result->paginas as $v) :?>
        <li><?php echo $v->id; ?> - <?php echo $v->titulo; ?></li>
    <?php endforeach; ?>
</ul>

<hr>




<?php echo $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-primary']);