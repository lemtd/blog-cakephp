<div class="container" id="login">
        <?php //echo $this->Flash->render('auth'); ?>
        <?php echo $this->Form->create('User');?>
            <fieldset>
                <legend id="login-login"><?php echo 'Login'; ?></legend><br>
                <?php echo $this->Form->input('username', array('required' => false, 'id' => 'username', 'between' => '<br>')); ?><br>
                <?php echo $this->Form->input('password', array('required' => false, 'id' => 'password', 'between' => '<br>'));?>
            </fieldset><br><br><br>
		<button id="login-back"><?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?></button>
        <div id="login-submit"><?php echo $this->Form->end('Login');?></div><br><br>
</div>
