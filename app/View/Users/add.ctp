<div class="container" id="adduser">
    <div class="users form">
        <?php echo $this->Form->create('User');?>
            <fieldset>
                <legend><?php echo __('ADD USER'); ?></legend>
                <?php echo $this->Form->input('username', array('required' => false)); ?><br>
                <?php echo $this->Form->input('password', array('required' => false)); ?><br>
                <?php echo $this->Form->input('role', array(
                    'options' => array('admin' => 'Admin', 'author' => 'Author')
                ));
            ?>
            </fieldset><br>
        <?php echo $this->Form->end(__('Submit')); ?><br><br>
        <?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?>
    </div>
</div>