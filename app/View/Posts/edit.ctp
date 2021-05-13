<div class="container">
    <h1>Edit Post</h1>
    <?php
        echo $this->Form->create('Post', array('action' => 'edit'));
        echo $this->Form->input('title');
        echo $this->Form->input('body', array('rows' => '3'));
        echo $this->Form->input('id', array('type' => 'hidden'));
        echo $this->Form->end('Save Post'); ?><br><br>
        <?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?>
</div>