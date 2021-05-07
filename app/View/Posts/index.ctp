<h1>Blog do CakePHP</h1>
<header>
    <ul id="menu">
        <li><?php echo $this->Html->link('Register', array('action' => '../Users/add')); ?></li>
        <li><?php echo $this->Html->link('Login', array('action' => '../Users/login')); ?></li>
        <li><?php echo $this->Html->link('Add Post', array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link('Logout', array('action' => '../Users/logout')); ?></li>
    </ul>
</header>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Actions</th>
        <th>Created</th>
    </tr>

<!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo as informações dos posts -->

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td>
                <?php echo $this->Html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id']));?>
            </td>
            <td>
                <?php echo $this->Form->postLink(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id']));
                ?>
                <?php echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?'));
                ?>
            </td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>