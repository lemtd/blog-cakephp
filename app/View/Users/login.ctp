<div class="container" id="login">
    <div class="users form">
        <?php //echo $this->Flash->render('auth'); ?>
        <?php echo $this->Form->create('User');?>
            <fieldset id="sms-login">
                <legend><?php echo 'Please, enter your username and password'; ?></legend>
                <?php echo $this->Form->input('username', array('required' => false, 'class' => 'container')); ?><br>
                <?php echo $this->Form->input('password', array('required' => false, 'class' => 'container'));?>
            </fieldset><br>
        <?php echo $this->Form->end(__('Login'));?><br><br>
        <?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?>
    </div>
</div>
