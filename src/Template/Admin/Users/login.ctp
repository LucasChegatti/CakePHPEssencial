<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-md-4 col-md-offset-4">
	            <div class="login-panel panel panel-default ">
	                <div class="panel-heading">
	                    <h3 class="panel-title">
	                        <span class="text-center" style="padding-left: 130px">Acessar</span>
	                    </h3>
	                </div>
	                <div class="panel-body">
	                    <div class="error" style="font-size: 16px; color: red; padding: 10px"> <?= $this->Flash->render() ?></div>
	                    <?php
		                    echo $this->Form->create();
		                    echo $this->Form->input('username', [ 'label' => 'Username', 'class' => 'form-control', 'style' => 'margin-bottom:12px; ', 'div' => ['class' => 'form-group']]);
		                    echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'div' => ['class' => 'form-group']]);
		                    echo $this->Form->submit('Login', ['class' => ' btn btn-lg btn-success btn-block', 'style' => 'margin-top:15px; ']);
		                    echo $this->Form->end();
	                    ?>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</div>
</body>
</html>


