<div class="container" id="register">
	<?php echo $this->Form->create('User', array('novalidate' => true));?>
		<fieldset>
			<legend id="register-register"><?php echo 'Register'; ?></legend><br>
			<?php echo $this->Form->input('username', array('id' => 'username', 'between' => '<br>')); ?><br>
			<?php echo $this->Form->input('password', array('id' => 'password', 'between' => '<br>')); ?><br>
			<?php echo $this->Form->input('role', array(
				'options' => array('admin' => 'Admin', 'author' => 'Author'),
				'id' => 'role',
				 'between' => '<br>'
			));
			?>
		</fieldset><br><br><br>
	<button id="register-back"><?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?></button>
	<div id="register-submit"><?php echo $this->Form->end('Register'); ?></div>
</div>
