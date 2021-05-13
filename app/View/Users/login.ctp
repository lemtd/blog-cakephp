<div class="users form">
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Please enter your username and password'); ?></legend>
        <?php echo $this->Form->input('username', array('required' => false));
        echo $this->Form->input('password', array('required' => false));?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>