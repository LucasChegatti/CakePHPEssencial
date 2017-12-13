<h3><?php echo $result->name; ?></h3>
<hr>
<div class="container">
    <dl>
        <dt>Email:</dt>
        <dd><?php echo $result->email; ?></dd>
    </dl>
    <dl>
        <dt>Username:</dt>
        <dd><?php echo $result->username; ?></dd>
    </dl>
    <dl>
        <dt>Password:</dt>
        <dd><?php echo $result->password; ?></dd>
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

<hr>

<?php echo $this->Html->link('Voltar', ['action' => 'index'], ['class' => 'btn btn-primary']);