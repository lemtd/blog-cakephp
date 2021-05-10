<h2>Blog do CakePHP</h2>
<header>
    <ul id="menu">
        <li><?php echo $this->Html->link('Register', array('action' => '../Users/add')); ?></li>
        <li><?php echo $this->Html->link('Login', array('action' => '../Users/login')); ?></li>
        <li><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link('Logout', array('action' => '../Users/logout')); ?></li>
    </ul>
</header>

<?php echo $this->Form->create('properties', array('type' => 'POST', 'class' => 'forms_post')); 
echo $this->Form->input('Search', array(
    'lable' => false,
    'value' => 'oie',
    'class' => 'forms_blog'
));
echo $this->Form->button('Submit', array('class' => 'botao', 'class' => 'forms_button'));
echo $this->Form->end();
?><br><br>

<table class="container" id="table_container">
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

