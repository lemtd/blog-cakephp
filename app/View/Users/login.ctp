<div class="container">
    <div class="users form">
        <?php echo $this->Flash->render('auth'); ?>
        <?php echo $this->Form->create('User');?>
            <fieldset>
                <legend><?php echo __('Please enter your username and password'); ?></legend>
                <?php echo $this->Form->input('username', array('required' => false)); ?><br>
                <?php echo $this->Form->input('password', array('required' => false));?>
            </fieldset><br>
        <?php echo $this->Form->end(__('Login'));?><br><br>
        <?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?>
    </div>
</div>