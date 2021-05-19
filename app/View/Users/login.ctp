<div class="container" id="login">
        <?php //echo $this->Flash->render('auth'); ?>
        <?php echo $this->Form->create('User', array('novalidate' => true));?>
            <fieldset>
                <legend id="login-login"><?php echo 'Login'; ?></legend><br>
                <?php echo $this->Form->input('username', array('id' => 'username', 'between' => '<br>')); ?><br>
                <?php echo $this->Form->input('password', array('id' => 'password', 'between' => '<br>'));?>
            </fieldset><br><br><br>
		<button id="login-back"><?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?></button>
        <div id="login-submit"><?php echo $this->Form->end('Login');?></div><br><br>
</div>
