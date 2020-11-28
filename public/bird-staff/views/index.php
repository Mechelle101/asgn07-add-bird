<?php require_once('../../../private/initialize.php'); ?>

<?php $birds = Bird::find_all();?>
<?php $page_title = 'WNC Birds'; ?>
<?php include(SHARED_PATH . '/bird-staff-header.php'); ?>

<div id="content">
  <div class="bicycles listing">
    <h1>WNC Birds</h1>
    
    <div class="actions">
      <a class="action" href="<?php echo url_for('/bird-staff/views/new.php'); ?>">Add Bird</a>
    </div>
    
  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Common Name</th>
        <th>Habitat</th>
        <th>Food</th>
        <th>Conservation Level</th>
        <th>Backyard Tips</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
      
      <?php foreach($birds as $bird) { ?>
        <tr>
          <td><?= h($bird->id); ?></td>
          <td><?= h($bird->common_name); ?></td>
          <td><?= h($bird->habitat); ?></td>
          <td><?= h($bird->food); ?></td>
          <td><?= h($bird->conservation()); ?></td>
          <td><?= h($bird->backyard_tips); ?></td>
          <td><a class="action" href="<?php echo url_for('/bird-staff/views/show.php?id=' . h(u($bird->id))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/bird-staff/views/edit.php?id=' . h(u($bird->id))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/bird-staff/views/delete.php?id=' . h(u($bird->id))); ?>">Delete</a></td>
    	  </tr>
      <?php } ?>
  	</table>

  </div>

</div>

<?php include(SHARED_PATH . '/bird-staff-footer.php'); ?>
