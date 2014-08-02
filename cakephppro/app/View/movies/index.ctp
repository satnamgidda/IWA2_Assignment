<div class="movies index">
    <h2>Movies</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th>Title</th>
            <th>Genre</th>
            <th>Rating</th>
            <th>Format</th>
            <th>Length</th>
            <th class="actions">Actions</th>
        </tr>
    <?php foreach ($movies as $movie): ?>
    <tr>
        <td><?php echo $movie['Movie']['title']; ?> </td>
        <td><?php echo $movie['Movie']['genre']; ?> </td>
        <td><?php echo $movie['Movie']['rating']; ?> </td>
        <td><?php echo $movie['Movie']['format']; ?> </td>
        <td><?php echo $movie['Movie']['length']; ?> </td>
        <td class="actions">
            <?php echo $this->Html->link('View',
array('action' => 'view', $movie['Movie']['id'])); ?>
            <?php echo $this->Html->link('Edit',
array('action' => 'edit', $movie['Movie']['id'])); ?>
            <?php echo $this->Html->link('Delete',
array('action' => 'delete', $movie['Movie']['id']),
null, sprintf('Are you sure you want to delete %s?', $movie['Movie']['title'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
    <li> Hi ,<b><?php echo $this->Session->read('username'); ?></b></li>

        <li><?php echo $this->Html->link('New Movie', array('action' => 'add')); ?></li>
	<li><?php 
echo $this->Html->link( "Logout",   array('controller' => 'users','action'=>'logout') ); 
?></li>



	
    </ul>
</div>
