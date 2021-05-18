<div class="container">
    <h1>Edit Post</h1>
    <?php
    echo $this->Form->create('Post');
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->input('status', array(
                    'options' => array('Disabled', 'Abled'),
                    'label' => false
                ));
    ?><br><br>
    <?php echo $this->Form->end('Save Post'); ?><br><br>
    <?php echo $this->Html->link('Back', array('action' => '../Posts/index')); ?>
</div>
