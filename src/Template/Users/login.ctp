
<div class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title">Login</h3>
	  </div>
	  <div class="panel-body make-space">
	    <?= $this->Form->create() ?>
		<?= $this->Form->input('email', ['class' => 'form-control make-space']) ?>
		<?= $this->Form->input('password', ['class' => 'form-control make-space']) ?>
		<?= $this->Form->button('Login', ['class' => 'btn btn-primary']) ?>
		<?= $this->Form->end() ?>
	  </div>
	</div>
</div>