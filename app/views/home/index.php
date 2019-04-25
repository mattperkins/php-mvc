<?php 
$departments = Department::all();
ob_start();
?>

<h2>All Departments</h2>
<?php foreach($departments as $department): ?>
  <h4><?= $department->name ?></h4>
  <?php foreach($department->subjects as $subject): ?>
    <li class="list-group mb-2">
      <?= $subject->name ?>
    </li>
  <?php endforeach ?>
<?php endforeach ?>


<?php 
$content = ob_get_clean();
include_once("../app/views/partials/master.php"); 
?>