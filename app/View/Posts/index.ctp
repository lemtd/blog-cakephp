<h2>Blog do CakePHP</h2>
<header>
    <ul id="menu">
        <li><?php echo $this->Html->link('Register', array('action' => '../Users/add')); ?></li>
        <li><?php echo $this->Html->link('Login', array('action' => '../Users/login')); ?></li>
        <li><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link('Logout', array('action' => '../Users/logout')); ?></li>
    </ul>
</header>
<div class="container">
    <table class="table table-hover" id="table_container">
        <?php
            echo $this->Form->create('Properties', array('type' => 'post'));
            echo $this->Form->input('Search', array(
                'between'=>'<label for="search" class="main_search"></label><br>',
                "placeholder" => "Search",
                'label'=>false
            ));
            echo $this->Form->button('Submit', array('class'=>'btn btn-primary'));
            echo $this->Form->end();
        ?>
        <br><br>

        <tr>
            <th id="title_table">Title</th>
            <th id="action_table">Action</th>
        </tr>

        <?php $i = 0; foreach ($posts as $post): ?>
            <tr>
                <td>
                    <div data-toggle="collapse" data-target="#demo-<?php echo $i; ?>"><?php echo $post['Post']['title']; ?></div> 
                    <div id="demo-<?php echo $i; $i++; ?>" class="collapse">
                        <?php echo $post['Post']['body']; ?>
                    </div> 
                </td>
                <td>
                    <?php echo $this->Form->postLink('Edit', array('action' => 'edit', $post['Post']['id'])); ?>
                    <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $post['Post']['id']),  array('confirm' => 'Are you sure?')); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>