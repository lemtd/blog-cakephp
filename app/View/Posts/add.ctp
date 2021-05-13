<div class="container">
    <h1>Add Post</h1>
    <?php echo $this->Form->create('Post');?>
    <?php echo $this->Form->input('title'); ?><br>
    <?php echo $this->Form->input('body', array('rows' => '3')); ?><br>
    <?php echo $this->Form->end('Save Post'); ?><br><br>
    <?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?>
</div>